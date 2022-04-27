<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        // slug will be set to the title in slug format
        $this->attributes['slug'] = Str::slug($value);
    }
}
