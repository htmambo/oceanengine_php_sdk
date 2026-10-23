<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_order_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星图客户任务订单列表
 */
class ApiOpenApi2StarDemandOrderListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 星图id，星图客户授权后，通过“获取已授权账户”接口，查询到账号角色为”6-星图账号“的账户id，即为星图id */
    private ?int $starId = null;
    /** @var int 任务id，可通过“获取星图客户任务列表”获取 */
    private ?int $demandId = null;
    /** @var \Oceanengine\Models\StarDemandOrderListV2Filtering 过滤条件，若此字段不传，或传空则视为无限制条件 */
    private ?\Oceanengine\Models\StarDemandOrderListV2Filtering $filtering = null;
    /** @var int 页码，默认为1 */
    private ?int $page = null;
    /** @var int 页面大小，默认10，最大值50 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandOrderListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 星图id，星图客户授权后，通过“获取已授权账户”接口，查询到账号角色为”6-星图账号“的账户id，即为星图id
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 任务id，可通过“获取星图客户任务列表”获取
     */
    public function demandId(int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 过滤条件，若此字段不传，或传空则视为无限制条件
     */
    public function filtering(\Oceanengine\Models\StarDemandOrderListV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * 页面大小，默认10，最大值50
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
     * 获取星图客户任务订单列表
     */
    public function execute(): \Oceanengine\Models\StarDemandOrderListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->demandId === null) {
            throw new \InvalidArgumentException('demandId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['demand_id'] = $this->demandId;
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
        $url = '/open_api/2/star/demand/order/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandOrderListV2Response::class);

        return $result['model'];
    }
}
