<?php

namespace Modules\MediumCompanyModule\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\MediumCompanyModule\Database\factories\RevenueLinesFactory;

class RevenueLines extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "information_company_id",
        "revenue_lines",
        "Income",
        "cost",
        "cost_per_unit",
        "units_sold",
    ];

    public function company()
    {
        return $this->belongsTo(InformationCompany::class);
   }
}
