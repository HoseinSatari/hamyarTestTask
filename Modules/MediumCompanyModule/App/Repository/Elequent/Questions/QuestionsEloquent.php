<?php

namespace Modules\MediumCompanyModule\App\Repository\Elequent\Questions;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Modules\MediumCompanyModule\App\Models\Answer_questions_medcom;
use Modules\MediumCompanyModule\App\Models\Category_medcom;
use Modules\MediumCompanyModule\App\Models\Questions_medcom;
use Modules\MediumCompanyModule\App\Models\RequestsDiagnoseMedium_medcom;
use Modules\MediumCompanyModule\App\Repository\Interfaces\Questions\Questions_medcom_Interface;
use Modules\MediumCompanyModule\App\resources\CategoryCollection;

class QuestionsEloquent implements Questions_medcom_Interface
{

    public function getQuestionsWithCategory(array $data): array
    {
        $categories = Category_medcom::where('is_active', true)
            ->orderBy('order')
            ->with(['questions'])
            ->get();

        $categories = new CategoryCollection($categories);


        return ['result' => $categories, 'status' => 200];
    }

    public function insertAnswerQuestions(array $data): array
    {
        $validData = Validator::make($data, [
            'questions.*.id' => ['required', Rule::exists(Questions_medcom::class, 'id')],
            'questions.*.value' => ['required', Rule::in([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10])]
        ])->validate();

        $user = Auth::user();

       $requestMedRow =  RequestsDiagnoseMedium_medcom::create([
            'user_id' => $user->id,
            'ip' => request()->ip()
        ]);

        foreach ($validData['questions'] as $index => $answer) {
            $dataAnswerTable[] = [
                'user_id' => $user->id,
                'requests_diagnose_medium_medcom_id' => $requestMedRow->id,
                'questions_medcom_id' => $answer['id'],
                'answer' => strval($answer['value']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        Answer_questions_medcom::insert($dataAnswerTable);

        return [
            'message' => 'با موفقیت ذخیره شد',
            'status' => 201
        ];
    }
}
