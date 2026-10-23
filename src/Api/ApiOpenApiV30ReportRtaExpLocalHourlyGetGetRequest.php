<?php

/**
 * 本文件由 go2php 生成，源: api_report_rta_exp_local_hourly_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 该接口用于查询站内媒体渠道的RTA联合实验数据，支持分时t+5级别数据
 */
class ApiOpenApiV30ReportRtaExpLocalHourlyGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $rtaId = null;
    private ?int $advertiserId = null;
    private ?string $startDate = null;
    private ?string $endDate = null;
    private ?int $vid = null;
    private ?int $cusVid = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportRtaExpLocalHourlyGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function rtaId(int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function vid(int $vid): self
    {
        $this->vid = $vid;
        return $this;
    }

    public function cusVid(int $cusVid): self
    {
        $this->cusVid = $cusVid;
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
     * 该接口用于查询站内媒体渠道的RTA联合实验数据，支持分时t+5级别数据
     */
    public function execute(): \Oceanengine\Models\ReportRtaExpLocalHourlyGetV30Response
    {
        if ($this->rtaId === null) {
            throw new \InvalidArgumentException('rtaId is required and must be specified');
        }
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['rta_id'] = $this->rtaId;
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->vid !== null) {
            $queryParams['vid'] = $this->vid;
        }
        if ($this->cusVid !== null) {
            $queryParams['cus_vid'] = $this->cusVid;
        }
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/rta_exp_local_hourly/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportRtaExpLocalHourlyGetV30Response::class);

        return $result['model'];
    }
}
