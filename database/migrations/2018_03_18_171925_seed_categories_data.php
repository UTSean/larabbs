<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $categories = [
            [
                'name' => 'Share',
                'description' => 'Sharing idea and discovery',
            ],
            [
                'name' => 'Tutorial',
                'description' => 'Tricks of programming',
            ],
            [
                'name' => 'FAQ',
                'description' => 'Please be friendly and helpful',
            ],
            [
                'name' => 'notification',
                'description' => 'Notifications of this Website',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('categories')->truncate();
    }
}
