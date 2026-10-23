<?php

/**
 * 本文件由 go2php 生成，源: api_file_rebate_common_download_download_file_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过指定的task_id,获取对应的数据明细文件
 */
class ApiOpenApi2FileRebateCommonDownloadDownloadFileGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商帐户ID */
    private ?int $agentId = null;
    /** @var string 任务ID */
    private ?string $taskId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileRebateCommonDownloadDownloadFileV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商帐户ID
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 任务ID
     */
    public function taskId(string $taskId): self
    {
        $this->taskId = $taskId;
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
     * 通过指定的task_id,获取对应的数据明细文件
     */
    public function execute(): string
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->taskId === null) {
            throw new \InvalidArgumentException('taskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['task_id'] = $this->taskId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/rebate/common_download/download_file/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $requestContext['responseType'] = 'binary';
        $result = $this->apiClient->call($requestContext, \Oceanengine\Api\BinaryResponse::class);

        return $result['model'];
    }
}
