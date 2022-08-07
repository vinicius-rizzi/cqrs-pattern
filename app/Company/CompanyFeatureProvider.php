<?php

namespace App\Company;

use App\Company\CompanyFeatureManager;
use Illuminate\Support\ServiceProvider;

class CompanyFeatureProvider extends ServiceProvider
{
    /**
     * Registra o serviços de aplicação.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('company_feature', function () {
            return new CompanyFeatureManager();
        });
    }

    /**
     * Obtem os serviços fornecidos pelo provedor.
     *
     * @return array
     */
    public function provides()
    {
        return [CompanyFeatureManager::class];
    }
}
