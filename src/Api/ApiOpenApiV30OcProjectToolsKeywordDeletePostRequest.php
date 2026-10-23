<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_keyword_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量删除关键词调控任务
 */
class ApiOpenApiV30OcProjectToolsKeywordDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OcProjectToolsKeywordDeleteV30Request $ocProjectToolsKeywordDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectToolsKeywordDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ocProjectToolsKeywordDeleteV30Request(\Oceanengine\Models\OcProjectToolsKeywordDeleteV30Request $ocProjectToolsKeywordDeleteV30Request): self
    {
        $this->ocProjectToolsKeywordDeleteV30Request = $ocProjectToolsKeywordDeleteV30Request;
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
     * 批量删除关键词调控任务
     */
    public function execute(): \Oceanengine\Models\OcProjectToolsKeywordDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ocProjectToolsKeywordDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/tools_keyword/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectToolsKeywordDeleteV30Response::class);

        return $result['model'];
    }
}
