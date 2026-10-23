<?php

/**
 * 本文件由 go2php 生成，源: api_creative_custom_creative_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2CreativeCustomCreativeUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2Request $creativeCustomCreativeUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CreativeCustomCreativeUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function creativeCustomCreativeUpdateV2Request(\Oceanengine\Models\CreativeCustomCreativeUpdateV2Request $creativeCustomCreativeUpdateV2Request): self
    {
        $this->creativeCustomCreativeUpdateV2Request = $creativeCustomCreativeUpdateV2Request;
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
    public function execute(): \Oceanengine\Models\CreativeCustomCreativeUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->creativeCustomCreativeUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/creative/custom_creative/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CreativeCustomCreativeUpdateV2Response::class);

        return $result['model'];
    }
}
