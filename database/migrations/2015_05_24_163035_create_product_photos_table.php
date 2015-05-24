<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_photos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('url');
            $table->string('mime');
            $table->string('name');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_photos');
	}

}
