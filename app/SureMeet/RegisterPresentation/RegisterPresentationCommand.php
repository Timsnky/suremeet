<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/10/15
 * Time: 4:19 PM
 */

namespace SureMeet\RegisterPresentation;


class RegisterPresentationCommand
{
    public $date;
    public $title;
    public $abstract;
    public $shareable;
    public $userId;

    /**
     * RegisterPresentationCommand constructor.
     * @param $date
     * @param $title
     * @param $abstract
     * @param $shareable
     * @param $userId
     */
    public function __construct($date, $title, $abstract, $shareable, $userId)
    {
        $this->date = $date;
        $this->title = $title;
        $this->abstract = $abstract;
        $this->shareable = $shareable;
        $this->userId = $userId;
    }
}