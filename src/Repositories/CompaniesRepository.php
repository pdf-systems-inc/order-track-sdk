<?php

namespace Pdfsystems\OrderTrackSdk\Repositories;

use GuzzleHttp\Exception\GuzzleException;
use Pdfsystems\OrderTrackSdk\Dtos\Company;
use Pdfsystems\OrderTrackSdk\Dtos\Representation;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class CompaniesRepository extends Repository
{
    /**
     * @throws UnknownProperties
     * @throws GuzzleException
     */
    public function create(Company $company): Company
    {
        return $this->client->postDto('api/teams', $company);
    }

    /**
     * @throws UnknownProperties
     * @throws GuzzleException
     */
    public function find(int $id): Company
    {
        return $this->client->getDto("api/teams/$id", Company::class);
    }

    /**
     * @throws UnknownProperties
     * @throws GuzzleException
     */
    public function update(Company $company): Company
    {
        return $this->client->putDto("api/teams/$company->id", $company);
    }

    /**
     * @throws GuzzleException
     * @throws UnknownProperties
     */
    public function representation(): array
    {
        return $this->client->getDtoArray('api/representation', Representation::class);
    }
}
