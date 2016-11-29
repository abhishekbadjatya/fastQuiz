<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userId', 'emailId', 'password','userName','maxLevelReached','maxScore'
    ];
    protected $table = 'users';
    protected $primaryKey='userId';
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static function logincheck($usercred)
    {
        $userval=User::where('userName', '=',$usercred['userName'])->get()->toArray();
        if(count($userval)==0)
            return false;
        else
        {
            if(!Hash::check($usercred['password'],$userval[0]['password']))
                return false;
            return true;

        }

    }
    public static function signup($usercred)
    {
        $User = new User;
        $userval=User::where('userName', '=',$usercred['userName'])->get()->toArray();
        if(count($userval)>0)
            return false;
        else
        {
            $User->emailId=$usercred['emailId'];
            $User->password=Hash::make($usercred['password']);
            $User->userName=$usercred['userName'];
            $User->maxLevelReached=$usercred['maxLevelReached'];
            $User->maxScore=$usercred['maxScore'];
            $User->save();
            return true;
        }

    }

    public static function initcall($usercred)
    {
        $userval=User::where('userName', '=',$usercred)->get()->toArray();
        if(count($userval)==0)
                        return false;
        return true;
    }

    public static function changePassword($usercred,$data)
    {
        $userval=User::where('userName', '=',$usercred)->get()->toArray();
        if(!Hash::check($data['oldpassword'],$userval[0]['password']))
                return false;
       $affectedRows= User::where('userName', '=',$usercred)->update(array('password' => $data['newpassword']));
        if(count($affectedRows)==0)
                        return false;
        return true;
    }
    public static function getLeaderboard()
    {
        $userval=User::orderBy('maxScore','DESC')->select('userName','userId','maxLevelReached','maxScore')->get()->toArray();
        if(count($userval)==0)
                        return null;
        return $userval;
    }
}
