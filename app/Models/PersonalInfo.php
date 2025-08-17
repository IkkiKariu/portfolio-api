<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasUuids;
    
    protected $table = 'personal_info';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'about'
    ];
}
