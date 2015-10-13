<?php

use SureMeet\Settings\Setting;
use SureMeet\Meetings\Meeting;
use Faker\Factory as Faker;

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
        Setting::create(array('name' => 'meeting_frequency', 'setting' => 7));
        Setting::create(array('name' => 'schedules_columns', 'setting' => 3));
        Setting::create(array('name' => 'reminder_days', 'setting' => 3));

        DB::table('meetings')->delete();
        $faker = Faker::create();
        foreach(range(1,20) as $index)
        {
            Meeting::create([
               'date' => $faker->dateTimeBetween('-1 years', '1 years'),
                'title' => $faker->word,
                'abstract' => $faker->text(),
                'user_id' => 1
            ]);
        }
    }
}
