<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;
    public function worker(){
        return $this->belongsTo(Worker::class,'worker_id');
    }
}
