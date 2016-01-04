<?php
use Illuminate\Database\Seeder;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserTableSeeder extends Seeder{
    
    
    public function run(){
        DB::table('users')->truncate();
        App\User::create(['email'=>'admin@admin.com','name'=>'admin','password'=> password_hash('admin',1)]);
        
        
    }
    
}