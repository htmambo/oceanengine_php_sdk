<?php

/**
 * 本文件由 go2php 生成，源: api_report_rta_cus_exp_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取穿山甲的广告主分流的联合实验数据
 */
class ApiOpenApi2ReportRtaCusExpGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int rta客户接口id */
    private ?int $rtaInterfaceId = null;
    /** @var int rta_id */
    private ?int $rtaId = null;
    /** @var string rta反向联合实验id */
    private ?string $rtaVid = null;
    /** @var string 开始时间，天级别（格式20240101），月份和日期必须为两位数 */
    private ?string $startTime = null;
    /** @var string 结束时间，天级别（格式20240101），月份和日期必须为两位数 */
    private ?string $endTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportRtaCusExpGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * rta客户接口id
     */
    public function rtaInterfaceId(int $rtaInterfaceId): self
    {
        $this->rtaInterfaceId = $rtaInterfaceId;
        return $this;
    }

    /**
     * rta_id
     */
    public function rtaId(int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    /**
     * rta反向联合实验id
     */
    public function rtaVid(string $rtaVid): self
    {
        $this->rtaVid = $rtaVid;
        return $this;
    }

    /**
     * 开始时间，天级别（格式20240101），月份和日期必须为两位数
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 结束时间，天级别（格式20240101），月份和日期必须为两位数
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
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
     * 获取穿山甲的广告主分流的联合实验数据
     */
    public function execute(): \Oceanengine\Models\ReportRtaCusExpGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->rtaInterfaceId === null) {
            throw new \InvalidArgumentException('rtaInterfaceId is required and must be specified');
        }
        if ($this->rtaId === null) {
            throw new \InvalidArgumentException('rtaId is required and must be specified');
        }
        if ($this->rtaVid === null) {
            throw new \InvalidArgumentException('rtaVid is required and must be specified');
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
        $queryParams['rta_interface_id'] = $this->rtaInterfaceId;
        $queryParams['rta_id'] = $this->rtaId;
        $queryParams['rta_vid'] = $this->rtaVid;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/report/rta_cus_exp/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportRtaCusExpGetV2Response::class);

        return $result['model'];
    }
}
