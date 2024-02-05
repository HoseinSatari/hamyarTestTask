<?php

namespace Modules\MediumCompanyModule\App\Repository\Interfaces\InformationCompany;

interface InformationCompanyInterface
{
    public function insertCompany(array $data) : array;
    public static function checkHasCompany() : bool;
}
