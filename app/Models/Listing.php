<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'user_id',
        'location',
        'job_type',
        'description',
        'salary_range',
        'yearly_salary',
        'no_vacancy',
        'company',
        'email',
        'company_description',
        'website',
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id');
    }
}
