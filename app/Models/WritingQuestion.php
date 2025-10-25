<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WritingQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_id',
        'task_number',
        'question_text',
        'image_url',
        'word_limit'
    ];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}