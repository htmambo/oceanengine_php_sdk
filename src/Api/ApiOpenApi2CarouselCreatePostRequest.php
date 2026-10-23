<?php

/**
 * 本文件由 go2php 生成，源: api_carousel_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 塑造图集，出参图集mid。不同图片顺序对应不同的图集mid。
 */
class ApiOpenApi2CarouselCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CarouselCreateV2Request $carouselCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CarouselCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function carouselCreateV2Request(\Oceanengine\Models\CarouselCreateV2Request $carouselCreateV2Request): self
    {
        $this->carouselCreateV2Request = $carouselCreateV2Request;
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
     * 塑造图集，出参图集mid。不同图片顺序对应不同的图集mid。
     */
    public function execute(): \Oceanengine\Models\CarouselCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->carouselCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/carousel/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CarouselCreateV2Response::class);

        return $result['model'];
    }
}
