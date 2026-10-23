<?php

/**
 * 本文件由 go2php 生成，源: api_brand_policy_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询政策
 */
class ApiOpenApiV30BrandPolicyListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string 广告类别 */
    private ?string $classify = null;
    /** @var string 产品类型 */
    private ?string $proType = null;
    /** @var string 投放产品 */
    private ?string $adForm = null;
    /** @var string 投放位置（媒体端） */
    private ?string $appOrigin = null;
    /** @var string 计费类型 */
    private ?string $pricingType = null;
    /** @var string 优化目标 */
    private ?string $gdSendType = null;
    /** @var \Oceanengine\Models\BrandPolicyListV30DeliveryInfo 投放日期信息 */
    private ?\Oceanengine\Models\BrandPolicyListV30DeliveryInfo $deliveryInfo = null;
    /** @var string 招商订单编号 */
    private ?string $intentionNo = null;
    /** @var \Oceanengine\Models\BrandPolicyListV30AudienceInfo 定向 */
    private ?\Oceanengine\Models\BrandPolicyListV30AudienceInfo $audienceInfo = null;
    /** @var \Oceanengine\Models\BrandPolicyListV30FrequencyInfo 频控 */
    private ?\Oceanengine\Models\BrandPolicyListV30FrequencyInfo $frequencyInfo = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandPolicyListV30ApiService $service)
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
     * 广告类别
     */
    public function classify(string $classify): self
    {
        $this->classify = $classify;
        return $this;
    }

    /**
     * 产品类型
     */
    public function proType(string $proType): self
    {
        $this->proType = $proType;
        return $this;
    }

    /**
     * 投放产品
     */
    public function adForm(string $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

    /**
     * 投放位置（媒体端）
     */
    public function appOrigin(string $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * 计费类型
     */
    public function pricingType(string $pricingType): self
    {
        $this->pricingType = $pricingType;
        return $this;
    }

    /**
     * 优化目标
     */
    public function gdSendType(string $gdSendType): self
    {
        $this->gdSendType = $gdSendType;
        return $this;
    }

    /**
     * 投放日期信息
     */
    public function deliveryInfo(\Oceanengine\Models\BrandPolicyListV30DeliveryInfo $deliveryInfo): self
    {
        $this->deliveryInfo = $deliveryInfo;
        return $this;
    }

    /**
     * 招商订单编号
     */
    public function intentionNo(string $intentionNo): self
    {
        $this->intentionNo = $intentionNo;
        return $this;
    }

    /**
     * 定向
     */
    public function audienceInfo(\Oceanengine\Models\BrandPolicyListV30AudienceInfo $audienceInfo): self
    {
        $this->audienceInfo = $audienceInfo;
        return $this;
    }

    /**
     * 频控
     */
    public function frequencyInfo(\Oceanengine\Models\BrandPolicyListV30FrequencyInfo $frequencyInfo): self
    {
        $this->frequencyInfo = $frequencyInfo;
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
     * 查询政策
     */
    public function execute(): \Oceanengine\Models\BrandPolicyListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->classify === null) {
            throw new \InvalidArgumentException('classify is required and must be specified');
        }
        if ($this->proType === null) {
            throw new \InvalidArgumentException('proType is required and must be specified');
        }
        if ($this->adForm === null) {
            throw new \InvalidArgumentException('adForm is required and must be specified');
        }
        if ($this->appOrigin === null) {
            throw new \InvalidArgumentException('appOrigin is required and must be specified');
        }
        if ($this->pricingType === null) {
            throw new \InvalidArgumentException('pricingType is required and must be specified');
        }
        if ($this->gdSendType === null) {
            throw new \InvalidArgumentException('gdSendType is required and must be specified');
        }
        if ($this->deliveryInfo === null) {
            throw new \InvalidArgumentException('deliveryInfo is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['classify'] = $this->classify;
        if ($this->intentionNo !== null) {
            $queryParams['intention_no'] = $this->intentionNo;
        }
        $queryParams['pro_type'] = $this->proType;
        $queryParams['ad_form'] = $this->adForm;
        $queryParams['app_origin'] = $this->appOrigin;
        $queryParams['pricing_type'] = $this->pricingType;
        $queryParams['gd_send_type'] = $this->gdSendType;
        if ($this->audienceInfo !== null) {
            $__encoded0 = json_encode($this->audienceInfo);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: audienceInfo');
            }
            $queryParams['audience_info'] = $__encoded0;
        }
        if ($this->frequencyInfo !== null) {
            $__encoded1 = json_encode($this->frequencyInfo);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: frequencyInfo');
            }
            $queryParams['frequency_info'] = $__encoded1;
        }
        $__encoded2 = json_encode($this->deliveryInfo);
            if ($__encoded2 === false) {
                throw new \RuntimeException('Failed to encode parameter: deliveryInfo');
            }
            $queryParams['delivery_info'] = $__encoded2;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/policy/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandPolicyListV30Response::class);

        return $result['model'];
    }
}
