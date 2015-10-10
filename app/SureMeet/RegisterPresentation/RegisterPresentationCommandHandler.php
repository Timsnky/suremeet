<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/10/15
 * Time: 4:31 PM
 */

namespace SureMeet\RegisterPresentation;


use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use SureMeet\Meetings\Meeting;
use SureMeet\Meetings\MeetingRepository;

class RegisterPresentationCommandHandler implements CommandHandler
{
    use DispatchableTrait;

    protected $repository;

    /**
     * RegisterPresentationCommandHandler constructor.
     * @param $repository
     */
    public function __construct(MeetingRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $meeting = Meeting::register (
            $command->date, $command->title, $command->abstract,
            $command->shareable, $command->userId
        );

        $this->repository->save($meeting);

        $this->dispatchEventsFor($meeting);

        return $meeting;
    }
}