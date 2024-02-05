<?php

namespace Modules\MediumCompanyModule\App\Http\Controllers\Questions;

use App\Helper\ApiResponse;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Modules\MediumCompanyModule\App\Repository\Elequent\InformationCompany\InformationCompanyEloquent;
use Modules\MediumCompanyModule\App\Repository\Elequent\Questions\QuestionsEloquent;


class QuestionsController extends Controller
{

    /**
     * Redirects to the informationCompany page if the company information is not available.
     * Otherwise, displays the intro page.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function intro()
    {
        if (!InformationCompanyEloquent::checkHasCompany()) {
            return redirect('/informationCompany');
        }
        return view('mediumcompanymodule::intro');
    }

    /**
     * Redirects to the informationCompany page if the company information is not available.
     * Otherwise, displays the questions page.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function questions()
    {
        if (!InformationCompanyEloquent::checkHasCompany()) {
            return redirect('/informationCompany');
        }
        return view('mediumcompanymodule::questions');
    }

    /**
     * Retrieves questions with categories based on the provided request data.
     *
     * @param Request $request
     * @param QuestionsEloquent $eloquent
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuestionsWithCategory(Request $request, QuestionsEloquent $eloquent)
    {
        if (!InformationCompanyEloquent::checkHasCompany()) {
            ApiResponse::setStatus(403);
            return ApiResponse::toJson();
        }
        $result = $eloquent->getQuestionsWithCategory($request->all());
        ApiResponse::setStatus($result['status']);
        ApiResponse::setResult($result['result']);
        return ApiResponse::toJson();
    }

    /**
     * Inserts answers to the questions based on the provided request data.
     *
     * @param Request $request
     * @param QuestionsEloquent $eloquent
     * @return \Illuminate\Http\JsonResponse
     */
    public function insertAnswer(Request $request, QuestionsEloquent $eloquent)
    {
        if (!InformationCompanyEloquent::checkHasCompany()) {
            ApiResponse::setStatus(403);
            return ApiResponse::toJson();
        }
        $result = $eloquent->insertAnswerQuestions($request->all());
        ApiResponse::setStatus($result['status']);
        return ApiResponse::toJson();
    }

    /**
     * Displays the completion message for the questionnaire.
     *
     * @return string
     */
    public function step2()
    {
        return 'اتمام تسک';
    }
}
