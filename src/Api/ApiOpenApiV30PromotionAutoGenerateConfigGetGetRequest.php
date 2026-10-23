<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_auto_generate_config_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据配置ID，查询配置详情
 */
class ApiOpenApiV30PromotionAutoGenerateConfigGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 配置id */
    private ?int $configId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionAutoGenerateConfigGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 配置id
     */
    public function configId(int $configId): self
    {
        $this->configId = $configId;
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
     * 根据配置ID，查询配置详情
     */
    public function execute(): \Oceanengine\Models\PromotionAutoGenerateConfigGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->configId === null) {
            throw new \InvalidArgumentException('configId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['config_id'] = $this->configId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/auto_generate_config/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionAutoGenerateConfigGetV30Response::class);

        return $result['model'];
    }
}
