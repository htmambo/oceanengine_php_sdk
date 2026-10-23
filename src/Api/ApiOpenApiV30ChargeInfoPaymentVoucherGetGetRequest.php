<?php

/**
 * 本文件由 go2php 生成，源: api_charge_info_payment_voucher_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据打款凭证查询充值信息
 */
class ApiOpenApiV30ChargeInfoPaymentVoucherGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 付款方名称 */
    private ?string $payerName = null;
    /** @var string 付款方账号 */
    private ?string $payerAccountNo = null;
    /** @var string 收款方名称 */
    private ?string $receiverName = null;
    /** @var string 收款方账号 */
    private ?string $receiverAccountNo = null;
    /** @var string 付款日期，格式：yyyy-MM-dd */
    private ?string $payDate = null;
    /** @var int 付款金额，单位：分 */
    private ?int $payAmount = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ChargeInfoPaymentVoucherGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 付款方名称
     */
    public function payerName(string $payerName): self
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * 付款方账号
     */
    public function payerAccountNo(string $payerAccountNo): self
    {
        $this->payerAccountNo = $payerAccountNo;
        return $this;
    }

    /**
     * 收款方名称
     */
    public function receiverName(string $receiverName): self
    {
        $this->receiverName = $receiverName;
        return $this;
    }

    /**
     * 收款方账号
     */
    public function receiverAccountNo(string $receiverAccountNo): self
    {
        $this->receiverAccountNo = $receiverAccountNo;
        return $this;
    }

    /**
     * 付款日期，格式：yyyy-MM-dd
     */
    public function payDate(string $payDate): self
    {
        $this->payDate = $payDate;
        return $this;
    }

    /**
     * 付款金额，单位：分
     */
    public function payAmount(int $payAmount): self
    {
        $this->payAmount = $payAmount;
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
     * 根据打款凭证查询充值信息
     */
    public function execute(): \Oceanengine\Models\ChargeInfoPaymentVoucherGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->payerName === null) {
            throw new \InvalidArgumentException('payerName is required and must be specified');
        }
        if ($this->payerAccountNo === null) {
            throw new \InvalidArgumentException('payerAccountNo is required and must be specified');
        }
        if ($this->receiverName === null) {
            throw new \InvalidArgumentException('receiverName is required and must be specified');
        }
        if ($this->receiverAccountNo === null) {
            throw new \InvalidArgumentException('receiverAccountNo is required and must be specified');
        }
        if ($this->payDate === null) {
            throw new \InvalidArgumentException('payDate is required and must be specified');
        }
        if ($this->payAmount === null) {
            throw new \InvalidArgumentException('payAmount is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['payer_name'] = $this->payerName;
        $queryParams['payer_account_no'] = $this->payerAccountNo;
        $queryParams['receiver_name'] = $this->receiverName;
        $queryParams['receiver_account_no'] = $this->receiverAccountNo;
        $queryParams['pay_date'] = $this->payDate;
        $queryParams['pay_amount'] = $this->payAmount;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/charge_info_payment_voucher/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ChargeInfoPaymentVoucherGetV30Response::class);

        return $result['model'];
    }
}
