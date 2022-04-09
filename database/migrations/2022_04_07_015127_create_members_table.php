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
            $table->increments('id');
            $table->string('image')->default('default.png');
            $table->date('dob');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('phone')->unique();
            $table->string('address1');
            $table->string('address2');
            $table->string('sex');
            $table->string('marital_status');
            $table->string('occupation');
            $table->text('member_since');
          
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
