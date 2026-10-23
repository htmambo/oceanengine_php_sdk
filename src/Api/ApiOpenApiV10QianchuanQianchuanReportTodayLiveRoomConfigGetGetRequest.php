<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_qianchuan_report_today_live_room_config_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取直播大屏可用指标和维度
 */
class ApiOpenApiV10QianchuanQianchuanReportTodayLiveRoomConfigGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $dataTopics = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanQianchuanReportTodayLiveRoomConfigGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function dataTopics(array $dataTopics): self
    {
        $this->dataTopics = $dataTopics;
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
     * 获取直播大屏可用指标和维度
     */
    public function execute(): \Oceanengine\Models\QianchuanQianchuanReportTodayLiveRoomConfigGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->dataTopics === null) {
            throw new \InvalidArgumentException('dataTopics is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['data_topics'] = $this->dataTopics;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/qianchuan/report/today_live/room/config/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanQianchuanReportTodayLiveRoomConfigGetV10Response::class);

        return $result['model'];
    }
}
