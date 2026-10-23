<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_keyword_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 编辑关键词调控任务
 */
class ApiOpenApiV30OcProjectToolsKeywordUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OcProjectToolsKeywordUpdateV30Request $ocProjectToolsKeywordUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectToolsKeywordUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ocProjectToolsKeywordUpdateV30Request(\Oceanengine\Models\OcProjectToolsKeywordUpdateV30Request $ocProjectToolsKeywordUpdateV30Request): self
    {
        $this->ocProjectToolsKeywordUpdateV30Request = $ocProjectToolsKeywordUpdateV30Request;
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
     * 编辑关键词调控任务
     */
    public function execute(): \Oceanengine\Models\OcProjectToolsKeywordUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ocProjectToolsKeywordUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/tools_keyword/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectToolsKeywordUpdateV30Response::class);

        return $result['model'];
    }
}
