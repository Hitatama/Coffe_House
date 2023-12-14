<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCafeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafe', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->longblob('berkas')->nullable(false);
            $table->string('name')->nullable(false);
            $table->longtext('description')->nullable(false);
            $table->string('opentime')->nullable(false);
            $table->string('address')->nullable(false);
            $table->timestamps();
            $table->string('created_by');




            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cafe', function (Blueprint $table) {
            //
        });
    }
}
