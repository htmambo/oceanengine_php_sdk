<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_publish_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2DmpCustomAudiencePublishPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DmpCustomAudiencePublishV2Request $dmpCustomAudiencePublishV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DmpCustomAudiencePublishV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dmpCustomAudiencePublishV2Request(\Oceanengine\Models\DmpCustomAudiencePublishV2Request $dmpCustomAudiencePublishV2Request): self
    {
        $this->dmpCustomAudiencePublishV2Request = $dmpCustomAudiencePublishV2Request;
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
    public function execute(): \Oceanengine\Models\DmpCustomAudiencePublishV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dmpCustomAudiencePublishV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dmp/custom_audience/publish/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DmpCustomAudiencePublishV2Response::class);

        return $result['model'];
    }
}
