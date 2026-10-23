<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_upload_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取异步上传视频文件结果
 */
class ApiOpenApi2FileVideoUploadTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID */
    private ?int $accountId = null;
    /** @var string 账户类型 ADVERTISER 广告主 AGTENT 代理商 */
    private ?string $accountType = null;
    /** @var int[] 任务id列表 */
    private ?array $taskIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileVideoUploadTaskListV2ApiService $service)
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
     * 账户类型 ADVERTISER 广告主 AGTENT 代理商
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 任务id列表
     */
    public function taskIds(array $taskIds): self
    {
        $this->taskIds = $taskIds;
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
     * 获取异步上传视频文件结果
     */
    public function execute(): \Oceanengine\Models\FileVideoUploadTaskListV2Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->taskIds === null) {
            throw new \InvalidArgumentException('taskIds is required and must be specified');
        }
        if (count($this->taskIds) < 1) {
            throw new \InvalidArgumentException('taskIds must have at least 1 elements');
        }
        if (count($this->taskIds) > 100) {
            throw new \InvalidArgumentException('taskIds must have less than 100 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['task_ids'] = $this->taskIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/video/upload_task/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileVideoUploadTaskListV2Response::class);

        return $result['model'];
    }
}
