<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_refund_detail_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 按广告计划维度统计按月的无效线索返款详情。
 */
class ApiOpenApi2ToolsClueRefundDetailGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string 查询账单月份，格式YYYYMM，只支持查询202112月及之后的账单 */
    private ?string $month = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小，即每页展示的数据量 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueRefundDetailGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 查询账单月份，格式YYYYMM，只支持查询202112月及之后的账单
     */
    public function month(string $month): self
    {
        $this->month = $month;
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
     * 页面大小，即每页展示的数据量
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
     * 按广告计划维度统计按月的无效线索返款详情。
     */
    public function execute(): \Oceanengine\Models\ToolsClueRefundDetailGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->month === null) {
            throw new \InvalidArgumentException('month is required and must be specified');
        }
        if (strlen($this->month) < 6) {
            throw new \InvalidArgumentException('month must have at least 6 elements');
        }
        if (strlen($this->month) > 6) {
            throw new \InvalidArgumentException('month must have less than 6 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['month'] = $this->month;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/refund_detail/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueRefundDetailGetV2Response::class);

        return $result['model'];
    }
}
