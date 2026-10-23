<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_diagnosis_suggestion_accept_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 2.0诊断采纳API
 */
class ApiOpenApiV30ToolsPromotionDiagnosisSuggestionAcceptPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30Request $toolsPromotionDiagnosisSuggestionAcceptV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPromotionDiagnosisSuggestionAcceptV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPromotionDiagnosisSuggestionAcceptV30Request(\Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30Request $toolsPromotionDiagnosisSuggestionAcceptV30Request): self
    {
        $this->toolsPromotionDiagnosisSuggestionAcceptV30Request = $toolsPromotionDiagnosisSuggestionAcceptV30Request;
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
     * 2.0诊断采纳API
     */
    public function execute(): \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPromotionDiagnosisSuggestionAcceptV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/promotion_diagnosis/suggestion/accept/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30Response::class);

        return $result['model'];
    }
}
