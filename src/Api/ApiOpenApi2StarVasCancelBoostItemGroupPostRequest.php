<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_cancel_boost_item_group_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 取消投中加热组
 */
class ApiOpenApi2StarVasCancelBoostItemGroupPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarVasCancelBoostItemGroupV2Request $starVasCancelBoostItemGroupV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarVasCancelBoostItemGroupV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starVasCancelBoostItemGroupV2Request(\Oceanengine\Models\StarVasCancelBoostItemGroupV2Request $starVasCancelBoostItemGroupV2Request): self
    {
        $this->starVasCancelBoostItemGroupV2Request = $starVasCancelBoostItemGroupV2Request;
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
     * 取消投中加热组
     */
    public function execute(): \Oceanengine\Models\StarVasCancelBoostItemGroupV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starVasCancelBoostItemGroupV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/vas/cancel_boost_item_group/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarVasCancelBoostItemGroupV2Response::class);

        return $result['model'];
    }
}
