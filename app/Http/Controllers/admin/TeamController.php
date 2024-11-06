<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TeamModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
{
   public function add_team(){
   return view('admin.team.add_team');
   }
   
   public function view_team(){
      return view('admin.team.view_team');
   }
   public function add_team_process(Request $req){
     $req->validate([
      'username'=>'required|email|unique:team',
      'password'=>'required|min:4|confirmed'
     ]);
     // here we are hasing the password 
     $team=new TeamModel();
     $team->username=$req->username;
     $team->password=Hash::make($req->password);
     $team->save();
 
   
   }
}
