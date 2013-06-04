<?php

class Create_Supliers {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supliers', function($table) {
            $table->increments('id_sup');
            $table->text('id');
            $table->text('nama');
            $table->text('alamat');
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
		Schema::drop('supliers');
	}

}