<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // User's full name
            $table->string('email')->unique(); // User's email address
            $table->string('password'); // Hashed password
            $table->date('date_of_birth'); // User's date of birth
            $table->string('phone_number'); // User's phone number
            $table->string('state'); // State of residence
            $table->string('country'); // Country of residence
            $table->string('gender'); // Gender (Male/Female/Other)
            $table->string('role'); // Role (Chef/User)
            $table->string('chef_expertise')->nullable(); // Chef's area of expertise
            $table->decimal('chef_hourly_rate', 8, 2)->nullable(); // Chef's hourly rate
            $table->string('profile_photo')->nullable(); // Profile picture path
            $table->string('otp')->nullable(); // OTP for email verification
            $table->boolean('is_verified')->default(false); // Email verification status
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
