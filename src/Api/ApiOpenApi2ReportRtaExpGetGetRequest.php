<?php

/**
 * 本文件由 go2php 生成，源: api_report_rta_exp_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * ## 功能
 * 获取穿山甲联合实验的效果数据
 */
class ApiOpenApi2ReportRtaExpGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int RTA ID */
    private ?int $rtaId = null;
    /** @var string 开始时间，格式YYYYMMDD，示例：20220701 */
    private ?string $startDate = null;
    /** @var string 结束时间，格式YYYYMMDD，示例：20220701 */
    private ?string $endDate = null;
    /** @var int 联合实验策略。允许值：0 代表基线策略 ，传入1、2、3、4、5、6、7、8、9 */
    private ?int $strategy = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportRtaExpGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * RTA ID
     */
    public function rtaId(int $rtaId): self
    {
        $this->rtaId = $rtaId;
        return $this;
    }

    /**
     * 开始时间，格式YYYYMMDD，示例：20220701
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 结束时间，格式YYYYMMDD，示例：20220701
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 联合实验策略。允许值：0 代表基线策略 ，传入1、2、3、4、5、6、7、8、9
     */
    public function strategy(int $strategy): self
    {
        $this->strategy = $strategy;
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
     * ## 功能
     */
    public function execute(): \Oceanengine\Models\ReportRtaExpGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->rtaId === null) {
            throw new \InvalidArgumentException('rtaId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        if ($this->strategy === null) {
            throw new \InvalidArgumentException('strategy is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['rta_id'] = $this->rtaId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $queryParams['strategy'] = $this->strategy;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/report/rta_exp/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportRtaExpGetV2Response::class);

        return $result['model'];
    }
}
