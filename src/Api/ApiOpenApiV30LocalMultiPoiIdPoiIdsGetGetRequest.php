<?php

/**
 * 本文件由 go2php 生成，源: api_local_multi_poi_id_poi_ids_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据多门店ID拉取门店ID
 */
class ApiOpenApiV30LocalMultiPoiIdPoiIdsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var int[] 门店个数 */
    private ?array $multiPoiIds = null;
    private ?bool $needEnable = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalMultiPoiIdPoiIdsGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 门店个数
     */
    public function multiPoiIds(array $multiPoiIds): self
    {
        $this->multiPoiIds = $multiPoiIds;
        return $this;
    }

    public function needEnable(bool $needEnable): self
    {
        $this->needEnable = $needEnable;
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
     * 根据多门店ID拉取门店ID
     */
    public function execute(): \Oceanengine\Models\LocalMultiPoiIdPoiIdsGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->multiPoiIds === null) {
            throw new \InvalidArgumentException('multiPoiIds is required and must be specified');
        }
        if (count($this->multiPoiIds) < 1) {
            throw new \InvalidArgumentException('multiPoiIds must have at least 1 elements');
        }
        if (count($this->multiPoiIds) > 50) {
            throw new \InvalidArgumentException('multiPoiIds must have less than 50 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['multi_poi_ids'] = $this->multiPoiIds;
        if ($this->needEnable !== null) {
            $queryParams['need_enable'] = $this->needEnable;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/multi_poi_id/poi_ids/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalMultiPoiIdPoiIdsGetV30Response::class);

        return $result['model'];
    }
}
