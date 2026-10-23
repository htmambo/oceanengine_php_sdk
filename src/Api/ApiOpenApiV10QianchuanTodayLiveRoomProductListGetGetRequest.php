<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_today_live_room_product_list_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取直播间商品列表
 */
class ApiOpenApiV10QianchuanTodayLiveRoomProductListGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $roomId = null;
    private ?array $fields = null;
    private ?string $explainStatus = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanTodayLiveRoomProductListGetV10ApiService $service)
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

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function explainStatus(string $explainStatus): self
    {
        $this->explainStatus = $explainStatus;
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
     * 获取直播间商品列表
     */
    public function execute(): \Oceanengine\Models\QianchuanTodayLiveRoomProductListGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->roomId === null) {
            throw new \InvalidArgumentException('roomId is required and must be specified');
        }
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['room_id'] = $this->roomId;
        $queryParams['fields'] = $this->fields;
        if ($this->explainStatus !== null) {
            $queryParams['explain_status'] = $this->explainStatus;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/today_live/room/product_list/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanTodayLiveRoomProductListGetV10Response::class);

        return $result['model'];
    }
}
