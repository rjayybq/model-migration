<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'city',
        'province',
        'zip',
        'birthdate',
    ];
    
    protected $appends = ['fullname','birthday'];
        public function getFullnameAttribute()
   {
       return $this->fname . ' ' . $this->lname;
   }
        public function getBirthdayAttribute()
    {
        $birtdate = $this->attributes['birthdate'];
        if($birtdate) {
            return Carbon::parse($birtdate)->format('F d, Y');
        }
        return '';
    }
    //Relationship grade to Students
   public function grades()
    {
        return $this->hasMany(SubjectGrade::class, 'student_id');
    }
}
