<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'task';

    protected $fillable = [
        'title_task', 'description_task', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
