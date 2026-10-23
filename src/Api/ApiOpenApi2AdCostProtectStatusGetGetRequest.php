<?php

/**
 * 本文件由 go2php 生成，源: api_ad_cost_protect_status_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取成本保障状态及时同步广告主计划投放状态，可以获取计划是否处于保障中，满足赔付规则
 */
class ApiOpenApi2AdCostProtectStatusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int[] 广告计划id，每次最多传入50个 */
    private ?array $adIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdCostProtectStatusGetV2ApiService $service)
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
     * 广告计划id，每次最多传入50个
     */
    public function adIds(array $adIds): self
    {
        $this->adIds = $adIds;
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
     * 获取成本保障状态及时同步广告主计划投放状态，可以获取计划是否处于保障中，满足赔付规则
     */
    public function execute(): \Oceanengine\Models\AdCostProtectStatusGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->adIds === null) {
            throw new \InvalidArgumentException('adIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['ad_ids'] = $this->adIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/ad/cost_protect_status/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdCostProtectStatusGetV2Response::class);

        return $result['model'];
    }
}
