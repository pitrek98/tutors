<?php

namespace App\Models\Tutors;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'mark', 'desription', 'subject_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function scopeFilterByName($query, $name)
    {
        return $query->where('name', 'like', '%' . $name . '%');
    }
}
