<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_data_source_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2DmpDataSourceCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DmpDataSourceCreateV2Request $dmpDataSourceCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DmpDataSourceCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dmpDataSourceCreateV2Request(\Oceanengine\Models\DmpDataSourceCreateV2Request $dmpDataSourceCreateV2Request): self
    {
        $this->dmpDataSourceCreateV2Request = $dmpDataSourceCreateV2Request;
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
    public function execute(): \Oceanengine\Models\DmpDataSourceCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dmpDataSourceCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dmp/data_source/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DmpDataSourceCreateV2Response::class);

        return $result['model'];
    }
}
