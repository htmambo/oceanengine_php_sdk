<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_grant_result_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 试玩素材支持在同主体下进行推送，本接口用于获取试玩素材推送的结果。可根据【推送试玩素材】接口生成的task_id进行过滤检索试玩素材推送的状态。
 */
class ApiOpenApi2ToolsPlayableGrantResultGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int[] 推送任务id，可根据推送的task_id进行检索，允许传入数量上限200个 */
    private ?array $taskIds = null;
    /** @var string 根据任务创建时间进行过滤，过滤的起始时间，格式YYYY-mm-dd */
    private ?string $startTime = null;
    /** @var string 根据任务的创建时间进行过滤，过滤的截止时间，格式YYYY-mm-dd */
    private ?string $endTime = null;
    /** @var int 页码，默认1 */
    private ?int $page = null;
    /** @var int 页面大小，默认20，最大200 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPlayableGrantResultV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 推送任务id，可根据推送的task_id进行检索，允许传入数量上限200个
     */
    public function taskIds(array $taskIds): self
    {
        $this->taskIds = $taskIds;
        return $this;
    }

    /**
     * 根据任务创建时间进行过滤，过滤的起始时间，格式YYYY-mm-dd
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 根据任务的创建时间进行过滤，过滤的截止时间，格式YYYY-mm-dd
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 页码，默认1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认20，最大200
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 试玩素材支持在同主体下进行推送，本接口用于获取试玩素材推送的结果。可根据【推送试玩素材】接口生成的task_id进行过滤检索试玩素材推送的状态。
     */
    public function execute(): \Oceanengine\Models\ToolsPlayableGrantResultV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->taskIds !== null) {
            $queryParams['task_ids'] = $this->taskIds;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/playable/grant/result/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPlayableGrantResultV2Response::class);

        return $result['model'];
    }
}
