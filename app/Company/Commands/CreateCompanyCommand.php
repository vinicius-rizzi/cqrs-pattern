<?php

namespace App\Company\Commands;

use App\Company\Models\Company;
use Symfony\Component\HttpFoundation\ParameterBag;

class CreateCompanyCommand
{
    /**
     * Cria uma empresa.
     *
     * @param ParameterBag $params
     * @return Company
     */
    public function __invoke(ParameterBag $params): Company
    {
        $company = Company::create($params->all());

        return $company;
    }
}
