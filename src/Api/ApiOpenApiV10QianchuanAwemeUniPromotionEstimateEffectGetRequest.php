<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_estimate_effect_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取随心推全域投放效果预估
 */
class ApiOpenApiV10QianchuanAwemeUniPromotionEstimateEffectGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 推广对象的抖音id */
    private ?int $awemeId = null;
    /** @var int 商品id */
    private ?int $productId = null;
    /** @var float 投放时长，单位小时，允许值： 2、6、12、24、48、72、96、120、144、168 */
    private ?float $deliveryTime = null;
    /** @var int 投放金额，单位元 */
    private ?int $amount = null;
    /** @var int 追加的预算，单位元 */
    private ?int $addAmount = null;
    /** @var float 延长的投放时间，单位小时，允许值： 0、24、48、72、96、120、144、168 */
    private ?float $addDeliveryTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeUniPromotionEstimateEffectV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 推广对象的抖音id
     */
    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 商品id
     */
    public function productId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 投放时长，单位小时，允许值： 2、6、12、24、48、72、96、120、144、168
     */
    public function deliveryTime(float $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * 投放金额，单位元
     */
    public function amount(int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * 追加的预算，单位元
     */
    public function addAmount(int $addAmount): self
    {
        $this->addAmount = $addAmount;
        return $this;
    }

    /**
     * 延长的投放时间，单位小时，允许值： 0、24、48、72、96、120、144、168
     */
    public function addDeliveryTime(float $addDeliveryTime): self
    {
        $this->addDeliveryTime = $addDeliveryTime;
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
     * 获取随心推全域投放效果预估
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeUniPromotionEstimateEffectV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->awemeId < 1) {
            throw new \InvalidArgumentException('awemeId must be greater than 1');
        }
        if ($this->productId === null) {
            throw new \InvalidArgumentException('productId is required and must be specified');
        }
        if ($this->productId < 1) {
            throw new \InvalidArgumentException('productId must be greater than 1');
        }
        if ($this->deliveryTime === null) {
            throw new \InvalidArgumentException('deliveryTime is required and must be specified');
        }
        if ($this->deliveryTime < 0) {
            throw new \InvalidArgumentException('deliveryTime must be greater than 0');
        }
        if ($this->amount === null) {
            throw new \InvalidArgumentException('amount is required and must be specified');
        }
        if ($this->amount < 1) {
            throw new \InvalidArgumentException('amount must be greater than 1');
        }
        if ($this->amount > 5000000) {
            throw new \InvalidArgumentException('amount must be less than 5000000');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        $queryParams['product_id'] = $this->productId;
        $queryParams['delivery_time'] = $this->deliveryTime;
        $queryParams['amount'] = $this->amount;
        if ($this->addAmount !== null) {
            $queryParams['add_amount'] = $this->addAmount;
        }
        if ($this->addDeliveryTime !== null) {
            $queryParams['add_delivery_time'] = $this->addDeliveryTime;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/uni_promotion/estimate/effect/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeUniPromotionEstimateEffectV10Response::class);

        return $result['model'];
    }
}
