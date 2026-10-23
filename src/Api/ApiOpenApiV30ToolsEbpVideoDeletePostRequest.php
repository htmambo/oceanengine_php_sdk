<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_video_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量删除EBP视频
 */
class ApiOpenApiV30ToolsEbpVideoDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpVideoDeleteV30Request $toolsEbpVideoDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpVideoDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpVideoDeleteV30Request(\Oceanengine\Models\ToolsEbpVideoDeleteV30Request $toolsEbpVideoDeleteV30Request): self
    {
        $this->toolsEbpVideoDeleteV30Request = $toolsEbpVideoDeleteV30Request;
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
     * 批量删除EBP视频
     */
    public function execute(): \Oceanengine\Models\ToolsEbpVideoDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpVideoDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/video/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpVideoDeleteV30Response::class);

        return $result['model'];
    }
}
