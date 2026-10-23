<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_video_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取小店可投视频列表
 */
class ApiOpenApiV10QianchuanAwemeVideoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 需要拉取视频的视频作者uid */
    private ?int $awemeId = null;
    private ?string $marketingGoal = null;
    private ?int $cursor = null;
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeVideoGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 需要拉取视频的视频作者uid
     */
    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    public function count(int $count): self
    {
        $this->count = $count;
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
     * 获取小店可投视频列表
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeVideoGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/video/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeVideoGetV10Response::class);

        return $result['model'];
    }
}
