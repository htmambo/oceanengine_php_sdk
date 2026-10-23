<?php

/**
 * 本文件由 go2php 生成，源: api_local_report_audience_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本地推受众分析报表
 */
class ApiOpenApiV30LocalReportAudienceGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var string 查询起始日期 */
    private ?string $startDate = null;
    /** @var string 查询结束日期 */
    private ?string $endDate = null;
    private ?string $audienceDimension = null;
    private ?string $dataDimension = null;
    private ?array $fields = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;
    /** @var \Oceanengine\Models\LocalReportAudienceGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\LocalReportAudienceGetV30Filtering $filtering = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalReportAudienceGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 查询起始日期
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 查询结束日期
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function audienceDimension(string $audienceDimension): self
    {
        $this->audienceDimension = $audienceDimension;
        return $this;
    }

    public function dataDimension(string $dataDimension): self
    {
        $this->dataDimension = $dataDimension;
        return $this;
    }

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 排序方式
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 排序字段
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\LocalReportAudienceGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * 本地推受众分析报表
     */
    public function execute(): \Oceanengine\Models\LocalReportAudienceGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        if ($this->audienceDimension === null) {
            throw new \InvalidArgumentException('audienceDimension is required and must be specified');
        }
        if ($this->dataDimension === null) {
            throw new \InvalidArgumentException('dataDimension is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $queryParams['audience_dimension'] = $this->audienceDimension;
        $queryParams['data_dimension'] = $this->dataDimension;
        if ($this->fields !== null) {
            $queryParams['fields'] = $this->fields;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
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
        $url = '/open_api/v3.0/local/report/audience/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalReportAudienceGetV30Response::class);

        return $result['model'];
    }
}
