<?php namespace Anomaly\Streams\Addon\Module\Users\Ui\Form;

use Anomaly\Streams\Addon\Module\Users\User\UserModel;
use Anomaly\Streams\Platform\Ui\Form\Form;

/**
 * Class UserForm
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Module\Users\Ui
 */
class UserForm extends Form
{

    /**
     * Setup the form class.
     */
    protected function boot()
    {
        $this->setUpModel();
        $this->setUpSkips();
        $this->setUpActions();
        $this->setUpSections();
        $this->setUpRedirects();
    }

    /**
     * Set up the model.
     */
    protected function setUpModel()
    {
        $this->setModel(new UserModel());
    }

    /**
     * Set up the skipped fields.
     */
    protected function setUpSkips()
    {
        $this->setSkips(
            [
                'password',
                'last_login_at',
                'last_activity_at',
            ]
        );
    }

    /**
     * Set up form redirects.
     */
    protected function setUpRedirects()
    {
        $this->setRedirects(
            [
                'save',
            ]
        );
    }

    /**
     * Set up the form actions.
     */
    protected function setUpActions()
    {
        $this->setActions(
            [
                'cancel',
                'delete',
            ]
        );
    }

    /**
     * Set up the form sections.
     */
    protected function setUpSections()
    {
        $this->setSections(
            [
                [
                    'type' => 'tabbed',
                    'tabs' => [
                        [
                            'title'  => 'Test Tab',
                            'fields' => [
                                'first_name',
                                'last_name',
                            ],
                        ],
                        [
                            'title'  => 'Another!',
                            'fields' => [
                                'username',
                                'email',
                            ],
                        ]
                    ]
                ]
            ]
        );
    }
}
 