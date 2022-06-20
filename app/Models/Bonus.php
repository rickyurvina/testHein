<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    use HasFactory;

    protected $fillable=['worker_id','bonus_date','bonus_amount'];

    public function worker(){
        return $this->belongsTo(Worker::class,'worker_id');
    }
}
