<?php

/**
 * 本文件由 go2php 生成，源: api_tools_quota_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * >该接口用于查询广告账户的在投计划配额和使用进度。
 */
class ApiOpenApi2ToolsQuotaGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户id */
    private ?int $advertiserId = null;
    /** @var string 广告组类型，&#x60;FEED&#x60;：信息流  &#x60;SEARCH&#x60;:搜索广告 */
    private ?string $campaignType = null;
    private ?string $deliveryRange = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsQuotaGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告账户id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告组类型，&#x60;FEED&#x60;：信息流  &#x60;SEARCH&#x60;:搜索广告
     */
    public function campaignType(string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    public function deliveryRange(string $deliveryRange): self
    {
        $this->deliveryRange = $deliveryRange;
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
     * >该接口用于查询广告账户的在投计划配额和使用进度。
     */
    public function execute(): \Oceanengine\Models\ToolsQuotaGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->campaignType === null) {
            throw new \InvalidArgumentException('campaignType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['campaign_type'] = $this->campaignType;
        if ($this->deliveryRange !== null) {
            $queryParams['delivery_range'] = $this->deliveryRange;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/quota/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsQuotaGetV2Response::class);

        return $result['model'];
    }
}
