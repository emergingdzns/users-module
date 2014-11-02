<?php namespace Anomaly\Streams\Addon\Module\Users\Http\Controller\Admin;

use Anomaly\Streams\Addon\Module\Users\Ui\Form\RolesFormUi;
use Anomaly\Streams\Addon\Module\Users\Ui\Table\RolesTableUi;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class RolesController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Module\Users\Http\Controller\Admin
 */
class RolesController extends AdminController
{

    /**
     * Return the table UI for roles.
     *
     * @param RolesTableUi $ui
     * @return \Illuminate\View\View
     */
    public function index(RolesTableUi $ui)
    {
        return $ui->make();
    }

    /**
     * Return the form UI for an existing role.
     *
     * @param RolesFormUi $ui
     * @param             $id
     * @return \Illuminate\View\View
     */
    public function edit(RolesFormUi $ui, $id)
    {
        return $ui->make($id);
    }
}
 