<?php

/**
 * 本文件由 go2php 生成，源: api_tools_advertiser_diagnosis_suggestion_accept_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 采纳7R诊断建议
 */
class ApiOpenApiV30ToolsAdvertiserDiagnosisSuggestionAcceptUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Request $toolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Request(\Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Request $toolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Request): self
    {
        $this->toolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Request = $toolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Request;
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
     * 采纳7R诊断建议
     */
    public function execute(): \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/advertiser_diagnosis/suggestion/accept/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30Response::class);

        return $result['model'];
    }
}
