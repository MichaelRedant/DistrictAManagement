<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name_business')->required;
            $table->string('name_zaakvoerder');
            $table->string('email')->required;
            $table->integer('street_id')->required;
            $table->string('street_number')->required;
            $table->string('website');
            $table->boolean('dekenij');
            $table->string('hours');
            $table->string('closing');
            $table->integer('label')->required;
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
        Schema::dropIfExists('members');
    }
}
