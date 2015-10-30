<?php namespace Anomaly\UsersModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeCollection;
use Anomaly\Streams\Platform\Assignment\Contract\AssignmentInterface;
use Anomaly\Streams\Platform\Assignment\Contract\AssignmentRepositoryInterface;
use Anomaly\Streams\Platform\Assignment\Table\AssignmentTableBuilder;
use Anomaly\Streams\Platform\Field\Form\FieldAssignmentFormBuilder;
use Anomaly\Streams\Platform\Field\Form\FieldFormBuilder;
use Anomaly\Streams\Platform\Field\Table\FieldTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\UsersModule\User\UserModel;

/**
 * Class FieldsController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\Http\Controller\Admin
 */
class FieldsController extends AdminController
{

    /**
     * Return an index of existing fields.
     *
     * @param FieldTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(AssignmentTableBuilder $table, UserModel $users)
    {
        $table->setOption('sortable', true)->setStream($users->getStream());

        return $table->render();
    }

    /**
     * Choose a field type for creating a field.
     *
     * @param FieldTypeCollection $fieldTypes
     * @return \Illuminate\View\View
     */
    public function choose(FieldTypeCollection $fieldTypes)
    {
        return view('anomaly.module.users::ajax/choose_field_type', ['field_types' => $fieldTypes]);
    }

    /**
     * Return the form for a new field.
     *
     * @param FieldFormBuilder    $form
     * @param UserModel           $users
     * @param FieldTypeCollection $fieldTypes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(FieldFormBuilder $form, UserModel $users, FieldTypeCollection $fieldTypes)
    {
        $form
            ->setStream($users->getStream())
            ->setOption('auto_assign', true)
            ->setFieldType($fieldTypes->get($_GET['field_type']));

        return $form->render();
    }

    /**
     * Return a form to edit the field.
     *
     * @param AssignmentRepositoryInterface $assignments
     * @param FieldFormBuilder              $form
     * @param UserModel                     $model
     * @param                               $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AssignmentRepositoryInterface $assignments, FieldFormBuilder $form, UserModel $model, $id)
    {
        /* @var AssignmentInterface $assignment */
        $assignment = $assignments->find($id);

        return $form
            ->setStream($model->getStream())
            ->render($assignment->getFieldId());
    }
}
