<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询异步任务列表
 */
class ApiOpenApi2EbpAdvertiserTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $enterpriseOrganizationId = null;
    private ?array $taskIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpAdvertiserTaskListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function enterpriseOrganizationId(int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

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
     * 查询异步任务列表
     */
    public function execute(): \Oceanengine\Models\EbpAdvertiserTaskListV2Response
    {
        if ($this->enterpriseOrganizationId === null) {
            throw new \InvalidArgumentException('enterpriseOrganizationId is required and must be specified');
        }
        if ($this->taskIds === null) {
            throw new \InvalidArgumentException('taskIds is required and must be specified');
        }
        if (count($this->taskIds) < 1) {
            throw new \InvalidArgumentException('taskIds must have at least 1 elements');
        }
        if (count($this->taskIds) > 10) {
            throw new \InvalidArgumentException('taskIds must have less than 10 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        $queryParams['task_ids'] = $this->taskIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/ebp/advertiser/task/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpAdvertiserTaskListV2Response::class);

        return $result['model'];
    }
}
