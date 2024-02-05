<?php

namespace Modules\MediumCompanyModule\App\Repository\Elequent\InformationCompany;

use Illuminate\Support\Facades\Validator;
use Modules\MediumCompanyModule\App\Repository\Interfaces\InformationCompany\InformationCompanyInterface;

class InformationCompanyEloquent implements InformationCompanyInterface
{

    public function insertCompany(array $data): array
    {
        $validData = Validator::make($data, [
            "company_name" => ['required'],
            "type_company" => ['required'],
            "register_number" => ['required'],
            "register_address" => ['required'],
            "sub_name_company" => ['required'],
            "name_mother_company" => ['required'],
            "phone_number" => ['required'],
            "fax_number" => ['required'],
            "url_website" => ['required'],
            "email" => ['required'],
            "manger_name" => ['required'],
            "employees_number" => ['required'],
            "income_period" => ['required'],
            'income_period[].*.revenue_lines' => ['required'],
            'income_period[].*.Income' => ['required'],
            'income_period[].*.cost' => ['required'],
            'income_period[].*.cost_per_unit' => ['required'],
            'income_period[].*.units_sold' => ['required'],
        ])->validate();

        $user = auth()->user();

        $company = $user->information_company()->create($validData);

        $revenueLinesData = [];

        foreach ($validData['income_period[]'] as $index => $revenueLine) {
            $revenueLinesData[] = [
                'revenue_lines' => $revenueLine['revenue_lines'],
                'Income' => $revenueLine['Income'],
                'cost' => $revenueLine['cost'],
                'cost_per_unit' => $revenueLine['cost_per_unit'],
                'units_sold' => $revenueLine['units_sold'],
            ];
        }

        $company->revenue_lines()->createMany($revenueLinesData);
        return [
            'message' => 'با موفقیت ذخیره شد',
            'status' => 201
        ];
    }

    public static function checkHasCompany(): bool
    {
        return auth()->user()->information_company ? true : false;
    }
}
