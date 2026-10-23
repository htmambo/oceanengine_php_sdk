<?php

/**
 * 本文件由 go2php 生成，源: api_tools_diagnosis_suggestion_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于获取 巨量广告平台-广告层级的诊断建议
 */
class ApiOpenApiV30ToolsDiagnosisSuggestionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $promotionIds = null;
    private ?int $advertiserId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsDiagnosisSuggestionGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function promotionIds(array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
        return $this;
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
     * 用于获取 巨量广告平台-广告层级的诊断建议
     */
    public function execute(): \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30Response
    {
        if ($this->promotionIds === null) {
            throw new \InvalidArgumentException('promotionIds is required and must be specified');
        }
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['promotion_ids'] = $this->promotionIds;
        $queryParams['advertiser_id'] = $this->advertiserId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/diagnosis/suggestion/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30Response::class);

        return $result['model'];
    }
}
