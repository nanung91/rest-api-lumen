<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Post extends Model

{
    use HasFactory;
    protected $table='Posts';
    protected $fillable=[
        'user_id',
        'post',
        'status',
    ];
    public function postedBy(){return $this->belongsTo(User::class,'user_id','id');}
}
