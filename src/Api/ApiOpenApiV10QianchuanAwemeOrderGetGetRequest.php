<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 小店随心推订单列表
 */
class ApiOpenApiV10QianchuanAwemeOrderGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川广告主id */
    private ?int $advertiserId = null;
    private ?\Oceanengine\Models\QianchuanAwemeOrderGetV10Filtering $filtering = null;
    /** @var int 页码，默认值：0 */
    private ?int $cursor = null;
    /** @var \Oceanengine\Models\QianchuanAwemeOrderGetV10Count 页面大小，允许值：10, 20, 50，默认值：10 */
    private ?\Oceanengine\Models\QianchuanAwemeOrderGetV10Count $count = null;
    /** @var string 排序字段。默认升序 */
    private ?string $orderField = null;
    /** @var string 计划创建开始时间，格式：\&quot;yyyy-mm-dd\&quot; */
    private ?string $orderCreateStartDate = null;
    /** @var string 计划创建结束时间，与order_create_start_date搭配使用，格式：\&quot;yyyy-mm-dd\&quot;，时间跨度不能超过180天 */
    private ?string $orderCreateEndDate = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeOrderGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function filtering(\Oceanengine\Models\QianchuanAwemeOrderGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码，默认值：0
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 页面大小，允许值：10, 20, 50，默认值：10
     */
    public function count(\Oceanengine\Models\QianchuanAwemeOrderGetV10Count $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * 排序字段。默认升序
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 计划创建开始时间，格式：\&quot;yyyy-mm-dd\&quot;
     */
    public function orderCreateStartDate(string $orderCreateStartDate): self
    {
        $this->orderCreateStartDate = $orderCreateStartDate;
        return $this;
    }

    /**
     * 计划创建结束时间，与order_create_start_date搭配使用，格式：\&quot;yyyy-mm-dd\&quot;，时间跨度不能超过180天
     */
    public function orderCreateEndDate(string $orderCreateEndDate): self
    {
        $this->orderCreateEndDate = $orderCreateEndDate;
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
     * 小店随心推订单列表
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeOrderGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $__encoded1 = json_encode($this->count);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: count');
            }
            $queryParams['count'] = $__encoded1;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderCreateStartDate !== null) {
            $queryParams['order_create_start_date'] = $this->orderCreateStartDate;
        }
        if ($this->orderCreateEndDate !== null) {
            $queryParams['order_create_end_date'] = $this->orderCreateEndDate;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/order/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeOrderGetV10Response::class);

        return $result['model'];
    }
}
