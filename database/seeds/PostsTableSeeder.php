<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->insert (
            array (
                [
                    'title' => ' title 1',
                    'alias' => 'title_1_alias',
                    'intro' => 'intro 1',
                    'body' => 'body 1'
                ],[
                    'title' => ' title 2',
                    'alias' => 'title_2_alias',
                    'intro' => 'intro 2',
                    'body' => 'body 2'
                ],[
                    'title' => ' title 3',
                    'alias' => 'title_3_alias',
                    'intro' => 'intro 3',
                    'body' => 'body 3'
                ]
                )
            );
    }
}
