<?php

/**
 * 本文件由 go2php 生成，源: api_tools_video_cover_suggest_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以获取针对素材视频推荐的智能封面。智能封面是通过提取视频关键帧筛选出推荐封面，帮助发现视频内优质封面素材。
 */
class ApiOpenApi2ToolsVideoCoverSuggestGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string 视频id */
    private ?string $videoId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsVideoCoverSuggestV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 视频id
     */
    public function videoId(string $videoId): self
    {
        $this->videoId = $videoId;
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
     * 通过此接口，用户可以获取针对素材视频推荐的智能封面。智能封面是通过提取视频关键帧筛选出推荐封面，帮助发现视频内优质封面素材。
     */
    public function execute(): \Oceanengine\Models\ToolsVideoCoverSuggestV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->videoId === null) {
            throw new \InvalidArgumentException('videoId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['video_id'] = $this->videoId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/video_cover/suggest/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsVideoCoverSuggestV2Response::class);

        return $result['model'];
    }
}
