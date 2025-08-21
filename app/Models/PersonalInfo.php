<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
