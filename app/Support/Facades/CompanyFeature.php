<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Facade de Company.
 *
 * @package App\Company
 * @method  static mixed listCompany(ParameterBag $params)
 * @method  static mixed createCompany(ParameterBag $params)
 * @method  static mixed findCompany(Company $company)
 * @method  static mixed updateCompany(ParameterBag $params, Company $company)
 * @method  static mixed deleteCompany(Company $company)
 */
class CompanyFeature extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'company_feature';
    }
}
