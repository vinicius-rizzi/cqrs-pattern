<?php

namespace App\Company;

use App\Company\Commands\CreateCompanyCommand;
use App\Company\Commands\DeleteCompanyCommand;
use App\Company\Commands\UpdateCompanyCommand;
use App\Company\Models\Company;
use App\Company\Queries\FindCompanyQuery;
use App\Company\Queries\ListCompanyQuery;
use Illuminate\Pagination\LengthAwarePaginator;
use Symfony\Component\HttpFoundation\ParameterBag;

class CompanyFeatureManager
{
    /**
     * Lista empresas.
     *
     * @param ParameterBag $params
     * @return array
     */
    public function listCompany(ParameterBag $params): LengthAwarePaginator
    {
        return (new ListCompanyQuery())($params);
    }

    /**
     * Cria uma empresa.
     *
     * @param ParameterBag $params
     * @return Company
     */
    public function createCompany(ParameterBag $params): Company
    {
        return (new CreateCompanyCommand())($params);
    }

    /**
     * Busca uma empresa
     *
     * @param Company $company
     * @return Company
     */
    public function findCompany(Company $company): Company
    {
        return (new FindCompanyQuery())($company);
    }

    /**
     * Altera uma empresa
     *
     * @param ParameterBag $params
     * @param Company $company
     * @return Company
     */
    public function updateCompany(ParameterBag $params, Company $company): Company
    {
        return (new UpdateCompanyCommand())($params, $company);
    }

    /**
     * Exclui uma empresa.
     *
     * @param Company $company
     * @return void
     */
    public function deleteCompany(Company $company): void
    {
        (new DeleteCompanyCommand())($company);
    }
}
