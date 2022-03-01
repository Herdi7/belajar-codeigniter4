<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PersonsSeeder extends Seeder
{
    public function run()
    {
        for( $i = 0; $i < 23; $i++ ) {
            $faker = \Faker\Factory::create('id_ID');
            $data = [
                'name'          => $faker->name(),
                'address'       => $faker->address,
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::createFromTimestamp($faker->unixTime())
            ];

            $this->db->table('persons')->insert($data);
        }

        // Simple Queries
        //   $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

          // Using Query Builder
    }
}
