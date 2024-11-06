<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
   protected $Table='team';
   protected $Primarykey='id';
   protected $fillable=['username','password'];
}
