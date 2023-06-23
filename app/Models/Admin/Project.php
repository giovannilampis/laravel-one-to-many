<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "subtitle",
        "description",
        "url",
        "img_url",
        "category_id"
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
