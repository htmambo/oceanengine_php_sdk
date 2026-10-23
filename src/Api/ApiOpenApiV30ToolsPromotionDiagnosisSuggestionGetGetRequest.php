<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_diagnosis_suggestion_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 2.0广告诊断for活跃度低
 */
class ApiOpenApiV30ToolsPromotionDiagnosisSuggestionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $promotionIds = null;
    private ?array $scenes = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPromotionDiagnosisSuggestionGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function promotionIds(array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
        return $this;
    }

    public function scenes(array $scenes): self
    {
        $this->scenes = $scenes;
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
     * 2.0广告诊断for活跃度低
     */
    public function execute(): \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->promotionIds === null) {
            throw new \InvalidArgumentException('promotionIds is required and must be specified');
        }
        if (count($this->promotionIds) < 1) {
            throw new \InvalidArgumentException('promotionIds must have at least 1 elements');
        }
        if (count($this->promotionIds) > 100) {
            throw new \InvalidArgumentException('promotionIds must have less than 100 elements');
        }
        if ($this->scenes === null) {
            throw new \InvalidArgumentException('scenes is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['promotion_ids'] = $this->promotionIds;
        $queryParams['scenes'] = $this->scenes;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/promotion_diagnosis/suggestion/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30Response::class);

        return $result['model'];
    }
}
