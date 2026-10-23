<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_video_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * ebp场景更新视频
 */
class ApiOpenApiV30ToolsEbpVideoUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpVideoUpdateV30Request $toolsEbpVideoUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpVideoUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpVideoUpdateV30Request(\Oceanengine\Models\ToolsEbpVideoUpdateV30Request $toolsEbpVideoUpdateV30Request): self
    {
        $this->toolsEbpVideoUpdateV30Request = $toolsEbpVideoUpdateV30Request;
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
     * ebp场景更新视频
     */
    public function execute(): \Oceanengine\Models\ToolsEbpVideoUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpVideoUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/video/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpVideoUpdateV30Response::class);

        return $result['model'];
    }
}
