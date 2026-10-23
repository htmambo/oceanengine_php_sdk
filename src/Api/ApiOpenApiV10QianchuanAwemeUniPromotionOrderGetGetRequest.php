<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_order_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取随心推全域订单列表
 */
class ApiOpenApiV10QianchuanAwemeUniPromotionOrderGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川广告主id */
    private ?int $advertiserId = null;
    private ?string $marketingGoal = null;
    private ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10Filtering $filtering = null;
    private ?string $orderField = null;
    private ?int $cursor = null;
    private ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10Count $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeUniPromotionOrderGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function filtering(\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    public function count(\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10Count $count): self
    {
        $this->count = $count;
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
     * 获取随心推全域订单列表
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $__encoded1 = json_encode($this->count);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: count');
            }
            $queryParams['count'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/uni_promotion/order/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10Response::class);

        return $result['model'];
    }
}
