<?php

/**
 * 本文件由 go2php 生成，源: api_wallet_remittance_code_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 钱包账户查询汇款码列表
 */
class ApiOpenApiV30WalletRemittanceCodeListGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 组织ID */
    private ?int $accountId = null;
    /** @var int 充值对象ID */
    private ?int $chargeTargetId = null;
    /** @var string 充值对象类型 */
    private ?string $chargeTargetType = null;
    /** @var string[] 汇款码列表 */
    private ?array $remittanceCodeList = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(WalletRemittanceCodeListGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 组织ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 充值对象ID
     */
    public function chargeTargetId(int $chargeTargetId): self
    {
        $this->chargeTargetId = $chargeTargetId;
        return $this;
    }

    /**
     * 充值对象类型
     */
    public function chargeTargetType(string $chargeTargetType): self
    {
        $this->chargeTargetType = $chargeTargetType;
        return $this;
    }

    /**
     * 汇款码列表
     */
    public function remittanceCodeList(array $remittanceCodeList): self
    {
        $this->remittanceCodeList = $remittanceCodeList;
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
     * 页面大小
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
     * 钱包账户查询汇款码列表
     */
    public function execute(): \Oceanengine\Models\WalletRemittanceCodeListGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->chargeTargetId === null) {
            throw new \InvalidArgumentException('chargeTargetId is required and must be specified');
        }
        if ($this->chargeTargetType === null) {
            throw new \InvalidArgumentException('chargeTargetType is required and must be specified');
        }
        if ($this->remittanceCodeList === null) {
            throw new \InvalidArgumentException('remittanceCodeList is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['charge_target_id'] = $this->chargeTargetId;
        $queryParams['charge_target_type'] = $this->chargeTargetType;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $queryParams['remittance_code_list'] = $this->remittanceCodeList;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/wallet/remittance_code/list/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\WalletRemittanceCodeListGetV30Response::class);

        return $result['model'];
    }
}
