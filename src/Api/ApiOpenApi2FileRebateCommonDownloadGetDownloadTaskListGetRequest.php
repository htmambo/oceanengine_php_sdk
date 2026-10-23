<?php

/**
 * 本文件由 go2php 生成，源: api_file_rebate_common_download_get_download_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询指定query_id的所有下载任务
 */
class ApiOpenApi2FileRebateCommonDownloadGetDownloadTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $agentId = null;
    private ?string $queryId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileRebateCommonDownloadGetDownloadTaskListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    public function queryId(string $queryId): self
    {
        $this->queryId = $queryId;
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
     * 查询指定query_id的所有下载任务
     */
    public function execute(): \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        if ($this->queryId !== null) {
            $queryParams['query_id'] = $this->queryId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/rebate/common_download/get_download_task_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2Response::class);

        return $result['model'];
    }
}
