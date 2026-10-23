<?php

/**
 * 本文件由 go2php 生成，源: api_tools_agreement_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 完成特定协议最新版本签署
 */
class ApiOpenApiV30ToolsAgreementCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAgreementCreateV30Request $toolsAgreementCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAgreementCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAgreementCreateV30Request(\Oceanengine\Models\ToolsAgreementCreateV30Request $toolsAgreementCreateV30Request): self
    {
        $this->toolsAgreementCreateV30Request = $toolsAgreementCreateV30Request;
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
     * 完成特定协议最新版本签署
     */
    public function execute(): \Oceanengine\Models\ToolsAgreementCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAgreementCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/agreement/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAgreementCreateV30Response::class);

        return $result['model'];
    }
}
