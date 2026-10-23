<?php

/**
 * 本文件由 go2php 生成，源: api_tools_keywords_bid_ratio_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 账户优词工具-删除优词
 */
class ApiOpenApiV30ToolsKeywordsBidRatioDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsKeywordsBidRatioDeleteV30Request $toolsKeywordsBidRatioDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsKeywordsBidRatioDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsKeywordsBidRatioDeleteV30Request(\Oceanengine\Models\ToolsKeywordsBidRatioDeleteV30Request $toolsKeywordsBidRatioDeleteV30Request): self
    {
        $this->toolsKeywordsBidRatioDeleteV30Request = $toolsKeywordsBidRatioDeleteV30Request;
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
     * 账户优词工具-删除优词
     */
    public function execute(): \Oceanengine\Models\ToolsKeywordsBidRatioDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsKeywordsBidRatioDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/keywords_bid_ratio/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsKeywordsBidRatioDeleteV30Response::class);

        return $result['model'];
    }
}
