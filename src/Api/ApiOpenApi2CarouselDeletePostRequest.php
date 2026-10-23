<?php

/**
 * 本文件由 go2php 生成，源: api_carousel_delete_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量删除图集
 */
class ApiOpenApi2CarouselDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CarouselDeleteV2Request $carouselDeleteV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CarouselDeleteV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function carouselDeleteV2Request(\Oceanengine\Models\CarouselDeleteV2Request $carouselDeleteV2Request): self
    {
        $this->carouselDeleteV2Request = $carouselDeleteV2Request;
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
     * 批量删除图集
     */
    public function execute(): \Oceanengine\Models\CarouselDeleteV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->carouselDeleteV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/carousel/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CarouselDeleteV2Response::class);

        return $result['model'];
    }
}
