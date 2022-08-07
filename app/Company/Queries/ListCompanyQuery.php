<?php

namespace App\Company\Queries;

use App\Company\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Symfony\Component\HttpFoundation\ParameterBag;

class ListCompanyQuery
{
    /**
     * Lista empresa.
     *
     * @param ParameterBag $params
     * @return array
     */

    /**
     * Lista empresa.
     *
     * @param ParameterBag $params
     * @return LengthAwarePaginator
     */
    public function __invoke(ParameterBag $params): LengthAwarePaginator
    {
        $query = Company::query();

        if ($params->get('name')) {
           $query->where('name', 'like', '%' . $params->get('name') . '%');
        }

        if ($params->get('company_id')) {
            $query->where('company_id', $params->get('company_id'));
        }

        return $query->paginate(
            $params->get('per_page', 25),
            ['*'],
            'page',
            $params->get('page', 1)
        );
    }
}
