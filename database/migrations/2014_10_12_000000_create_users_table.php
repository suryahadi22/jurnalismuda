<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('full_name'); // Nama Lengkap
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->enum('level_access', ['standart', 'moderator', 'admin'])->default('standart');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable(); // DATA FOTO PROFIL
            $table->string('jobs')->nullable(); // Pekerjaan
            $table->string('jobs_where')->nulable(); // Kerja dimana?
            $table->string('social_facebook')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_linkedin')->nullable();
            $table->string('social_youtube')->nullable();
            $table->string('contact_phone_number')->nullable();
            $table->string('contact_line')->nullable();
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_province')->nullable();
            $table->integer('address_zipcode')->nullable();
            $table->enum('sex', ['Laki-laki', 'Perempuan'])->nullable();
            $table->timestamp('birthday')->nullable();
            $table->enum('account_status', ['active', 'inactive'])->default('active');
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
