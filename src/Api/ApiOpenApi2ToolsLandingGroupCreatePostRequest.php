<?php

/**
 * 本文件由 go2php 生成，源: api_tools_landing_group_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * test
 */
class ApiOpenApi2ToolsLandingGroupCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $xOrangeCaller = null;
    private ?\Oceanengine\Models\ToolsLandingGroupCreateV2Request $toolsLandingGroupCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsLandingGroupCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function xOrangeCaller(string $xOrangeCaller): self
    {
        $this->xOrangeCaller = $xOrangeCaller;
        return $this;
    }

    public function toolsLandingGroupCreateV2Request(\Oceanengine\Models\ToolsLandingGroupCreateV2Request $toolsLandingGroupCreateV2Request): self
    {
        $this->toolsLandingGroupCreateV2Request = $toolsLandingGroupCreateV2Request;
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
     * test
     */
    public function execute(): \Oceanengine\Models\ToolsLandingGroupCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->xOrangeCaller !== null) {
            $headers['x-orange-caller'] = $this->xOrangeCaller;
        }
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsLandingGroupCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/landing_group/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsLandingGroupCreateV2Response::class);

        return $result['model'];
    }
}
