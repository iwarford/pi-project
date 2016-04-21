<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgeonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgeons', function (Blueprint $table) {
            $table->increments('id');

	    // Older versions of MySQL can't have 2 columns 
	    // w/ CURRENT_TIMESTAMP in use, so we settle for one
	    $table->timestamp('created_at')->useCurrent();
	    $table->timestamp('updated_at');

            $table->string('name');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('surgeons');
    }
}
