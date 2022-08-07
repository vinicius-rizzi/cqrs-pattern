<?php

namespace App\Company\Commands;

use App\Company\Models\Company;
use Symfony\Component\HttpFoundation\ParameterBag;

class UpdateCompanyCommand
{
    /**
     * Altera uma empresa.
     *
     * @param ParameterBag $params
     * @param Company $company
     * @return Company
     */
    public function __invoke(ParameterBag $params, Company $company): Company
    {
        $company->update($params->all());

        return $company;
    }
}
