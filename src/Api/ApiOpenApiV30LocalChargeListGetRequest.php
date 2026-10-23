<?php

/**
 * 本文件由 go2php 生成，源: api_local_charge_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询账户充值记录
 */
class ApiOpenApiV30LocalChargeListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 本地推广告账户ID */
    private ?int $localAccountId = null;
    /** @var string 充值起始时间，闭区间，格式：yyyy-MM-dd HH:mm:ss */
    private ?string $startTime = null;
    /** @var string 充值起始时间，开区间，格式：yyyy-MM-dd HH:mm:ss */
    private ?string $endTime = null;
    /** @var string[] 充值方式，多选 */
    private ?array $chargeMethods = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalChargeListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 本地推广告账户ID
     */
    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 充值起始时间，闭区间，格式：yyyy-MM-dd HH:mm:ss
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 充值起始时间，开区间，格式：yyyy-MM-dd HH:mm:ss
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 充值方式，多选
     */
    public function chargeMethods(array $chargeMethods): self
    {
        $this->chargeMethods = $chargeMethods;
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
     * 查询账户充值记录
     */
    public function execute(): \Oceanengine\Models\LocalChargeListV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        if ($this->chargeMethods !== null) {
            $queryParams['charge_methods'] = $this->chargeMethods;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/charge/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalChargeListV30Response::class);

        return $result['model'];
    }
}
