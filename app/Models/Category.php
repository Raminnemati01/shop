<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\Client\HomeController;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',

    ];
    public function parent() {

      return $this->belongsto(Category::class,'category_id');

    }
    public function children() {

      return $this->hasmany(Category::class,'category_id');

    }
}
