<?php

/**
 * 本文件由 go2php 生成，源: api_ad_billing_unique_id_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取指定数量的全局唯一id
 */
class ApiOpenApiV30AdBillingUniqueIdGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 待获取的唯一键个数 */
    private ?int $count = null;
    /** @var string 唯一键类型, 用于决定唯一键分类 */
    private ?string $uniqueIdType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdBillingUniqueIdGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 待获取的唯一键个数
     */
    public function count(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * 唯一键类型, 用于决定唯一键分类
     */
    public function uniqueIdType(string $uniqueIdType): self
    {
        $this->uniqueIdType = $uniqueIdType;
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
     * 获取指定数量的全局唯一id
     */
    public function execute(): \Oceanengine\Models\AdBillingUniqueIdGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->count === null) {
            throw new \InvalidArgumentException('count is required and must be specified');
        }
        if ($this->count < 1) {
            throw new \InvalidArgumentException('count must be greater than 1');
        }
        if ($this->count > 100) {
            throw new \InvalidArgumentException('count must be less than 100');
        }
        if ($this->uniqueIdType === null) {
            throw new \InvalidArgumentException('uniqueIdType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['count'] = $this->count;
        $queryParams['unique_id_type'] = $this->uniqueIdType;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/ad_billing/unique_id/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdBillingUniqueIdGetV30Response::class);

        return $result['model'];
    }
}
