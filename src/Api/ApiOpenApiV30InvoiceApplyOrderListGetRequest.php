<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_apply_order_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询已提交的开票申请
 */
class ApiOpenApiV30InvoiceApplyOrderListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 投放账户ID */
    private ?int $accountId = null;
    /** @var string 业务线 */
    private ?string $platform = null;
    /** @var string[] 发票方向列表 */
    private ?array $invoiceDirections = null;
    /** @var string[] 发票类型列表 */
    private ?array $invoiceTypes = null;
    /** @var string[] 开票状态列表 */
    private ?array $invoiceStatuses = null;
    /** @var string[] 开票申请单编号列表 */
    private ?array $invoiceApplySerials = null;
    /** @var string[] 红冲状态列表 */
    private ?array $reverseStatuses = null;
    /** @var string 创建开票申请起始日期；格式 yyyy-MM-dd */
    private ?string $startDate = null;
    /** @var string 创建开票申请截止日期；格式 yyyy-MM-dd */
    private ?string $endDate = null;
    /** @var int 页码，最大1000 */
    private ?int $page = null;
    /** @var int 页容量，最大100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(InvoiceApplyOrderListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 投放账户ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 业务线
     */
    public function platform(string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 发票方向列表
     */
    public function invoiceDirections(array $invoiceDirections): self
    {
        $this->invoiceDirections = $invoiceDirections;
        return $this;
    }

    /**
     * 发票类型列表
     */
    public function invoiceTypes(array $invoiceTypes): self
    {
        $this->invoiceTypes = $invoiceTypes;
        return $this;
    }

    /**
     * 开票状态列表
     */
    public function invoiceStatuses(array $invoiceStatuses): self
    {
        $this->invoiceStatuses = $invoiceStatuses;
        return $this;
    }

    /**
     * 开票申请单编号列表
     */
    public function invoiceApplySerials(array $invoiceApplySerials): self
    {
        $this->invoiceApplySerials = $invoiceApplySerials;
        return $this;
    }

    /**
     * 红冲状态列表
     */
    public function reverseStatuses(array $reverseStatuses): self
    {
        $this->reverseStatuses = $reverseStatuses;
        return $this;
    }

    /**
     * 创建开票申请起始日期；格式 yyyy-MM-dd
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 创建开票申请截止日期；格式 yyyy-MM-dd
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 页码，最大1000
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页容量，最大100
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
     * 查询已提交的开票申请
     */
    public function execute(): \Oceanengine\Models\InvoiceApplyOrderListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['platform'] = $this->platform;
        if ($this->invoiceDirections !== null) {
            $queryParams['invoice_directions'] = $this->invoiceDirections;
        }
        if ($this->invoiceTypes !== null) {
            $queryParams['invoice_types'] = $this->invoiceTypes;
        }
        if ($this->invoiceStatuses !== null) {
            $queryParams['invoice_statuses'] = $this->invoiceStatuses;
        }
        if ($this->invoiceApplySerials !== null) {
            $queryParams['invoice_apply_serials'] = $this->invoiceApplySerials;
        }
        if ($this->reverseStatuses !== null) {
            $queryParams['reverse_statuses'] = $this->reverseStatuses;
        }
        if ($this->startDate !== null) {
            $queryParams['start_date'] = $this->startDate;
        }
        if ($this->endDate !== null) {
            $queryParams['end_date'] = $this->endDate;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/invoice/apply_order/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\InvoiceApplyOrderListV30Response::class);

        return $result['model'];
    }
}
