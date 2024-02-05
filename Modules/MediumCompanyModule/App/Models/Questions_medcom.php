<?php

namespace Modules\MediumCompanyModule\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\MediumCompanyModule\Database\factories\QuestionsMedcomFactory;

class Questions_medcom extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "category_medcom_id",
        "question",
    ];

    public function category()
    {
        return $this->belongsTo(Category_medcom::class);
    }

    public function answer()
    {
        return $this->hasMany(Answer_questions_medcom::class);
    }


}
