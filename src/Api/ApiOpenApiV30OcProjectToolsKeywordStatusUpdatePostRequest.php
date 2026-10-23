<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_keyword_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量启停关键词调控任务
 */
class ApiOpenApiV30OcProjectToolsKeywordStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OcProjectToolsKeywordStatusUpdateV30Request $ocProjectToolsKeywordStatusUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectToolsKeywordStatusUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ocProjectToolsKeywordStatusUpdateV30Request(\Oceanengine\Models\OcProjectToolsKeywordStatusUpdateV30Request $ocProjectToolsKeywordStatusUpdateV30Request): self
    {
        $this->ocProjectToolsKeywordStatusUpdateV30Request = $ocProjectToolsKeywordStatusUpdateV30Request;
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
     * 批量启停关键词调控任务
     */
    public function execute(): \Oceanengine\Models\OcProjectToolsKeywordStatusUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ocProjectToolsKeywordStatusUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/tools_keyword/status/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectToolsKeywordStatusUpdateV30Response::class);

        return $result['model'];
    }
}
