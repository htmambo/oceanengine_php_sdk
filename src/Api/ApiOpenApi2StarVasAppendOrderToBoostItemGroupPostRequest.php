<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_append_order_to_boost_item_group_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投中加热组追加金额或指派单
 */
class ApiOpenApi2StarVasAppendOrderToBoostItemGroupPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarVasAppendOrderToBoostItemGroupV2Request $starVasAppendOrderToBoostItemGroupV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarVasAppendOrderToBoostItemGroupV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starVasAppendOrderToBoostItemGroupV2Request(\Oceanengine\Models\StarVasAppendOrderToBoostItemGroupV2Request $starVasAppendOrderToBoostItemGroupV2Request): self
    {
        $this->starVasAppendOrderToBoostItemGroupV2Request = $starVasAppendOrderToBoostItemGroupV2Request;
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
     * 投中加热组追加金额或指派单
     */
    public function execute(): \Oceanengine\Models\StarVasAppendOrderToBoostItemGroupV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starVasAppendOrderToBoostItemGroupV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/vas/append_order_to_boost_item_group/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarVasAppendOrderToBoostItemGroupV2Response::class);

        return $result['model'];
    }
}
