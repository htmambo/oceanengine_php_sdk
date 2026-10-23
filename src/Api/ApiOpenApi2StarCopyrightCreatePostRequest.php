<?php

/**
 * 本文件由 go2php 生成，源: api_star_copyright_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 客户创建版权内容
 */
class ApiOpenApi2StarCopyrightCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarCopyrightCreateV2Request $starCopyrightCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarCopyrightCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starCopyrightCreateV2Request(\Oceanengine\Models\StarCopyrightCreateV2Request $starCopyrightCreateV2Request): self
    {
        $this->starCopyrightCreateV2Request = $starCopyrightCreateV2Request;
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
     * 客户创建版权内容
     */
    public function execute(): \Oceanengine\Models\StarCopyrightCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starCopyrightCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/copyright/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarCopyrightCreateV2Response::class);

        return $result['model'];
    }
}
