<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_author_video_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星广联投任务下达人视频信息
 */
class ApiOpenApiV30StardeliveryTaskAuthorVideoDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $starTaskId = null;
    /** @var string 抖音号id */
    private ?string $awemeId = null;
    /** @var string 返回的视频范围 */
    private ?string $starTaskVideoRange = null;
    /** @var \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30Filtering 过滤器 */
    private ?\Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30Filtering $filtering = null;
    /** @var int 页码游标值 */
    private ?int $cursor = null;
    /** @var int 页码游标值 */
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StardeliveryTaskAuthorVideoDetailV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function starTaskId(int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
        return $this;
    }

    /**
     * 抖音号id
     */
    public function awemeId(string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 返回的视频范围
     */
    public function starTaskVideoRange(string $starTaskVideoRange): self
    {
        $this->starTaskVideoRange = $starTaskVideoRange;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码游标值
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 页码游标值
     */
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
     * 获取星广联投任务下达人视频信息
     */
    public function execute(): \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->starTaskId === null) {
            throw new \InvalidArgumentException('starTaskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        $queryParams['star_task_id'] = $this->starTaskId;
        if ($this->starTaskVideoRange !== null) {
            $queryParams['star_task_video_range'] = $this->starTaskVideoRange;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/stardelivery/task_author_video/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30Response::class);

        return $result['model'];
    }
}
