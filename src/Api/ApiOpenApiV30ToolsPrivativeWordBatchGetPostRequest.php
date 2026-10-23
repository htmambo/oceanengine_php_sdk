<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_batch_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 2.0项目批量查询否定词
 */
class ApiOpenApiV30ToolsPrivativeWordBatchGetPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPrivativeWordBatchGetV30Request $toolsPrivativeWordBatchGetV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPrivativeWordBatchGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPrivativeWordBatchGetV30Request(\Oceanengine\Models\ToolsPrivativeWordBatchGetV30Request $toolsPrivativeWordBatchGetV30Request): self
    {
        $this->toolsPrivativeWordBatchGetV30Request = $toolsPrivativeWordBatchGetV30Request;
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
     * 2.0项目批量查询否定词
     */
    public function execute(): \Oceanengine\Models\ToolsPrivativeWordBatchGetV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPrivativeWordBatchGetV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/privative_word/batch_get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPrivativeWordBatchGetV30Response::class);

        return $result['model'];
    }
}
