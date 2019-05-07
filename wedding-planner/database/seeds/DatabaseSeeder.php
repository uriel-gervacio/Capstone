<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(CouplesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(MusicSeeder::class);
        $this->call(ReadingSeeder::class);
        


        //creates testing data
        $faker = Faker::create();

        $date = $faker->date($format = 'Y-m-d', $max = 'now');
        $hash1 = hash('ripemd160', $date);
        $hash2 = hash('snefru', $hash1);
        DB::table('weddings')->insert([
                'id' => 1,
                'hashID' => $hash2,
                'brideFirstName' => ('Couple'), 
                'brideLastName' => ('One'),
                'groomFirstName' => $faker->firstNameMale,
                'groomLastName' => $faker->lastName,
                'brideEmail' => ('couple1@email.com'),
                'groomEmail' => $faker->email,
                'weddingDate' => $date,
                'brideAddress'=>$faker->streetAddress  ,
                'brideCity'=> $faker->city ,
                'brideState'=> $faker->stateAbbr, 
                'brideZipCode'=>$faker->postcode ,
                'bridePhoneNumber'=> "708.505.1234",
                'groomAddress'=> $faker->streetAddress  ,
                'groomCity'=> $faker->city ,
                'groomState'=> $faker->stateAbbr,
                'groomZipCode'=> $faker->postcode ,
                'groomPhoneNumber'=>"708.505.1234",
                'weddingTime' => $faker->time($format = 'H:i:s', $max = 'now'),
                'rehearsalDate'=> $faker->date($format = 'Y-m-d', $max = 'now'),
                'rehearsalTime' =>$faker->time($format = 'H:i:s', $max = 'now'),
                'matrimonyType' => 'Without Mass',
            ]);

            $date = $faker->date($format = 'Y-m-d', $max = 'now');
            $hash1 = hash('ripemd160', $date);
            $hash2 = hash('snefru', $hash1);
            DB::table('weddings')->insert([
                'id' => 2,
                'hashID' => $hash2,
                'brideFirstName' => $faker->firstNameFemale,  
                'brideLastName' => $faker->lastName,
                'groomFirstName' => ('Couple'), 
                'groomLastName' => ('Two'),
                'brideEmail' => $faker->email,
                'groomEmail' => ('couple2@email.com'),
                'weddingDate' => $date,
                'brideAddress'=>$faker->streetAddress  ,
                'brideCity'=> $faker->city ,
                'brideState'=> $faker->stateAbbr, 
                'brideZipCode'=>$faker->postcode ,
                'bridePhoneNumber'=> "708.505.1234",
                'groomAddress'=> $faker->streetAddress  ,
                'groomCity'=> $faker->city ,
                'groomState'=> $faker->stateAbbr,
                'groomZipCode'=> $faker->postcode ,
                'groomPhoneNumber'=>"708.505.1234",
                'weddingTime' => $faker->time($format = 'H:i:s', $max = 'now'),
                'rehearsalDate'=> $faker->date($format = 'Y-m-d', $max = 'now'),
                'rehearsalTime' =>$faker->time($format = 'H:i:s', $max = 'now'),
                'matrimonyType' => 'Between a catholic and a catechumen or non-christian',
            ]);

    	foreach (range(3,50) as $index) {
        $date = $faker->date($format = 'Y-m-d', $max = 'now');
        $hash1 = hash('ripemd160', $date);
        $hash2 = hash('snefru', $hash1);
        DB::table('weddings')->insert([
            'id' => $index,
            'hashID' => $hash2,
            'brideFirstName' => $faker->firstNameFemale,  
            'brideLastName' => $faker->lastName,
            'groomFirstName' =>  $faker->firstNameMale,
            'groomLastName' => $faker->lastName,
            'brideEmail' => $faker->email,
            'groomEmail' => $faker->email,
            'weddingDate' => $date,
            'brideAddress'=>$faker->streetAddress  ,
            'brideCity'=> $faker->city ,
            'brideState'=> $faker->stateAbbr, 
            'brideZipCode'=>$faker->postcode ,
            'bridePhoneNumber'=> "708.505.1234",
            'groomAddress'=> $faker->streetAddress  ,
            'groomCity'=> $faker->city ,
            'groomState'=> $faker->stateAbbr,
            'groomZipCode'=> $faker->postcode ,
            'groomPhoneNumber'=>"708.505.1234",
            'weddingTime' => $faker->time($format = 'H:i:s', $max = 'now'),
            'rehearsalDate'=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'rehearsalTime' =>$faker->time($format = 'H:i:s', $max = 'now'),
            'matrimonyType' => 'With Mass',
        ]);}
    }
}
