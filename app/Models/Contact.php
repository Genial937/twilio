<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at', 'updated_at'];

    public function tags(){
        return $this->belongsTo(Tag::class, 'tag_id', 'id');
    }
}
