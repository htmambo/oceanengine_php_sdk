<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_upload_search_item_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 回传水下视频用于口令归因
 */
class ApiOpenApi2StarMcnProviderUploadSearchItemPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarMcnProviderUploadSearchItemV2Request $starMcnProviderUploadSearchItemV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnProviderUploadSearchItemV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starMcnProviderUploadSearchItemV2Request(\Oceanengine\Models\StarMcnProviderUploadSearchItemV2Request $starMcnProviderUploadSearchItemV2Request): self
    {
        $this->starMcnProviderUploadSearchItemV2Request = $starMcnProviderUploadSearchItemV2Request;
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
     * 回传水下视频用于口令归因
     */
    public function execute(): \Oceanengine\Models\StarMcnProviderUploadSearchItemV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starMcnProviderUploadSearchItemV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/provider_upload_search_item/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnProviderUploadSearchItemV2Response::class);

        return $result['model'];
    }
}
