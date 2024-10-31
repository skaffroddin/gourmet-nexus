<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->date('date_of_birth')->nullable();
        $table->string('phone_number')->nullable();
        $table->string('state')->nullable();
        $table->string('country')->nullable();
        $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
        $table->enum('role', ['user', 'chef'])->default('user');
        $table->string('chef_expertise')->nullable();
        $table->decimal('chef_hourly_rate', 8, 2)->nullable();
        $table->string('profile_photo')->nullable();
        $table->rememberToken();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
