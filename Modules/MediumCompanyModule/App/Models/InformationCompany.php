<?php

namespace Modules\MediumCompanyModule\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\MediumCompanyModule\Database\factories\InformationCompanyFactory;

class InformationCompany extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "user_id",
        "company_name",
        "type_company",
        "register_number",
        "register_address",
        "sub_name_company",
        "name_mother_company",
        "phone_number",
        "fax_number",
        "url_website",
        "email",
        "manger_name",
        "employees_number",
        "income_period"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function revenue_lines()
    {
        return $this->hasMany(RevenueLines::class);
    }
}
