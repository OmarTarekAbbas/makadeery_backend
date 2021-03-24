<?php

use Illuminate\Database\Seeder;

class ContentTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('content_types')->delete();

        \DB::table('content_types')->insert(array (
            0 =>
            array (
                'id' => 5,
                'title' => 'Video',
                'created_at' => '2019-02-14 13:06:38',
                'updated_at' => '2019-02-14 13:06:38',
            ),
        ));


    }
}
