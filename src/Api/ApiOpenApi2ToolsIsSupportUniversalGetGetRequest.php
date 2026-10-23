<?php

/**
 * 本文件由 go2php 生成，源: api_tools_is_support_universal_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本接口旨在帮助开发者判断相关创建条件（推广目的类型、预定义转化目标、深度转化目标、深度优化方式等）是否支持通投智选。
 */
class ApiOpenApi2ToolsIsSupportUniversalGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string 广告组推广目的, 详见【附录-推广目的类型】&lt;br&gt;允许值: &#x60;LINK&#x60;、&#x60;APP&#x60;、&#x60;QUICK_APP&#x60;、&#x60;DPA&#x60;、&#x60;GOODS&#x60;、&#x60;SHOP&#x60;、&#x60;AWEME&#x60;、&#x60;LIVE&#x60; */
    private ?string $landingType = null;
    /** @var string 优化目标，可通过【获取优化目标】接口获取 */
    private ?string $externalAction = null;
    /** @var string 深度转化目标，可通过【获取优化目标】接口获取 */
    private ?string $deepExternalAction = null;
    /** @var string 深度优化方式，允许值详见【附录-深度优化方式】，对于每次付费的转化，深度优化类型需要设置为BID_PER_ACTION（每次付费出价） */
    private ?string $deepBidType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsIsSupportUniversalGetV2ApiService $service)
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
     * 广告组推广目的, 详见【附录-推广目的类型】&lt;br&gt;允许值: &#x60;LINK&#x60;、&#x60;APP&#x60;、&#x60;QUICK_APP&#x60;、&#x60;DPA&#x60;、&#x60;GOODS&#x60;、&#x60;SHOP&#x60;、&#x60;AWEME&#x60;、&#x60;LIVE&#x60;
     */
    public function landingType(string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * 优化目标，可通过【获取优化目标】接口获取
     */
    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 深度转化目标，可通过【获取优化目标】接口获取
     */
    public function deepExternalAction(string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * 深度优化方式，允许值详见【附录-深度优化方式】，对于每次付费的转化，深度优化类型需要设置为BID_PER_ACTION（每次付费出价）
     */
    public function deepBidType(string $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
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
     * 本接口旨在帮助开发者判断相关创建条件（推广目的类型、预定义转化目标、深度转化目标、深度优化方式等）是否支持通投智选。
     */
    public function execute(): \Oceanengine\Models\ToolsIsSupportUniversalGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->landingType === null) {
            throw new \InvalidArgumentException('landingType is required and must be specified');
        }
        if ($this->externalAction === null) {
            throw new \InvalidArgumentException('externalAction is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['landing_type'] = $this->landingType;
        $queryParams['external_action'] = $this->externalAction;
        if ($this->deepExternalAction !== null) {
            $queryParams['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->deepBidType !== null) {
            $queryParams['deep_bid_type'] = $this->deepBidType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/is_support_universal/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsIsSupportUniversalGetV2Response::class);

        return $result['model'];
    }
}
