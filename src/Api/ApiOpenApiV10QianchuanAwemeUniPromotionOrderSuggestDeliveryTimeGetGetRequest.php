<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_order_suggest_delivery_time_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取随心推全域续费建议延长时长
 */
class ApiOpenApiV10QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $orderId = null;
    private ?int $addAmount = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function orderId(int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

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
     * 获取随心推全域续费建议延长时长
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->orderId === null) {
            throw new \InvalidArgumentException('orderId is required and must be specified');
        }
        if ($this->addAmount === null) {
            throw new \InvalidArgumentException('addAmount is required and must be specified');
        }
        if ($this->addAmount < 100) {
            throw new \InvalidArgumentException('addAmount must be greater than 100');
        }
        if ($this->addAmount > 10000) {
            throw new \InvalidArgumentException('addAmount must be less than 10000');
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
        $url = '/open_api/v1.0/qianchuan/aweme/uni_promotion/order/suggest/delivery_time/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetV10Response::class);

        return $result['model'];
    }
}
