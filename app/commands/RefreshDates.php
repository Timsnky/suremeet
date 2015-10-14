<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Carbon\Carbon;
use SureMeet\MeetingDates\MeetingDate;

class RefreshDates extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'refresh:dates';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
        $currentDate = Carbon::now();

        $lastFreeDate = Carbon::createFromFormat('Y-m-d',
            MeetingDate::orderBy('date', 'asc')->get()->last()->date
        );

        $lastMeetingDate = Carbon::createFromFormat('Y-m-d',
            Meeting::orderBy('date', 'asc')->get()->last()->date
        );

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array();
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
