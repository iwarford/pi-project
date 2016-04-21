<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');

	    // Older versions of MySQL can't have 2 columns 
	    // w/ CURRENT_TIMESTAMP in use, so we settle for one
	    $table->timestamp('created_at')->useCurrent();
	    $table->timestamp('updated_at');

            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->date('birthdate');

            /* Foreign key to reference the Surgeon */
            $table->integer('surgeon_id')->unsigned();
            $table->foreign('surgeon_id')->references('id')->on('surgeons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');        
    }
}
