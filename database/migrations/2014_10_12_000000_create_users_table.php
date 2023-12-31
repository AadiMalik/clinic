<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone1')->unique();
            $table->string('cnic')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('speciality')->nullable();
            $table->string('degree1')->nullable();
            $table->string('degree2')->nullable();
            $table->bigInteger('clinic_id')->nullable();
            $table->bigInteger('createdby_id')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
