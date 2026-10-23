<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_task_download_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 下载异步任务结果
 */
class ApiOpenApi2EbpAdvertiserTaskDownloadGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $enterpriseOrganizationId = null;
    private ?int $taskId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpAdvertiserTaskDownloadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function enterpriseOrganizationId(int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    public function taskId(int $taskId): self
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
     * 下载异步任务结果
     */
    public function execute(): string
    {
        if ($this->enterpriseOrganizationId === null) {
            throw new \InvalidArgumentException('enterpriseOrganizationId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        if ($this->taskId !== null) {
            $queryParams['task_id'] = $this->taskId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/ebp/advertiser/task/download/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $requestContext['responseType'] = 'binary';
        $result = $this->apiClient->call($requestContext, \Oceanengine\Api\BinaryResponse::class);

        return $result['model'];
    }
}
