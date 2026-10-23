<?php

/**
 * 本文件由 go2php 生成，源: api_brand_tool_query_publish_price_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 询价
 */
class ApiOpenApiV30BrandToolQueryPublishPriceGetRequest
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
    /** @var string 政策编号 */
    private ?string $policyNo = null;
    /** @var \Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfo 投放日期信息 */
    private ?\Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfo $deliveryInfo = null;
    /** @var string 招商订单编号 */
    private ?string $intentionNo = null;
    /** @var \Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfo 定向 */
    private ?\Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfo $audienceInfo = null;
    /** @var \Oceanengine\Models\BrandToolQueryPublishPriceV30FrequencyInfo 频控 */
    private ?\Oceanengine\Models\BrandToolQueryPublishPriceV30FrequencyInfo $frequencyInfo = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandToolQueryPublishPriceV30ApiService $service)
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
     * 政策编号
     */
    public function policyNo(string $policyNo): self
    {
        $this->policyNo = $policyNo;
        return $this;
    }

    /**
     * 投放日期信息
     */
    public function deliveryInfo(\Oceanengine\Models\BrandToolQueryPublishPriceV30DeliveryInfo $deliveryInfo): self
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
    public function audienceInfo(\Oceanengine\Models\BrandToolQueryPublishPriceV30AudienceInfo $audienceInfo): self
    {
        $this->audienceInfo = $audienceInfo;
        return $this;
    }

    /**
     * 频控
     */
    public function frequencyInfo(\Oceanengine\Models\BrandToolQueryPublishPriceV30FrequencyInfo $frequencyInfo): self
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
     * 询价
     */
    public function execute(): \Oceanengine\Models\BrandToolQueryPublishPriceV30Response
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
        if ($this->policyNo === null) {
            throw new \InvalidArgumentException('policyNo is required and must be specified');
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
        $queryParams['policy_no'] = $this->policyNo;
        $__encoded2 = json_encode($this->deliveryInfo);
            if ($__encoded2 === false) {
                throw new \RuntimeException('Failed to encode parameter: deliveryInfo');
            }
            $queryParams['delivery_info'] = $__encoded2;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/tool/query_publish_price/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandToolQueryPublishPriceV30Response::class);

        return $result['model'];
    }
}
