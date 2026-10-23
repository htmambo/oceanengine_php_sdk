<?php

/**
 * 本文件由 go2php 生成，源: api_star_star_ad_unite_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星广联投(星图版)任务列表
 */
class ApiOpenApi2StarStarAdUniteTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户的星图id */
    private ?int $starId = null;
    /** @var int 页码，默认为1 */
    private ?int $page = null;
    /** @var int 页面大小，默认10，最大值20 */
    private ?int $pageSize = null;
    /** @var \Oceanengine\Models\StarStarAdUniteTaskListV2Filtering 过滤器 */
    private ?\Oceanengine\Models\StarStarAdUniteTaskListV2Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarStarAdUniteTaskListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户的星图id
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 页码，默认为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认10，最大值20
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\StarStarAdUniteTaskListV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * 获取星广联投(星图版)任务列表
     */
    public function execute(): \Oceanengine\Models\StarStarAdUniteTaskListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/star_ad_unite_task/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarStarAdUniteTaskListV2Response::class);

        return $result['model'];
    }
}
