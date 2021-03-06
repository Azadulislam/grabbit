<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'image',
        'gender',
        'country',
        'district',
        'village',
        'contact_no',
        'user_role',
        'email',
        'password',
        'about_me',
        'date_of_birth',
        'nid_num',
        'qualification',
        'acc_status',
        'verification_code',
        'is_verified'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->hasOne(UserRole::class, 'id', 'user_role');
    }


    public function status(){
        return $this->hasOne(AccountStatus::class, 'id', 'acc_status');
    }

    public function job(){
        return $this->hasMany(MicroJob::class, 'user_id', 'id');
    }
    public function review(){
        return $this->hasMany(Review::class, 'id_review', 'from_user');
    }
}
