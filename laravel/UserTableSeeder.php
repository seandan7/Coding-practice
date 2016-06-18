<?php

	class UserTableSeeder extends Seeder {
	
		public function run() {
			
			User::truncate();
			User::create([
				'username' => 'sean',
				'email' => 'sean@librarysean.com',
				'password' => '1234'
			]);
			
			User::create([
				'username' => 'michael',
				'email' => 'michael@librarysean.com',
				'password' => '1234'
			]);
		}
	}
	
?>