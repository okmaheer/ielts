<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function questions()
    {
        return $this->hasMany(Question::class, 'test_id', 'id');
    }

    /**
     * Get meta title based on test type (reading/listening)
     */
    public function getMetaTitle($type = null)
    {
        if ($type === 'reading' && $this->reading_meta_title) {
            return $this->reading_meta_title;
        }
        
        if ($type === 'listening' && $this->listening_meta_title) {
            return $this->listening_meta_title;
        }
        
        return 'IPP - IELTS Computer Based Test';
    }

    /**
     * Get meta description based on test type (reading/listening)
     */
    public function getMetaDescription($type = null)
    {
        if ($type === 'reading' && $this->reading_meta_description) {
            return $this->reading_meta_description;
        }
        
        if ($type === 'listening' && $this->listening_meta_description) {
            return $this->listening_meta_description;
        }
        
        return 'Prepare for the IELTS exam with Cambridge IELTS practice test. Get authentic, and expert-designed resources.';
    }

    /**
     * Get focus keywords based on test type (reading/listening)
     */
    public function getFocusKeywords($type = null)
    {
        if ($type === 'reading' && $this->reading_focus_keywords) {
            return $this->reading_focus_keywords;
        }
        
        if ($type === 'listening' && $this->listening_focus_keywords) {
            return $this->listening_focus_keywords;
        }
        
        return null;
    }
}