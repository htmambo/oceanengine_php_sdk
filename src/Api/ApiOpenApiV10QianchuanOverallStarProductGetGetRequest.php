<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_star_product_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取直播-乘方星选素材可投商品
 */
class ApiOpenApiV10QianchuanOverallStarProductGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int adv_id */
    private ?int $advertiserId = null;
    /** @var int 店铺id */
    private ?int $shopId = null;
    /** @var int 抖音号id */
    private ?int $awemeId = null;
    /** @var \Oceanengine\Models\QianchuanOverallStarProductGetV10PageParams 分页查询参数 */
    private ?\Oceanengine\Models\QianchuanOverallStarProductGetV10PageParams $pageParams = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanOverallStarProductGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * adv_id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 店铺id
     */
    public function shopId(int $shopId): self
    {
        $this->shopId = $shopId;
        return $this;
    }

    /**
     * 抖音号id
     */
    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 分页查询参数
     */
    public function pageParams(\Oceanengine\Models\QianchuanOverallStarProductGetV10PageParams $pageParams): self
    {
        $this->pageParams = $pageParams;
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
     * 获取直播-乘方星选素材可投商品
     */
    public function execute(): \Oceanengine\Models\QianchuanOverallStarProductGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->shopId === null) {
            throw new \InvalidArgumentException('shopId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['shop_id'] = $this->shopId;
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->pageParams !== null) {
            $__encoded0 = json_encode($this->pageParams);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageParams');
            }
            $queryParams['page_params'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/overall_star_product/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanOverallStarProductGetV10Response::class);

        return $result['model'];
    }
}
