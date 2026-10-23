<?php

/**
 * 本文件由 go2php 生成，源: api_tools_suggest_budget_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取广告建议起量预算
 */
class ApiOpenApiV30ToolsSuggestBudgetGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int[] 广告ID列表，目前仅支持1个 */
    private ?array $promotionIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSuggestBudgetGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告ID列表，目前仅支持1个
     */
    public function promotionIds(array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
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
     * 获取广告建议起量预算
     */
    public function execute(): \Oceanengine\Models\ToolsSuggestBudgetGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->promotionIds === null) {
            throw new \InvalidArgumentException('promotionIds is required and must be specified');
        }
        if (count($this->promotionIds) < 1) {
            throw new \InvalidArgumentException('promotionIds must have at least 1 elements');
        }
        if (count($this->promotionIds) > 1) {
            throw new \InvalidArgumentException('promotionIds must have less than 1 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['promotion_ids'] = $this->promotionIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/suggest_budget/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSuggestBudgetGetV30Response::class);

        return $result['model'];
    }
}
