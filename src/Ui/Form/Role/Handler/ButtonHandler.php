<?php namespace Anomaly\UsersModule\Ui\Form\Role\Handler;

/**
 * Class ButtonHandler
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\Ui\Form\Role\Handler
 */
class ButtonHandler
{

    /**
     * Return the form buttons.
     *
     * @return array
     */
    public function handle()
    {
        return [
            'cancel',
            'delete'
        ];
    }
}