<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
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
}
