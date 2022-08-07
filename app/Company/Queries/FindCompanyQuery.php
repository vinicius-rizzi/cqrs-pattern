<?php

namespace App\Company\Queries;

use App\Company\Models\Company;

class FindCompanyQuery
{
    /**
     * Busca uma empresa.
     *
     * @param Company $company
     * @return Company
     */
    public function __invoke(Company $company): Company
    {
        return $company;
    }
}
