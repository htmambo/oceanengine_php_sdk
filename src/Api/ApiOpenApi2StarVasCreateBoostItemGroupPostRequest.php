<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_create_boost_item_group_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投中加热组下单
 */
class ApiOpenApi2StarVasCreateBoostItemGroupPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarVasCreateBoostItemGroupV2Request $starVasCreateBoostItemGroupV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarVasCreateBoostItemGroupV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starVasCreateBoostItemGroupV2Request(\Oceanengine\Models\StarVasCreateBoostItemGroupV2Request $starVasCreateBoostItemGroupV2Request): self
    {
        $this->starVasCreateBoostItemGroupV2Request = $starVasCreateBoostItemGroupV2Request;
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
     * 投中加热组下单
     */
    public function execute(): \Oceanengine\Models\StarVasCreateBoostItemGroupV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starVasCreateBoostItemGroupV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/vas/create_boost_item_group/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarVasCreateBoostItemGroupV2Response::class);

        return $result['model'];
    }
}
