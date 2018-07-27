<?php

use Illuminate\Database\Seeder;

class GitProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('git_projects')->delete();
        
        \DB::table('git_projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sort' => 1,
                'type' => 1,
                'name' => 'wangjiawen1221/thinkwjw',
                'created_at' => '2017-10-23 21:09:04',
                'updated_at' => '2017-10-26 21:42:40',
                'deleted_at' => NULL,
            )
        ));
        
        
    }
}