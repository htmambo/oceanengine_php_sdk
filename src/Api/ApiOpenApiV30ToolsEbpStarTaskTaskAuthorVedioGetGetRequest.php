<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_star_task_task_author_vedio_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取EBP星广联投任务下达人视频信息仅支持通用版星广联投任务，不兼容短剧版
 */
class ApiOpenApiV30ToolsEbpStarTaskTaskAuthorVedioGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    private ?int $starTaskId = null;
    /** @var string 返回的视频范围 */
    private ?string $starTaskVideoRange = null;
    /** @var string 抖音号id */
    private ?string $awemeId = null;
    /** @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30Filtering $filtering = null;
    /** @var int 页码游标值 */
    private ?int $cursor = null;
    /** @var int 页码游标值 */
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpStarTaskTaskAuthorVedioGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function starTaskId(int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
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
     * 抖音号id
     */
    public function awemeId(string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30Filtering $filtering): self
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
     * 获取EBP星广联投任务下达人视频信息仅支持通用版星广联投任务，不兼容短剧版
     */
    public function execute(): \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->starTaskId === null) {
            throw new \InvalidArgumentException('starTaskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['star_task_id'] = $this->starTaskId;
        if ($this->starTaskVideoRange !== null) {
            $queryParams['star_task_video_range'] = $this->starTaskVideoRange;
        }
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
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
        $url = '/open_api/v3.0/tools/ebp/star_task/task_author_vedio/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30Response::class);

        return $result['model'];
    }
}
