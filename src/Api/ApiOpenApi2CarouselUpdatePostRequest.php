<?php

/**
 * 本文件由 go2php 生成，源: api_carousel_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更细图集信息，目前仅支持图集 file_name 和主题修改
 */
class ApiOpenApi2CarouselUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CarouselUpdateV2Request $carouselUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CarouselUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function carouselUpdateV2Request(\Oceanengine\Models\CarouselUpdateV2Request $carouselUpdateV2Request): self
    {
        $this->carouselUpdateV2Request = $carouselUpdateV2Request;
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
     * 更细图集信息，目前仅支持图集 file_name 和主题修改
     */
    public function execute(): \Oceanengine\Models\CarouselUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->carouselUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/carousel/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CarouselUpdateV2Response::class);

        return $result['model'];
    }
}
