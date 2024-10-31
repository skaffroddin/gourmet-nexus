<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id')->constrained('appointments'); // Foreign key referencing appointments
            $table->integer('rating'); // Numeric rating
            $table->text('feedback_message')->nullable(); // User's feedback message
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
