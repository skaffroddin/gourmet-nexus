<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomRecipesTable extends Migration
{
    public function up()
    {
        Schema::create('custom_recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // Foreign key referencing users
            $table->string('cuisine'); // Cuisine type
            $table->string('dietary_restrictions')->nullable(); // Dietary restrictions
            $table->text('main_ingredients'); // Main ingredients to include
            $table->string('time_availability'); // Time available for cooking
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('custom_recipes');
    }
}
