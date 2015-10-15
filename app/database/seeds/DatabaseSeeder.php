<?php

use SureMeet\Settings\Setting;
use SureMeet\Meetings\Meeting;
use Faker\Factory as Faker;
use Carbon\Carbon;
use SureMeet\MeetingDates\MeetingDate;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SettingsTableSeeder');
	}
}

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('settings')->delete();
        Setting::create(array('name' => 'meeting_frequency', 'setting' => 1));
        Setting::create(array('name' => 'schedules_columns', 'setting' => 3));
        Setting::create(array('name' => 'reminder_days', 'setting' => 3));

//        DB::table('meetings')->delete();
//        $faker = Faker::create();
//        foreach(range(1,20) as $index)
//        {
//            Meeting::create([
//               'date' => $faker->dateTimeBetween('-1 years', '1 years'),
//                'title' => $faker->word,
//                'abstract' => $faker->text(),
//                'user_id' => 1
//            ]);
//        }

        DB::table('meeting_dates')->delete();
        $frequency = Setting::where('name', 'meeting_frequency')->first()->setting;
        $currentDate = Carbon::now();
        MeetingDate::create(['date' => $currentDate]);
        for($i = 0; $i < 10 ; $i ++)
        {
            $currentDate = $currentDate->addDays($frequency * 7);
            MeetingDate::create(['date' => $currentDate]);
        }
    }
}
