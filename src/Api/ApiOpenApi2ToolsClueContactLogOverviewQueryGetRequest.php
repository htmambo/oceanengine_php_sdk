<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_contact_log_overview_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询话单概览报表数据
 */
class ApiOpenApi2ToolsClueContactLogOverviewQueryGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 查询开始时间。毫秒级unix时间戳。查询时间跨度不得超过一个月，只能查询近半年的数据。 */
    private ?int $startTime = null;
    /** @var int 查询结束时间。毫秒级unix时间戳。查询时间跨度不得超过一个月，只能查询近半年的数据。 */
    private ?int $endTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueContactLogOverviewQueryV2ApiService $service)
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
     * 查询开始时间。毫秒级unix时间戳。查询时间跨度不得超过一个月，只能查询近半年的数据。
     */
    public function startTime(int $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 查询结束时间。毫秒级unix时间戳。查询时间跨度不得超过一个月，只能查询近半年的数据。
     */
    public function endTime(int $endTime): self
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
     * 查询话单概览报表数据
     */
    public function execute(): \Oceanengine\Models\ToolsClueContactLogOverviewQueryV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
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
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/contact_log/overview/query/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueContactLogOverviewQueryV2Response::class);

        return $result['model'];
    }
}
