<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_ad_material_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取随心推全域订单素材列表
 */
class ApiOpenApiV10QianchuanAwemeUniPromotionAdMaterialGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $orderId = null;
    private ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10Filter $filter = null;
    /** @var string 排序方式，不传默认降序 */
    private ?string $orderType = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;
    private ?int $page = null;
    private ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10PageSize $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeUniPromotionAdMaterialGetV10ApiService $service)
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

    public function filter(\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * 排序方式，不传默认降序
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 排序字段
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10PageSize $pageSize): self
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
     * 获取随心推全域订单素材列表
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->orderId === null) {
            throw new \InvalidArgumentException('orderId is required and must be specified');
        }
        if ($this->filter === null) {
            throw new \InvalidArgumentException('filter is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['order_id'] = $this->orderId;
        $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $__encoded1 = json_encode($this->pageSize);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageSize');
            }
            $queryParams['page_size'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/uni_promotion/ad/material/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10Response::class);

        return $result['model'];
    }
}
