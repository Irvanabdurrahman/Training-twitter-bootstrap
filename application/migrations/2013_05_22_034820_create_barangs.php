<?php

class Create_Barangs {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barangs', function($table) {
            $table->increments('id');
            $table->text('kode');
            $table->text('nama');
            $table->text('harga');
            $table->timestamps("created_at");
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('barangs');
	}

}