<?php

/**
 * 本文件由 go2php 生成，源: api_report_audience_city_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ReportAudienceCityGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $endDate = null;
    private ?string $idType = null;
    private ?array $ids = null;
    private ?array $metrics = null;
    private ?string $startDate = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportAudienceCityV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function idType(string $idType): self
    {
        $this->idType = $idType;
        return $this;
    }

    public function ids(array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }

    public function metrics(array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * API Description
     */
    public function execute(): \Oceanengine\Models\ReportAudienceCityV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->endDate !== null) {
            $queryParams['end_date'] = $this->endDate;
        }
        if ($this->idType !== null) {
            $queryParams['id_type'] = $this->idType;
        }
        if ($this->ids !== null) {
            $queryParams['ids'] = $this->ids;
        }
        if ($this->metrics !== null) {
            $queryParams['metrics'] = $this->metrics;
        }
        if ($this->startDate !== null) {
            $queryParams['start_date'] = $this->startDate;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/report/audience/city/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportAudienceCityV2Response::class);

        return $result['model'];
    }
}
