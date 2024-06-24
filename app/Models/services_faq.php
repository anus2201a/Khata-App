<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services_faq extends Model
{
    use HasFactory;

    protected $table = 'services_faqs';

    public function service_category(){

        return $this->hasOne(Category::class, 'id' , 'category_id');
    }


}
