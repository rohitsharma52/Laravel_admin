<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $Table='slider';
  protected $Primarykey='id';
  protected $fillable=['name','nav_1','nav_1_link','nav_2','nav_2_link'];
}
