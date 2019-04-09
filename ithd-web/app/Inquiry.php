<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $table = 'inquiries';
    protected $fillable = ['userId', 'inquiry'];
    protected $primaryKey = 'id';
    
}
