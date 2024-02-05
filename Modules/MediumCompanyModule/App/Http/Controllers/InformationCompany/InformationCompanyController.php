<?php

namespace Modules\MediumCompanyModule\App\Http\Controllers\InformationCompany;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\MediumCompanyModule\App\Repository\Elequent\InformationCompany\InformationCompanyEloquent;

class InformationCompanyController extends Controller
{
    /**
     * Redirects to the intro page if the company information is already available.
     * Otherwise, displays the company information form page.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function formPage()
    {
        if (InformationCompanyEloquent::checkHasCompany()) {
            return redirect('/diagnostics/2/intro');
        }
        return view('mediumcompanymodule::get_company');
    }

    /**
     * Stores the company information based on the provided request data.
     * Redirects to the intro page if the company information is already available.
     *
     * @param Request $request
     * @param InformationCompanyEloquent $eloquent
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeForm(Request $request, InformationCompanyEloquent $eloquent)
    {
        // If the company information is already available, return a 403 status.
        if (InformationCompanyEloquent::checkHasCompany()) {
            ApiResponse::setStatus(403);
            return ApiResponse::toJson();
        }

        // Insert the company information and handle the result.
        $result = $eloquent->insertCompany($request->all());

        ApiResponse::setStatus($result['status']);
        ApiResponse::setUserMessage($result['message']);
        return ApiResponse::toJson();
    }
}
