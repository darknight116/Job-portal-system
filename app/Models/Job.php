<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    //mass assign garna ko lagi
    //database ra website ko data lai 
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'type',
        'descripton', 
        'salary',
        'deadline',
        'photo' 
    ];

    //passing data one format to another
    protected $casts = [
        'deadline' => 'datetime'
    ];

    //Relationship 

    function category()
    {
       return $this->belongsTo(Category::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function application()
    {
        return $this->hasMany(Application::class);
    }

}
