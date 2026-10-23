<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_recurit_provider_get_task_order_list_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 招募服务商任务信息查询
 */
class ApiOpenApi2StarMcnRecuritProviderGetTaskOrderListGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $providerOrderTaskStatus = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnRecuritProviderGetTaskOrderListGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    public function providerOrderTaskStatus(int $providerOrderTaskStatus): self
    {
        $this->providerOrderTaskStatus = $providerOrderTaskStatus;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
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
     * 招募服务商任务信息查询
     */
    public function execute(): \Oceanengine\Models\StarMcnRecuritProviderGetTaskOrderListGetV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->providerOrderTaskStatus !== null) {
            $queryParams['provider_order_task_status'] = $this->providerOrderTaskStatus;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/recurit_provider_get_task_order_list/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnRecuritProviderGetTaskOrderListGetV2Response::class);

        return $result['model'];
    }
}
