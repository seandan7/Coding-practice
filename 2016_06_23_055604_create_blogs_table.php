<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		//name table blogs with callback function
        Schema::create('blogs', function(Blueprint $table){
			
			//table columns
			$table->increments('id');
			$table->string('title');
			$table->string('text');
			$table->timestamps();
			
		} );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blogs');
    }
}
