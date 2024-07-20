<?php

namespace App\Models;

use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function comments (){
    return $this->hasOne(Comment::class);
    }
}
