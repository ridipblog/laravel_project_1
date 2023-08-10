<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class model_test extends Model
{
    use SoftDeletes;
    protected $table = 'model_test';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
}
