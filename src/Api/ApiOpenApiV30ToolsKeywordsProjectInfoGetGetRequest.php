<?php

/**
 * 本文件由 go2php 生成，源: api_tools_keywords_project_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 账户优词工具-查询优词绑定的项目
 */
class ApiOpenApiV30ToolsKeywordsProjectInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $promotionWordId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsKeywordsProjectInfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function promotionWordId(string $promotionWordId): self
    {
        $this->promotionWordId = $promotionWordId;
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
     * 账户优词工具-查询优词绑定的项目
     */
    public function execute(): \Oceanengine\Models\ToolsKeywordsProjectInfoGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->promotionWordId === null) {
            throw new \InvalidArgumentException('promotionWordId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['promotion_word_id'] = $this->promotionWordId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/keywords_project_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsKeywordsProjectInfoGetV30Response::class);

        return $result['model'];
    }
}
