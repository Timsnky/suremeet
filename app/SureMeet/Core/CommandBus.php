<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/9/15
 * Time: 3:32 PM
 */

namespace SureMeet\Core;

use App;

/**
 * Class CommandBus
 * @package SureMeet\Core
 */
trait CommandBus
{

    /**
     * Get the commandbus and use it to execute the command
     * @param $command
     */
    public function execute($command)
    {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * Retrieve the commandbus
     * @return The commandbus
     */
    public function getCommandBus()
    {
       return App::make('Laracasts\Commander\CommandBus');
    }
}