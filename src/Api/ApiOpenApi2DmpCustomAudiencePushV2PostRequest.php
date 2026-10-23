<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_custom_audience_push_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2DmpCustomAudiencePushV2PostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DmpCustomAudiencePushV2V2Request $dmpCustomAudiencePushV2V2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DmpCustomAudiencePushV2V2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dmpCustomAudiencePushV2V2Request(\Oceanengine\Models\DmpCustomAudiencePushV2V2Request $dmpCustomAudiencePushV2V2Request): self
    {
        $this->dmpCustomAudiencePushV2V2Request = $dmpCustomAudiencePushV2V2Request;
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
    public function execute(): \Oceanengine\Models\DmpCustomAudiencePushV2V2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dmpCustomAudiencePushV2V2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dmp/custom_audience/push_v2/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DmpCustomAudiencePushV2V2Response::class);

        return $result['model'];
    }
}
