<?php

/**
 * 本文件由 go2php 生成，源: api_local_project_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 拉取项目列表接口，支持各种筛选
 */
class ApiOpenApiV30LocalProjectListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var \Oceanengine\Models\LocalProjectListV30Filtering 过滤字段 */
    private ?\Oceanengine\Models\LocalProjectListV30Filtering $filtering = null;
    /** @var int 页码,最小值1,默认1 */
    private ?int $page = null;
    /** @var int 页面大小,最小值1，最大值100，默认10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalProjectListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 过滤字段
     */
    public function filtering(\Oceanengine\Models\LocalProjectListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码,最小值1,默认1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小,最小值1，最大值100，默认10
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
     * 拉取项目列表接口，支持各种筛选
     */
    public function execute(): \Oceanengine\Models\LocalProjectListV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->localAccountId < 1) {
            throw new \InvalidArgumentException('localAccountId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/project/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalProjectListV30Response::class);

        return $result['model'];
    }
}
