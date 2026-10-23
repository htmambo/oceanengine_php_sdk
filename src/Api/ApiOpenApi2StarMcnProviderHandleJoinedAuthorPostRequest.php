<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_handle_joined_author_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 星广服务商审核达人
 */
class ApiOpenApi2StarMcnProviderHandleJoinedAuthorPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarMcnProviderHandleJoinedAuthorV2Request $starMcnProviderHandleJoinedAuthorV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnProviderHandleJoinedAuthorV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starMcnProviderHandleJoinedAuthorV2Request(\Oceanengine\Models\StarMcnProviderHandleJoinedAuthorV2Request $starMcnProviderHandleJoinedAuthorV2Request): self
    {
        $this->starMcnProviderHandleJoinedAuthorV2Request = $starMcnProviderHandleJoinedAuthorV2Request;
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
     * 星广服务商审核达人
     */
    public function execute(): \Oceanengine\Models\StarMcnProviderHandleJoinedAuthorV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starMcnProviderHandleJoinedAuthorV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/provider_handle_joined_author/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnProviderHandleJoinedAuthorV2Response::class);

        return $result['model'];
    }
}
