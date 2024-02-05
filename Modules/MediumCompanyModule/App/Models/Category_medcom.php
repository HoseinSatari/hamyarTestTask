<?php

namespace Modules\MediumCompanyModule\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\MediumCompanyModule\Database\factories\CategoryMedcomFactory;

class Category_medcom extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'description',
        'is_active',
        'order',
    ];

    public function questions()
    {
        return $this->hasMany(Questions_medcom::class);
    }


}
