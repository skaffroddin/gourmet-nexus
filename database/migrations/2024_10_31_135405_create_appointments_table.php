<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // Foreign key referencing users
            $table->foreignId('chef_id')->constrained('users'); // Foreign key referencing chefs
            $table->date('appointment_date'); // Appointment date
            $table->time('appointment_time'); // Appointment time
            $table->text('user_message')->nullable(); // User's message
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
