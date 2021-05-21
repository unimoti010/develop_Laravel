<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTextbooksObject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('textbooks', function (Blueprint $table) {
            
            $table->dropColumn('category_id');
            $table->dropColumn('state_id');

            $table->string('category');
            $table->string('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('textbooks', function (Blueprint $table) {
            
            $table->bigInteger('category_id')->unsigned()->index;
            $table->bigInteger('state_id')->unsigned()->index;

            $table->dropColumn('category');
            $table->dropColumn('state');
        });
    }
}
