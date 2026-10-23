<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_daily_stat_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 资金共享-查询共享钱包日流水信息，一般每天8点会出来前一天的数据，如果当天存在数据延迟可往后再尝试。
 */
class ApiOpenApiV30SharedWalletDailyStatGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID，对于巨量AD、千川、本地推是广告主ID，对于代理商是代理商ID */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    /** @var int 共享钱包id */
    private ?int $sharedWalletId = null;
    /** @var string 开始时间，格式YYYY-MM-DD，默认为当前年份的1月1日 */
    private ?string $startDate = null;
    /** @var string 结束时间，格式YYYY-MM-DD，默认为今天，起止时间间隔不能超过一年。 */
    private ?string $endDate = null;
    /** @var int 页码；默认为1；注意：page*page_size不可大于10000 */
    private ?int $page = null;
    /** @var int 页面大小；默认为10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SharedWalletDailyStatGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户ID，对于巨量AD、千川、本地推是广告主ID，对于代理商是代理商ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 共享钱包id
     */
    public function sharedWalletId(int $sharedWalletId): self
    {
        $this->sharedWalletId = $sharedWalletId;
        return $this;
    }

    /**
     * 开始时间，格式YYYY-MM-DD，默认为当前年份的1月1日
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 结束时间，格式YYYY-MM-DD，默认为今天，起止时间间隔不能超过一年。
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 页码；默认为1；注意：page*page_size不可大于10000
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小；默认为10
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
     * 资金共享-查询共享钱包日流水信息，一般每天8点会出来前一天的数据，如果当天存在数据延迟可往后再尝试。
     */
    public function execute(): \Oceanengine\Models\SharedWalletDailyStatGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->sharedWalletId === null) {
            throw new \InvalidArgumentException('sharedWalletId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['shared_wallet_id'] = $this->sharedWalletId;
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
        $url = '/open_api/v3.0/shared_wallet/daily_stat/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SharedWalletDailyStatGetV30Response::class);

        return $result['model'];
    }
}
