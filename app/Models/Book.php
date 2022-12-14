<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
      'title',
      'description',
      'url',
      'image_url',
      'year_published',
      'available',
      'user_id'
    ];

    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }
}
