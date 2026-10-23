<?php

/**
 * 本文件由 go2php 生成，源: api_local_audience_package_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新定向包
 */
class ApiOpenApiV30LocalAudiencePackageUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalAudiencePackageUpdateV30Request $localAudiencePackageUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalAudiencePackageUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAudiencePackageUpdateV30Request(\Oceanengine\Models\LocalAudiencePackageUpdateV30Request $localAudiencePackageUpdateV30Request): self
    {
        $this->localAudiencePackageUpdateV30Request = $localAudiencePackageUpdateV30Request;
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
     * 更新定向包
     */
    public function execute(): \Oceanengine\Models\LocalAudiencePackageUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localAudiencePackageUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/audience_package/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalAudiencePackageUpdateV30Response::class);

        return $result['model'];
    }
}
