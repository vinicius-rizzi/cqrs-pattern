<?php

namespace App\Company\Http\Controllers;

use App\Company\Http\Requests\StoreCompanyFormRequest;
use App\Company\Http\Requests\UpdateCompanyFormRequest;
use App\Company\Http\Resources\CompanyResource;
use App\Company\Models\Company;
use App\Http\Controllers\Controller;
use App\Support\Facades\CompanyFeature;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\ParameterBag;

class CompanyController extends Controller
{
    /**
     * Lista empresas.
     *
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\ResourceCollection
     */
    public function index(Request $request): ResourceCollection
    {
        $companies = CompanyFeature::listCompany(new ParameterBag($request->all()));

        return CompanyResource::collection($companies);
    }

    /**
     * Cria uma empresa.
     *
     * @param StoreCompanyFormRequest $request
     * @return CompanyResource
     */
    public function store(StoreCompanyFormRequest $request): CompanyResource
    {
        $company = CompanyFeature::createCompany(new ParameterBag($request->validated()));

        return new CompanyResource($company);
    }

    /**
     * Busca uma empresa.
     *
     * @param Company $company
     * @return \App\Company\Http\Resources\CompanyResource
     */
    public function show(Company $company): CompanyResource
    {
        $company = CompanyFeature::findCompany($company);

        return new CompanyResource($company);
    }

    /**
     * Altera uma empresa.
     *
     * @param UpdateCompanyFormRequest $request
     * @param Company $company
     * @return \App\Company\Http\Resources\CompanyResource
     */
    public function update(UpdateCompanyFormRequest $request, Company $company): CompanyResource
    {
        $company = CompanyFeature::updateCompany(new ParameterBag($request->validated()), $company);

        return new CompanyResource($company);
    }

    /**
     * Exclui uma conta.
     *
     * @param Company $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company): Response
    {
        $company = CompanyFeature::deleteCompany($company);

        return response(['status' => 'success']);
    }
}
