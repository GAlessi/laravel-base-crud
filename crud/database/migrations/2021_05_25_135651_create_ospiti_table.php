<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOspitiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ospiti', function (Blueprint $table) {
            $table->id();

            $table -> string('name', 255);
            $table -> string('lastname', 255);
            $table -> date('date_of_birth');
            $table -> string('document_type', 255);
            $table -> string('document_number', 255);

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
        Schema::dropIfExists('ospiti');
    }
}
