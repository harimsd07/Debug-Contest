<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('round_two_answers', function (Blueprint $table) {
            $table->id(); // Primary key column
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key referencing the users table
            $table->foreignId('round_two_questions_id')->constrained('round_two_questions')->onDelete('cascade'); // Foreign key referencing round_two_questions table
            $table->text('answer_text'); // The answer text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('round_two_answers');
    }
};
