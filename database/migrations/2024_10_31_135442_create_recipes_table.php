<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chef_id')->nullable()->constrained('users'); // Foreign key referencing chefs
            $table->string('recipe_name'); // Name of the recipe
            $table->text('description'); // Recipe description
            $table->text('ingredients'); // List of ingredients
            $table->text('instructions'); // Cooking instructions
            $table->integer('prep_time'); // Preparation time
            $table->integer('cook_time'); // Cooking time
            $table->string('recipe_image'); // Recipe image path
            $table->string('category'); // Recipe category
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
