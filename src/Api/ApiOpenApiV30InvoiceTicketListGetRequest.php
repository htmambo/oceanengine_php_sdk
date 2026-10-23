<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_ticket_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本接口为申请开票第一步，拉取发票账单，填写账单开票金额
 * 1. SVIP使用根组织账户，拉取组织下所有账户的账单
 * 2. 直客使用账户访问，拉取账户下账单
 */
class ApiOpenApiV30InvoiceTicketListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 投放账户，最多支持100个 */
    private ?array $accountIds = null;
    /** @var string 业务线 */
    private ?string $platform = null;
    /** @var string 账单起始周期，格式yyyyMM，如202601；默认限制查询202601之后的账单 */
    private ?string $startMonth = null;
    /** @var string 账单截止周期，格式yyyyMM，如202602 */
    private ?string $endMonth = null;
    /** @var string[] 账单状态 */
    private ?array $ticketStatuses = null;
    /** @var string 分页ID */
    private ?string $scrollId = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(InvoiceTicketListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 投放账户，最多支持100个
     */
    public function accountIds(array $accountIds): self
    {
        $this->accountIds = $accountIds;
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
     * 账单起始周期，格式yyyyMM，如202601；默认限制查询202601之后的账单
     */
    public function startMonth(string $startMonth): self
    {
        $this->startMonth = $startMonth;
        return $this;
    }

    /**
     * 账单截止周期，格式yyyyMM，如202602
     */
    public function endMonth(string $endMonth): self
    {
        $this->endMonth = $endMonth;
        return $this;
    }

    /**
     * 账单状态
     */
    public function ticketStatuses(array $ticketStatuses): self
    {
        $this->ticketStatuses = $ticketStatuses;
        return $this;
    }

    /**
     * 分页ID
     */
    public function scrollId(string $scrollId): self
    {
        $this->scrollId = $scrollId;
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
     * 本接口为申请开票第一步，拉取发票账单，填写账单开票金额
     */
    public function execute(): \Oceanengine\Models\InvoiceTicketListV30Response
    {
        if ($this->accountIds === null) {
            throw new \InvalidArgumentException('accountIds is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_ids'] = $this->accountIds;
        $queryParams['platform'] = $this->platform;
        if ($this->startMonth !== null) {
            $queryParams['start_month'] = $this->startMonth;
        }
        if ($this->endMonth !== null) {
            $queryParams['end_month'] = $this->endMonth;
        }
        if ($this->ticketStatuses !== null) {
            $queryParams['ticket_statuses'] = $this->ticketStatuses;
        }
        if ($this->scrollId !== null) {
            $queryParams['scroll_id'] = $this->scrollId;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/invoice/ticket/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\InvoiceTicketListV30Response::class);

        return $result['model'];
    }
}
