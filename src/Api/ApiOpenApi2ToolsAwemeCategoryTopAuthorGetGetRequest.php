<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_category_top_author_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsAwemeCategoryTopAuthorGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $behaviors = null;
    private ?int $categoryId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAwemeCategoryTopAuthorGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function behaviors(array $behaviors): self
    {
        $this->behaviors = $behaviors;
        return $this;
    }

    public function categoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ToolsAwemeCategoryTopAuthorGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->behaviors !== null) {
            $queryParams['behaviors'] = $this->behaviors;
        }
        if ($this->categoryId !== null) {
            $queryParams['category_id'] = $this->categoryId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aweme_category_top_author/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAwemeCategoryTopAuthorGetV2Response::class);

        return $result['model'];
    }
}
