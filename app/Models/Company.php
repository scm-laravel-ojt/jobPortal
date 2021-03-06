<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id');
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'company_user', 'company_id', 'user_id');
    }

   
}
