<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class our_service extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'image',
        'category',
        'overview',
    ];
    protected $guarded = [];

    public function get_category(){

        return $this->hasOne(Category::class, 'id' , 'category');
    }
}
