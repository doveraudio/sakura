<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        
        // DB::table('users')->truncate();
        //$user = App\User::create(['email'=>'admin@admin.com','name'=>'admin','password'=>password_hash('admin', 1)]);
      
    }
}
