<?php

/**
 * 本文件由 go2php 生成，源: api_tools_keywords_bid_ratio_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 编辑优词
 */
class ApiOpenApiV30ToolsKeywordsBidRatioUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsKeywordsBidRatioUpdateV30Request $toolsKeywordsBidRatioUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsKeywordsBidRatioUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsKeywordsBidRatioUpdateV30Request(\Oceanengine\Models\ToolsKeywordsBidRatioUpdateV30Request $toolsKeywordsBidRatioUpdateV30Request): self
    {
        $this->toolsKeywordsBidRatioUpdateV30Request = $toolsKeywordsBidRatioUpdateV30Request;
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
     * 编辑优词
     */
    public function execute(): \Oceanengine\Models\ToolsKeywordsBidRatioUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsKeywordsBidRatioUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/keywords_bid_ratio/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsKeywordsBidRatioUpdateV30Response::class);

        return $result['model'];
    }
}
