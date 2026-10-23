<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_suggest_delivery_time_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取建议投放时长
 */
class ApiOpenApiV10QianchuanAwemeOrderSuggestDeliveryTimeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 需要追加预算的订单id */
    private ?int $orderId = null;
    /** @var int 追加的预算 */
    private ?int $addAmount = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeOrderSuggestDeliveryTimeGetV10ApiService $service)
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
     * 需要追加预算的订单id
     */
    public function orderId(int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 追加的预算
     */
    public function addAmount(int $addAmount): self
    {
        $this->addAmount = $addAmount;
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
     * 获取建议投放时长
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeOrderSuggestDeliveryTimeGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->orderId === null) {
            throw new \InvalidArgumentException('orderId is required and must be specified');
        }
        if ($this->addAmount === null) {
            throw new \InvalidArgumentException('addAmount is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['order_id'] = $this->orderId;
        $queryParams['add_amount'] = $this->addAmount;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/order/suggest/delivery_time/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeOrderSuggestDeliveryTimeGetV10Response::class);

        return $result['model'];
    }
}
