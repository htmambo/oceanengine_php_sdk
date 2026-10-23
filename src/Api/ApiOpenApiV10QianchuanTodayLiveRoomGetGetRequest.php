<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_today_live_room_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取直播列表
 */
class ApiOpenApiV10QianchuanTodayLiveRoomGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $awemeId = null;
    /** @var string 开播日期，格式 2021-04-05 */
    private ?string $dateTime = null;
    private ?array $fields = null;
    private ?string $roomStatus = null;
    private ?string $adStatus = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanTodayLiveRoomGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 开播日期，格式 2021-04-05
     */
    public function dateTime(string $dateTime): self
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function roomStatus(string $roomStatus): self
    {
        $this->roomStatus = $roomStatus;
        return $this;
    }

    public function adStatus(string $adStatus): self
    {
        $this->adStatus = $adStatus;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

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
     * 获取直播列表
     */
    public function execute(): \Oceanengine\Models\QianchuanTodayLiveRoomGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->dateTime === null) {
            throw new \InvalidArgumentException('dateTime is required and must be specified');
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
        $queryParams['date_time'] = $this->dateTime;
        if ($this->roomStatus !== null) {
            $queryParams['room_status'] = $this->roomStatus;
        }
        if ($this->adStatus !== null) {
            $queryParams['ad_status'] = $this->adStatus;
        }
        $queryParams['fields'] = $this->fields;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/today_live/room/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanTodayLiveRoomGetV10Response::class);

        return $result['model'];
    }
}
