<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以创建站点（用于存放落地页），之后才能创建落地页。创建站点接口会返回"code_0"，代表站点创建成功。
 */
class ApiOpenApi2ToolsSiteCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $xOrangeCaller = null;
    private ?\Oceanengine\Models\ToolsSiteCreateV2Request $toolsSiteCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function xOrangeCaller(string $xOrangeCaller): self
    {
        $this->xOrangeCaller = $xOrangeCaller;
        return $this;
    }

    public function toolsSiteCreateV2Request(\Oceanengine\Models\ToolsSiteCreateV2Request $toolsSiteCreateV2Request): self
    {
        $this->toolsSiteCreateV2Request = $toolsSiteCreateV2Request;
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
     * 通过此接口，用户可以创建站点（用于存放落地页），之后才能创建落地页。创建站点接口会返回"code_0"，代表站点创建成功。
     */
    public function execute(): \Oceanengine\Models\ToolsSiteCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->xOrangeCaller !== null) {
            $headers['x-orange-caller'] = $this->xOrangeCaller;
        }
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsSiteCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteCreateV2Response::class);

        return $result['model'];
    }
}
