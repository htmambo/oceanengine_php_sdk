<?php

/**
 * 本文件由 go2php 生成，源: api_tools_keywords_bid_ratio_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建优词
 */
class ApiOpenApiV30ToolsKeywordsBidRatioCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsKeywordsBidRatioCreateV30Request $toolsKeywordsBidRatioCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsKeywordsBidRatioCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsKeywordsBidRatioCreateV30Request(\Oceanengine\Models\ToolsKeywordsBidRatioCreateV30Request $toolsKeywordsBidRatioCreateV30Request): self
    {
        $this->toolsKeywordsBidRatioCreateV30Request = $toolsKeywordsBidRatioCreateV30Request;
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
     * 创建优词
     */
    public function execute(): \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsKeywordsBidRatioCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/keywords_bid_ratio/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30Response::class);

        return $result['model'];
    }
}
