<?php

namespace App\Company\Commands;

use App\Company\Models\Company;

class DeleteCompanyCommand
{
    /**
     * Exclui uma empresa.
     *
     * @param Company $company
     * @return void
     */
    public function __invoke(Company $company): void
    {
        $company->delete();
    }
}
