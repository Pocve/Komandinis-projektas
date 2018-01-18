<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\ServiceProvider;

class AddClientInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->integer('date_of_birth');
            $table->integer('phone_number');
            $table->string('email');
            $table->string('password');
            $table->string('password_confirmation');
            $table->string('address');
            $table->string('city');
            $table->integer('zip_code');
            $table->string('country');
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
        Schema::table('client', function (Blueprint $table) {
             $table->dropColumn(['name', 'surname', 'date_of_birth', 'phone_number', 'email', 'password', 'password_confirmation', 'address', 'city', 'zip_code', 'country']);
        });
    }
}
