<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
use Illuminate\Http\Request;
class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'state', 'contactno' , 'rollno' , 'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function getUsers(){
        return $this->get()->toArray();
    }
    

 public function createUser(array $stu){
       
        Student::create($stu);
    }

    

     public function studentDetails(){
           
           return [
               'id' => $this->id,
            'name' => $this->name,
            'rollno' => $this->rollno,
            'gender' => $this->gender,
            'state' => $this->state,
            'contactno' => $this->contactno,
            'email' => $this->email,
           ];

     }
     public function dest($id){
     //DB::delete('delete from students where id = ?',[$id]);
      $del=Student::find($id);
      $del->delete();
     }

    }
