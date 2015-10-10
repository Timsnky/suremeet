<?php
/**
 * Created by PhpStorm.
 * User: interntwo
 * Date: 10/9/15
 * Time: 3:42 PM
 */

namespace SureMeet\SignUp;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use SureMeet\Users\User;
use SureMeet\Users\UserRepository;


/**
 * Class SignUpCommandHandler
 * @package SureMeet\SignUp
 */
class SignUpCommandHandler implements  CommandHandler
{

    use DispatchableTrait;

    /**
     * @var
     */
    protected $repository;

    /**
     * SignUpCommandHandler constructor.
     * @param $repository
     */
    public function __construct(UserRepository $repository)
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
        $user = User::register (
            $command->firstname, $command->lastname, $command->email,
            $command->organisation, $command->password
        );

        $this->repository->save($user);

        $this->dispatchEventsFor($user);

        return $user;
    }
}