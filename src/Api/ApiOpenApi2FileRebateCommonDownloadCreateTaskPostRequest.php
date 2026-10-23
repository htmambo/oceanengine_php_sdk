<?php

/**
 * 本文件由 go2php 生成，源: api_file_rebate_common_download_create_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据筛选条件下载任务,返回用户query_id,用于后续的文件下载
 */
class ApiOpenApi2FileRebateCommonDownloadCreateTaskPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FileRebateCommonDownloadCreateTaskV2Request $fileRebateCommonDownloadCreateTaskV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileRebateCommonDownloadCreateTaskV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fileRebateCommonDownloadCreateTaskV2Request(\Oceanengine\Models\FileRebateCommonDownloadCreateTaskV2Request $fileRebateCommonDownloadCreateTaskV2Request): self
    {
        $this->fileRebateCommonDownloadCreateTaskV2Request = $fileRebateCommonDownloadCreateTaskV2Request;
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
     * 根据筛选条件下载任务,返回用户query_id,用于后续的文件下载
     */
    public function execute(): \Oceanengine\Models\FileRebateCommonDownloadCreateTaskV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->fileRebateCommonDownloadCreateTaskV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/rebate/common_download/create_task/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileRebateCommonDownloadCreateTaskV2Response::class);

        return $result['model'];
    }
}
