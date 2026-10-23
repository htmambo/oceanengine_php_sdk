<?php

/**
 * 本文件由 go2php 生成，源: api_report_joint_growth_cus_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 联合出价广告加价商家消耗数据（有主体范围协议）
 */
class ApiOpenApiV30ReportJointGrowthCusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID （用增账号ID） */
    private ?int $advertiserId = null;
    /** @var int RTA策略ID */
    private ?int $rtaId = null;
    /** @var string 开始时间，格式为：yyyy-MM-dd hh:mm:ss */
    private ?string $startTime = null;
    /** @var string 结束时间，格式为：yyyy-MM-dd hh:mm:ss */
    private ?string $endTime = null;
    /** @var int 页码，默认值1 */
    private ?int $page = null;
    /** @var int 页面大小，默认值20 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportJointGrowthCusGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID （用增账号ID）
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * RTA策略ID
     */
    public function rtaId(int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    /**
     * 开始时间，格式为：yyyy-MM-dd hh:mm:ss
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 结束时间，格式为：yyyy-MM-dd hh:mm:ss
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 页码，默认值1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值20
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
     * 联合出价广告加价商家消耗数据（有主体范围协议）
     */
    public function execute(): \Oceanengine\Models\ReportJointGrowthCusGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->rtaId === null) {
            throw new \InvalidArgumentException('rtaId is required and must be specified');
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
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['rta_id'] = $this->rtaId;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/joint_growth_cus/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportJointGrowthCusGetV30Response::class);

        return $result['model'];
    }
}
