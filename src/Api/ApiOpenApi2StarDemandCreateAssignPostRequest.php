<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_create_assign_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 指派需求创建
 */
class ApiOpenApi2StarDemandCreateAssignPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarDemandCreateAssignV2Request $starDemandCreateAssignV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandCreateAssignV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starDemandCreateAssignV2Request(\Oceanengine\Models\StarDemandCreateAssignV2Request $starDemandCreateAssignV2Request): self
    {
        $this->starDemandCreateAssignV2Request = $starDemandCreateAssignV2Request;
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
     * 指派需求创建
     */
    public function execute(): \Oceanengine\Models\StarDemandCreateAssignV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starDemandCreateAssignV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/create_assign/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandCreateAssignV2Response::class);

        return $result['model'];
    }
}
