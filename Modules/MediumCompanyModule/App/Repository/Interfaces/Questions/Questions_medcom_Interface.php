<?php

namespace Modules\MediumCompanyModule\App\Repository\Interfaces\Questions;

interface Questions_medcom_Interface
{
    public function getQuestionsWithCategory(array $data) : array;

    public function insertAnswerQuestions(array $data) : array;
}
