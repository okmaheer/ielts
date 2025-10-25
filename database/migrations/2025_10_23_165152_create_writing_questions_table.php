<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('writing_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained('tests')->onDelete('cascade');
            $table->integer('task_number'); // 1 or 2
            $table->text('question_text');
            $table->string('image_url')->nullable(); // For Task 1 images
            $table->integer('word_limit')->default(150); // 150 for Task 1, 250 for Task 2
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('writing_questions');
    }
};