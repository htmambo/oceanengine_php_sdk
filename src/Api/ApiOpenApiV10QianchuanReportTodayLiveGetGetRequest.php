<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_today_live_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询千川广告主（对应账户类型为`QIANCHUAN`）下直播间维度聚合数据，基于全部流量的情况（包括自然+广告），分析抖音号及直播间在竞价推广中的整体数据表现。直客账户支持查看官方抖音号下同主体全部广告账户的数据表现。支持指标包含消耗，点击等（可通过get_tool_response_field_desc工具查询应答内容）
 */
class ApiOpenApiV10QianchuanReportTodayLiveGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川业务账户ID，对应账户类型为&#x60;QIANCHUAN&#x60; */
    private ?int $advertiserId = null;
    /** @var int 抖音号ID，可通过获取千川账户下可投广抖音号查询 */
    private ?int $awemeId = null;
    /** @var string 查询直播开播时间起始范围 格式为&#x60;yyyy-mm-dd hh:mm:ss&#x60; ，例如：2021-04-05 00:00:00 开播时间在start_time和end_time筛选时间区间内的直播间，会被统计 */
    private ?string $startTime = null;
    /** @var string 查询直播开播时间结束范围 格式为&#x60;yyyy-mm-dd hh:mm:ss&#x60; ，例如：2021-04-05 00:00:00 */
    private ?string $endTime = null;
    /** @var string[] 需要查询的消耗指标，具体可参考返回值 */
    private ?array $fields = null;
    /** @var string 需要查询的广告账户维度，允许值： -  &#x60;QUALIFICATION&#x60; 同主体账户，仅直客账户支持，查看官方抖音号下同主体全部广告账户的数据表现 - &#x60;CURRENT&#x60; 当前广告账户（默认值） */
    private ?string $statsAuthority = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportTodayLiveGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川业务账户ID，对应账户类型为&#x60;QIANCHUAN&#x60;
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 抖音号ID，可通过获取千川账户下可投广抖音号查询
     */
    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 查询直播开播时间起始范围 格式为&#x60;yyyy-mm-dd hh:mm:ss&#x60; ，例如：2021-04-05 00:00:00 开播时间在start_time和end_time筛选时间区间内的直播间，会被统计
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 查询直播开播时间结束范围 格式为&#x60;yyyy-mm-dd hh:mm:ss&#x60; ，例如：2021-04-05 00:00:00
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 需要查询的消耗指标，具体可参考返回值
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 需要查询的广告账户维度，允许值： -  &#x60;QUALIFICATION&#x60; 同主体账户，仅直客账户支持，查看官方抖音号下同主体全部广告账户的数据表现 - &#x60;CURRENT&#x60; 当前广告账户（默认值）
     */
    public function statsAuthority(string $statsAuthority): self
    {
        $this->statsAuthority = $statsAuthority;
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
     * 查询千川广告主（对应账户类型为`QIANCHUAN`）下直播间维度聚合数据，基于全部流量的情况（包括自然+广告），分析抖音号及直播间在竞价推广中的整体数据表现。直客账户支持查看官方抖音号下同主体全部广告账户的数据表现。支持指标包含消耗，点击等（可通过get_tool_response_field_desc工具查询应答内容）
     */
    public function execute(): \Oceanengine\Models\QianchuanReportTodayLiveGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        $queryParams['fields'] = $this->fields;
        if ($this->statsAuthority !== null) {
            $queryParams['stats_authority'] = $this->statsAuthority;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/today_live/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportTodayLiveGetV10Response::class);

        return $result['model'];
    }
}
