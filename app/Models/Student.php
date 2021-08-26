<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name'];
    protected $guarded = ['id'];
    protected $table = 'student';
    public function comment(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
       return $this->hasMany(Comment::class);
    }
    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
}
