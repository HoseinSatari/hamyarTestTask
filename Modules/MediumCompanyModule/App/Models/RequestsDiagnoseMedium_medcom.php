<?php

namespace Modules\MediumCompanyModule\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class RequestsDiagnoseMedium_medcom extends Model
{
    use HasFactory , SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "user_id",
        "ip",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer_questions_medcom::class);
    }
}
