<?php

class Create_Barangmasuks {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barangmasuks', function($table) {
            $table->increments('id');
            $table->text('suplier');
            $table->text('barang');
            $table->date('tanggal');
            $table->text('jumlah');
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
		chema::drop('barangmasuks');
	}

}