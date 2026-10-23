<?php

/**
 * 本文件由 go2php 生成，源: api_audience_package_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 定向包更新
 */
class ApiOpenApi2AudiencePackageUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AudiencePackageUpdateV2Request $audiencePackageUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AudiencePackageUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function audiencePackageUpdateV2Request(\Oceanengine\Models\AudiencePackageUpdateV2Request $audiencePackageUpdateV2Request): self
    {
        $this->audiencePackageUpdateV2Request = $audiencePackageUpdateV2Request;
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
     * 定向包更新
     */
    public function execute(): \Oceanengine\Models\AudiencePackageUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->audiencePackageUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/audience_package/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AudiencePackageUpdateV2Response::class);

        return $result['model'];
    }
}
