<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Constants\GlobalConstants;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
class User extends Authenticatable //implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','type','last_login_at','last_login_ip','status'
    ];

      protected $dates = [
        'created_at',
        'updated_at',
        'date'
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
        'created_at'=> 'datetime:Y-m-d H:i:s'
        // 'created_at'=> 'datetime:Y-m-d H:00'
    ];

    public function isSeller(){
        return $this->type === "seller";
    }
    public function isBuyer(){
        return $this->type === "buyer";
    }
    public function isAdmin(){
        return $this->type === "admin";
    }
     public function getRouteKeyName()
    {
        return 'username';
    }
    public function profile()
    {
        //return $this->belongsToMany('App\Profile')->withTimestamps();
        return $this->hasMany(Profile::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public static function dataProfileDetails($user_id)
    {
        $dataProfile = Profile::where('user_id',$user_id)->first();
        return $dataProfile;
    }

    public static function dataProfileDetails1($id)
    {
        $dataProfile1 = User::where('id',$id)->first();
        return $dataProfile1;
    }

    public static function requestPasswordReset($email)
    {
        self::generatePasswordResetToken($email);
        return self::sendPasswordResetEmail($email);
    }

    public static function generatePasswordResetToken($email)
    {
        if (User::where('email', $email)->first()) {
            DB::table('password_resets')->where('email', $email)->delete();
            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => bcrypt(Str::random(15)),
                'created_at' => Carbon::now()
            ]);
        }
    }

    public static function sendPasswordResetEmail($email)
    {
        $token = DB::table('password_resets')->where('email', $email)->first();
        if ($token) {
            $user = DB::table('users')->where('email', $email)->select('username', 'email')->first();
            $viewData['username'] = $user->username;
            $viewData['link'] = asset('/reset_password?token=') . $token->token;
            Mail::send('templates.forgot_password', $viewData, function ($m) use ($user) {
                $m->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
                $m->to($user->email, $user->username)->subject('Forget Password Email');
            });
            return true;
        }
        return false;
    }


}
