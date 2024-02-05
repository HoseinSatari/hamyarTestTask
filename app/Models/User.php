<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\MediumCompanyModule\App\Models\Answer_questions_medcom;
use Modules\MediumCompanyModule\App\Models\InformationCompany;
use Modules\MediumCompanyModule\App\Models\RequestsDiagnoseMedium_medcom;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'ip',
        'last_login'
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
        'password' => 'hashed',
    ];

    public function updateLastLogin()
    {
        $this->update(['last_login' => Carbon::now()]);
        return $this;
    }

    public function updateIp()
    {
        $this->update(['ip' => request()->ip()]);
        return $this;
    }

    public function information_company()
    {
        return $this->hasOne(InformationCompany::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer_questions_medcom::class);
    }
    public function requests_medium_diagnose()
    {
        return $this->hasMany(RequestsDiagnoseMedium_medcom::class);
    }
}
