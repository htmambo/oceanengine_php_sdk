<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_auth_renewal_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 抖音授权关系续期
 */
class ApiOpenApi2ToolsAwemeAuthRenewalPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAwemeAuthRenewalV2Request $toolsAwemeAuthRenewalV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAwemeAuthRenewalV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAwemeAuthRenewalV2Request(\Oceanengine\Models\ToolsAwemeAuthRenewalV2Request $toolsAwemeAuthRenewalV2Request): self
    {
        $this->toolsAwemeAuthRenewalV2Request = $toolsAwemeAuthRenewalV2Request;
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
     * 抖音授权关系续期
     */
    public function execute(): \Oceanengine\Models\ToolsAwemeAuthRenewalV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAwemeAuthRenewalV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aweme_auth/renewal/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAwemeAuthRenewalV2Response::class);

        return $result['model'];
    }
}
