<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khata extends Model
{
    use HasFactory;


    protected $table = 'khata';


    protected $guarded = [];


    protected $casts = [
        'name' => 'array',
    ];


    public function get_user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
