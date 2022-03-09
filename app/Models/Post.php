<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";

    protected $fillable = ['title','desc','uder_id' ,'created_at' , 'updated_at'];
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}

