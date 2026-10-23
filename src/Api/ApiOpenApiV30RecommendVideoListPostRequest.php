<?php

/**
 * 本文件由 go2php 生成，源: api_recommend_video_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取推荐素材视频
 */
class ApiOpenApiV30RecommendVideoListPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\RecommendVideoListV30Request $recommendVideoListV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(RecommendVideoListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function recommendVideoListV30Request(\Oceanengine\Models\RecommendVideoListV30Request $recommendVideoListV30Request): self
    {
        $this->recommendVideoListV30Request = $recommendVideoListV30Request;
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
     * 获取推荐素材视频
     */
    public function execute(): \Oceanengine\Models\RecommendVideoListV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->recommendVideoListV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/recommend/video/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\RecommendVideoListV30Response::class);

        return $result['model'];
    }
}
