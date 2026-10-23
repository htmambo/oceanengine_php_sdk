<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_report_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取DOU+订单指标数据
 */
class ApiOpenApiV30DouplusOrderReportGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $awemeSecUid = null;
    private ?\Oceanengine\Models\DouplusOrderReportV30StatTime $statTime = null;
    private ?array $groupBy = null;
    private ?\Oceanengine\Models\DouplusOrderReportV30Filter $filter = null;
    private ?int $pageSize = null;
    private ?int $page = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DouplusOrderReportV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function awemeSecUid(string $awemeSecUid): self
    {
        $this->awemeSecUid = $awemeSecUid;
        return $this;
    }

    public function statTime(\Oceanengine\Models\DouplusOrderReportV30StatTime $statTime): self
    {
        $this->statTime = $statTime;
        return $this;
    }

    public function groupBy(array $groupBy): self
    {
        $this->groupBy = $groupBy;
        return $this;
    }

    public function filter(\Oceanengine\Models\DouplusOrderReportV30Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
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
     * 获取DOU+订单指标数据
     */
    public function execute(): \Oceanengine\Models\DouplusOrderReportV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->awemeSecUid !== null) {
            $queryParams['aweme_sec_uid'] = $this->awemeSecUid;
        }
        if ($this->statTime !== null) {
            $__encoded0 = json_encode($this->statTime);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: statTime');
            }
            $queryParams['stat_time'] = $__encoded0;
        }
        if ($this->groupBy !== null) {
            $queryParams['group_by'] = $this->groupBy;
        }
        if ($this->filter !== null) {
            $__encoded1 = json_encode($this->filter);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded1;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/douplus/order/report/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DouplusOrderReportV30Response::class);

        return $result['model'];
    }
}
