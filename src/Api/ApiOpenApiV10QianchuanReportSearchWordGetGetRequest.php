<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_search_word_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取搜索词/关键词数据明细
 * https://bytedance.feishu.cn/wiki/wikcnIR2vVK0hZVlVLAWJ9dGpFb
 */
class ApiOpenApiV10QianchuanReportSearchWordGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 开始时间，格式 2021-04-05 */
    private ?string $startDate = null;
    /** @var string 结束时间，格式 2021-04-05 */
    private ?string $endDate = null;
    private ?array $fields = null;
    private ?string $wordType = null;
    private ?\Oceanengine\Models\QianchuanReportSearchWordGetV10Filtering $filtering = null;
    private ?string $timeGranularity = null;
    private ?string $orderField = null;
    private ?string $orderType = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportSearchWordGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 开始时间，格式 2021-04-05
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 结束时间，格式 2021-04-05
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function wordType(string $wordType): self
    {
        $this->wordType = $wordType;
        return $this;
    }

    public function filtering(\Oceanengine\Models\QianchuanReportSearchWordGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function timeGranularity(string $timeGranularity): self
    {
        $this->timeGranularity = $timeGranularity;
        return $this;
    }

    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

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
     * 获取搜索词/关键词数据明细
     */
    public function execute(): \Oceanengine\Models\QianchuanReportSearchWordGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        if ($this->wordType === null) {
            throw new \InvalidArgumentException('wordType is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        if ($this->timeGranularity !== null) {
            $queryParams['time_granularity'] = $this->timeGranularity;
        }
        $queryParams['fields'] = $this->fields;
        $queryParams['word_type'] = $this->wordType;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/search_word/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportSearchWordGetV10Response::class);

        return $result['model'];
    }
}
