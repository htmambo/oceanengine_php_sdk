<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_today_live_room_flow_performance_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取直播间流量表现
 */
class ApiOpenApiV10QianchuanTodayLiveRoomFlowPerformanceGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $roomId = null;
    private ?string $flowSource = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanTodayLiveRoomFlowPerformanceGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function roomId(int $roomId): self
    {
        $this->roomId = $roomId;
        return $this;
    }

    public function flowSource(string $flowSource): self
    {
        $this->flowSource = $flowSource;
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
     * 获取直播间流量表现
     */
    public function execute(): \Oceanengine\Models\QianchuanTodayLiveRoomFlowPerformanceGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->roomId === null) {
            throw new \InvalidArgumentException('roomId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['room_id'] = $this->roomId;
        if ($this->flowSource !== null) {
            $queryParams['flow_source'] = $this->flowSource;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/today_live/room/flow_performance/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanTodayLiveRoomFlowPerformanceGetV10Response::class);

        return $result['model'];
    }
}
