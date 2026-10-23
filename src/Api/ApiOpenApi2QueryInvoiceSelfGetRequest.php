<?php

/**
 * 本文件由 go2php 生成，源: api_query_invoice_self_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取开票列表
 */
class ApiOpenApi2QueryInvoiceSelfGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var int 每页数量 最多100 */
    private ?int $pageSize = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var string[] 结算单编号 */
    private ?array $statementSerials = null;
    /** @var string[] 项目编号 */
    private ?array $projectSerials = null;
    /** @var int[] 开票状态 CANCELLED(0, \&quot;已作废\&quot;),NO_INVOICED(1, \&quot;未开票\&quot;),PART_INVOICED(2, \&quot;部分开票\&quot;),INVOICED(3, \&quot;已开票\&quot;),NO_NEED_INVOICE(4, \&quot;无需开票\&quot;); */
    private ?array $invoiceStatuses = null;
    /** @var string[] 开票单编号 */
    private ?array $invoiceSerialList = null;
    /** @var string 合同编号 */
    private ?string $contractSerial = null;
    /** @var string 提交审批时间范围开始时间，格式：%Y-%m-%d %H:%M:%S */
    private ?string $submitStartTime = null;
    /** @var string 提交审批时间范围结束时间，格式：%Y-%m-%d %H:%M:%S */
    private ?string $submitEndTime = null;
    /** @var string 实际开票时间范围开始时间，格式：%Y-%m-%d */
    private ?string $invoiceStartDate = null;
    /** @var string 实际开票时间范围结束时间，格式：%Y-%m-%d */
    private ?string $invoiceEndDate = null;
    /** @var string 发票类型 */
    private ?string $invoiceType = null;
    /** @var string 是否差额开票 */
    private ?string $differenceInvoice = null;
    /** @var \Oceanengine\Models\QueryInvoiceSelfV2RevertStatusList[] 红冲状态 */
    private ?array $revertStatusList = null;
    /** @var string 开票平台 */
    private ?string $platform = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QueryInvoiceSelfV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 每页数量 最多100
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 结算单编号
     */
    public function statementSerials(array $statementSerials): self
    {
        $this->statementSerials = $statementSerials;
        return $this;
    }

    /**
     * 项目编号
     */
    public function projectSerials(array $projectSerials): self
    {
        $this->projectSerials = $projectSerials;
        return $this;
    }

    /**
     * 开票状态 CANCELLED(0, \&quot;已作废\&quot;),NO_INVOICED(1, \&quot;未开票\&quot;),PART_INVOICED(2, \&quot;部分开票\&quot;),INVOICED(3, \&quot;已开票\&quot;),NO_NEED_INVOICE(4, \&quot;无需开票\&quot;);
     */
    public function invoiceStatuses(array $invoiceStatuses): self
    {
        $this->invoiceStatuses = $invoiceStatuses;
        return $this;
    }

    /**
     * 开票单编号
     */
    public function invoiceSerialList(array $invoiceSerialList): self
    {
        $this->invoiceSerialList = $invoiceSerialList;
        return $this;
    }

    /**
     * 合同编号
     */
    public function contractSerial(string $contractSerial): self
    {
        $this->contractSerial = $contractSerial;
        return $this;
    }

    /**
     * 提交审批时间范围开始时间，格式：%Y-%m-%d %H:%M:%S
     */
    public function submitStartTime(string $submitStartTime): self
    {
        $this->submitStartTime = $submitStartTime;
        return $this;
    }

    /**
     * 提交审批时间范围结束时间，格式：%Y-%m-%d %H:%M:%S
     */
    public function submitEndTime(string $submitEndTime): self
    {
        $this->submitEndTime = $submitEndTime;
        return $this;
    }

    /**
     * 实际开票时间范围开始时间，格式：%Y-%m-%d
     */
    public function invoiceStartDate(string $invoiceStartDate): self
    {
        $this->invoiceStartDate = $invoiceStartDate;
        return $this;
    }

    /**
     * 实际开票时间范围结束时间，格式：%Y-%m-%d
     */
    public function invoiceEndDate(string $invoiceEndDate): self
    {
        $this->invoiceEndDate = $invoiceEndDate;
        return $this;
    }

    /**
     * 发票类型
     */
    public function invoiceType(string $invoiceType): self
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * 是否差额开票
     */
    public function differenceInvoice(string $differenceInvoice): self
    {
        $this->differenceInvoice = $differenceInvoice;
        return $this;
    }

    /**
     * 红冲状态
     */
    public function revertStatusList(array $revertStatusList): self
    {
        $this->revertStatusList = $revertStatusList;
        return $this;
    }

    /**
     * 开票平台
     */
    public function platform(string $platform): self
    {
        $this->platform = $platform;
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
     * 获取开票列表
     */
    public function execute(): \Oceanengine\Models\QueryInvoiceSelfV2Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->statementSerials !== null) {
            $queryParams['statement_serials'] = $this->statementSerials;
        }
        if ($this->projectSerials !== null) {
            $queryParams['project_serials'] = $this->projectSerials;
        }
        if ($this->invoiceStatuses !== null) {
            $queryParams['invoice_statuses'] = $this->invoiceStatuses;
        }
        if ($this->invoiceSerialList !== null) {
            $queryParams['invoice_serial_list'] = $this->invoiceSerialList;
        }
        if ($this->contractSerial !== null) {
            $queryParams['contract_serial'] = $this->contractSerial;
        }
        if ($this->submitStartTime !== null) {
            $queryParams['submit_start_time'] = $this->submitStartTime;
        }
        if ($this->submitEndTime !== null) {
            $queryParams['submit_end_time'] = $this->submitEndTime;
        }
        if ($this->invoiceStartDate !== null) {
            $queryParams['invoice_start_date'] = $this->invoiceStartDate;
        }
        if ($this->invoiceEndDate !== null) {
            $queryParams['invoice_end_date'] = $this->invoiceEndDate;
        }
        if ($this->invoiceType !== null) {
            $queryParams['invoice_type'] = $this->invoiceType;
        }
        if ($this->differenceInvoice !== null) {
            $queryParams['difference_invoice'] = $this->differenceInvoice;
        }
        if ($this->revertStatusList !== null) {
            $__encoded0 = json_encode($this->revertStatusList);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: revertStatusList');
            }
            $queryParams['revert_status_list'] = $__encoded0;
        }
        if ($this->platform !== null) {
            $queryParams['platform'] = $this->platform;
        }
        $queryParams['page_size'] = $this->pageSize;
        $queryParams['page'] = $this->page;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/query/invoice/self/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QueryInvoiceSelfV2Response::class);

        return $result['model'];
    }
}
