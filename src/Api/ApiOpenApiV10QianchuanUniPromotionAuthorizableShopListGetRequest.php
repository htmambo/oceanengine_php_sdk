<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_authorizable_shop_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取商品全域可授权店铺列表
 */
class ApiOpenApiV10QianchuanUniPromotionAuthorizableShopListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $awemeId = null;
    private ?\Oceanengine\Models\QianchuanUniPromotionAuthorizableShopListV10Filter $filter = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAuthorizableShopListV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function filter(\Oceanengine\Models\QianchuanUniPromotionAuthorizableShopListV10Filter $filter): self
    {
        $this->filter = $filter;
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
     * 获取商品全域可授权店铺列表
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAuthorizableShopListV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/authorizable_shop/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAuthorizableShopListV10Response::class);

        return $result['model'];
    }
}
