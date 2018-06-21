<?php

use App\Prizelist;
use Illuminate\Database\Seeder;

class PrizelistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrator
        //  - All permissions : add,edit,delete
        //  - All site settings
        //  - All webmaster settings

        $newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 1";
        $newpizelist->description = "Prize 1 Detail";
        $newpizelist->points = "1";
        $newpizelist->created_by = "admin";
        $newpizelist->save();

        // Site Manager
        //  - All permissions : add,edit,delete
        //  - All site settings

		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 2";
        $newpizelist->description = "Prize 2 Detail";
        $newpizelist->points = "2";
        $newpizelist->created_by = "admin";
        $newpizelist->save();

        // Normal User
        //  - Permissions : add,edit
        //  - No site settings & no delete

       $newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 3";
        $newpizelist->description = "Prize 3 Detail";
        $newpizelist->points = "3";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		//Normal
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 4";
        $newpizelist->description = "Prize 4 Detail";
        $newpizelist->points = "4";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		//Normal 
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 5";
        $newpizelist->description = "Prize 5 Detail";
        $newpizelist->points = "5";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 6";
        $newpizelist->description = "Prize 6 Detail";
        $newpizelist->points = "6";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 7";
        $newpizelist->description = "Prize 7 Detail";
        $newpizelist->points = "7";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 8";
        $newpizelist->description = "Prize 8 Detail";
        $newpizelist->points = "8";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 9";
        $newpizelist->description = "Prize 9 Detail";
        $newpizelist->points = "9";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 10";
        $newpizelist->description = "Prize 10 Detail";
        $newpizelist->points = "10";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 11";
        $newpizelist->description = "Prize 11 Detail";
        $newpizelist->points = "11";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 12";
        $newpizelist->description = "Prize 12 Detail";
        $newpizelist->points = "12";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 13";
        $newpizelist->description = "Prize 13 Detail";
        $newpizelist->points = "13";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 14";
        $newpizelist->description = "Prize 14 Detail";
        $newpizelist->points = "14";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 15";
        $newpizelist->description = "Prize 15 Detail";
        $newpizelist->points = "15";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		$newpizelist = new Prizelist();
        $newpizelist->prize_name = "Prize 16";
        $newpizelist->description = "Prize 16 Detail";
        $newpizelist->points = "16";
        $newpizelist->created_by = "admin";
        $newpizelist->save();
		
		

    }
}
