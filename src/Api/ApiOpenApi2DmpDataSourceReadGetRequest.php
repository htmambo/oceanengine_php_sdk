<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_data_source_read_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 数据源详细信息
 */
class ApiOpenApi2DmpDataSourceReadGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $dataSourceIdList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DmpDataSourceReadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function dataSourceIdList(array $dataSourceIdList): self
    {
        $this->dataSourceIdList = $dataSourceIdList;
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
     * 数据源详细信息
     */
    public function execute(): \Oceanengine\Models\DmpDataSourceReadV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->dataSourceIdList !== null) {
            $queryParams['data_source_id_list'] = $this->dataSourceIdList;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dmp/data_source/read/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DmpDataSourceReadV2Response::class);

        return $result['model'];
    }
}
