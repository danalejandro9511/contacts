<?php

use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contacts')->insert([
        'first_name' => 'Daniel',
        'last_name' => 'Miranda',
        'email' => 'danielalejandro9511@gmail.com',
        'telephone' => mt_rand(),
        'comments' => 'Sin comentarios',
      ]);
    }
}
