<?php

/**
 * 本文件由 go2php 生成，源: api_local_file_video_upload_task_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询异步上传本地推视频结果
 */
class ApiOpenApiV30LocalFileVideoUploadTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var int[] 任务id列表 */
    private ?array $taskIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalFileVideoUploadTaskListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
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
     * 查询异步上传本地推视频结果
     */
    public function execute(): \Oceanengine\Models\LocalFileVideoUploadTaskListV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
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
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['task_ids'] = $this->taskIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/file/video/upload_task/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalFileVideoUploadTaskListV30Response::class);

        return $result['model'];
    }
}
