<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedJob extends Model
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
        'logo'
    ];



    public function category(){
        return $this->hasOne(User::class, 'category_id');
    }
}
