<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('category_ID');
			$table->smallInteger('amountInStock')->default(0);
			$table->text('technicalDetails')->nullable();
			$table->integer('sellingPrice')->nullable()->default(0);
			$table->string('sellingPriceCurrency')->default('GHC');
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
		Schema::drop('products');
	}

}
