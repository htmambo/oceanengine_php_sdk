<?php

/**
 * 本文件由 go2php 生成，源: api_file_material_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 素材信息查询
 */
class ApiOpenApi2FileMaterialDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $materialIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileMaterialDetailV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function materialIds(array $materialIds): self
    {
        $this->materialIds = $materialIds;
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
     * 素材信息查询
     */
    public function execute(): \Oceanengine\Models\FileMaterialDetailV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->materialIds === null) {
            throw new \InvalidArgumentException('materialIds is required and must be specified');
        }
        if (count($this->materialIds) < 1) {
            throw new \InvalidArgumentException('materialIds must have at least 1 elements');
        }
        if (count($this->materialIds) > 50) {
            throw new \InvalidArgumentException('materialIds must have less than 50 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['material_ids'] = $this->materialIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/material/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileMaterialDetailV2Response::class);

        return $result['model'];
    }
}
