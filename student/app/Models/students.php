<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['Student_Name', 'Class', 'Section','Subject_1_Marks','Subject_2_Marks','Subject_3_Marks','Subject_4_Marks','Subject_5_Marks','Status'];
    protected static function boot(){
        parent::boot();
     
        static::created(function ($model) {
          $model->id = "STU-" . $model->id;
          $model->save();
        });
      }
}
