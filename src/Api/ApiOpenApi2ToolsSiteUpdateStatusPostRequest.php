<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_update_status_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以更改橙子建站站点状态
 */
class ApiOpenApi2ToolsSiteUpdateStatusPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $xOrangeCaller = null;
    private ?\Oceanengine\Models\ToolsSiteUpdateStatusV2Request $toolsSiteUpdateStatusV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteUpdateStatusV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function xOrangeCaller(string $xOrangeCaller): self
    {
        $this->xOrangeCaller = $xOrangeCaller;
        return $this;
    }

    public function toolsSiteUpdateStatusV2Request(\Oceanengine\Models\ToolsSiteUpdateStatusV2Request $toolsSiteUpdateStatusV2Request): self
    {
        $this->toolsSiteUpdateStatusV2Request = $toolsSiteUpdateStatusV2Request;
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
     * 通过此接口，用户可以更改橙子建站站点状态
     */
    public function execute(): \Oceanengine\Models\ToolsSiteUpdateStatusV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->xOrangeCaller !== null) {
            $headers['X-Orange-Caller'] = $this->xOrangeCaller;
        }
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsSiteUpdateStatusV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site/update_status/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteUpdateStatusV2Response::class);

        return $result['model'];
    }
}
