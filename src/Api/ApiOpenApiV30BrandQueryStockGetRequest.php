<?php

/**
 * 本文件由 go2php 生成，源: api_brand_query_stock_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * AD品牌查询库存余量
 */
class ApiOpenApiV30BrandQueryStockGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string 广告类别 */
    private ?string $classify = null;
    /** @var string 推广目的 */
    private ?string $landingType = null;
    /** @var string 投放位置（媒体端） */
    private ?string $appOrigin = null;
    /** @var string 版位 */
    private ?string $adForm = null;
    /** @var string 优化目标 */
    private ?string $gdSendType = null;
    /** @var string 政策编号 */
    private ?string $policyNo = null;
    /** @var \Oceanengine\Models\BrandQueryStockV30ScheduleInfo 日期 */
    private ?\Oceanengine\Models\BrandQueryStockV30ScheduleInfo $scheduleInfo = null;
    /** @var \Oceanengine\Models\BrandQueryStockV30AudienceInfo 定向 */
    private ?\Oceanengine\Models\BrandQueryStockV30AudienceInfo $audienceInfo = null;
    /** @var string 招商意向单ID */
    private ?string $merchantIntentionNo = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandQueryStockV30ApiService $service)
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
     * 推广目的
     */
    public function landingType(string $landingType): self
    {
        $this->landingType = $landingType;
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
     * 版位
     */
    public function adForm(string $adForm): self
    {
        $this->adForm = $adForm;
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
     * 日期
     */
    public function scheduleInfo(\Oceanengine\Models\BrandQueryStockV30ScheduleInfo $scheduleInfo): self
    {
        $this->scheduleInfo = $scheduleInfo;
        return $this;
    }

    /**
     * 定向
     */
    public function audienceInfo(\Oceanengine\Models\BrandQueryStockV30AudienceInfo $audienceInfo): self
    {
        $this->audienceInfo = $audienceInfo;
        return $this;
    }

    /**
     * 招商意向单ID
     */
    public function merchantIntentionNo(string $merchantIntentionNo): self
    {
        $this->merchantIntentionNo = $merchantIntentionNo;
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
     * AD品牌查询库存余量
     */
    public function execute(): \Oceanengine\Models\BrandQueryStockV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->classify === null) {
            throw new \InvalidArgumentException('classify is required and must be specified');
        }
        if ($this->landingType === null) {
            throw new \InvalidArgumentException('landingType is required and must be specified');
        }
        if ($this->appOrigin === null) {
            throw new \InvalidArgumentException('appOrigin is required and must be specified');
        }
        if ($this->adForm === null) {
            throw new \InvalidArgumentException('adForm is required and must be specified');
        }
        if ($this->gdSendType === null) {
            throw new \InvalidArgumentException('gdSendType is required and must be specified');
        }
        if ($this->policyNo === null) {
            throw new \InvalidArgumentException('policyNo is required and must be specified');
        }
        if ($this->scheduleInfo === null) {
            throw new \InvalidArgumentException('scheduleInfo is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['classify'] = $this->classify;
        $queryParams['landing_type'] = $this->landingType;
        $queryParams['app_origin'] = $this->appOrigin;
        $queryParams['ad_form'] = $this->adForm;
        $queryParams['gd_send_type'] = $this->gdSendType;
        if ($this->audienceInfo !== null) {
            $__encoded0 = json_encode($this->audienceInfo);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: audienceInfo');
            }
            $queryParams['audience_info'] = $__encoded0;
        }
        $queryParams['policy_no'] = $this->policyNo;
        $__encoded1 = json_encode($this->scheduleInfo);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: scheduleInfo');
            }
            $queryParams['schedule_info'] = $__encoded1;
        if ($this->merchantIntentionNo !== null) {
            $queryParams['merchant_intention_no'] = $this->merchantIntentionNo;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/query_stock/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandQueryStockV30Response::class);

        return $result['model'];
    }
}
