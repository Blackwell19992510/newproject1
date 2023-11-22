<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = "book";
    use HasFactory;
    public function user(){
        return $this->belongsTo(user::class);
    }
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'pages',
        'IBN',
        'author',
        'category',
        'publisher',
        'yearofpublication'
    ];
}
