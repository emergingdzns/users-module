<?php namespace Anomaly\Streams\Addon\Module\Users\Ui\Table\View;

use Anomaly\Streams\Platform\Ui\Table\TableView;

/**
 * Class BlockedUsersTableView
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Module\Users\Ui\View
 */
class BlockedUsersTableView extends TableView
{

    /**
     * Show only active users.
     *
     * @param $query
     * @return mixed|void
     */
    public function handle($query)
    {
        return $query->where('is_blocked', 1);
    }
}
 