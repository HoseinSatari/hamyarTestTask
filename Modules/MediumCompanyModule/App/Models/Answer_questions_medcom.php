<?php

namespace Modules\MediumCompanyModule\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class Answer_questions_medcom extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "user_id",
        "requests_diagnose_medium_medcom_id",
        "questions_medcom_id",
        "answer",

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function question()
    {
        return $this->belongsTo(Questions_medcom::class);
    }

    public function request_diagnose_medium()
    {
        return $this->belongsTo(RequestsDiagnoseMedium_medcom::class);
    }
}
