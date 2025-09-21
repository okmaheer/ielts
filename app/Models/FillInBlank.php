<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FillInBlank extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function question()
    {
        return $this->belongsTo(Question::class,'id','question_id');
    }
}
