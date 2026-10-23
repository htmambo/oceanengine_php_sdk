<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_shop_advertiser_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于获取店铺账户下的广告主账号列表。当授权账户为PLATFORM_ROLE_SHOP_ACCOUNT抖音店铺账户时，可通过当前工具查询店铺下管理的千川广告主账号。仅当账户返回额外权限列表包含随心推权限时，对应账户支持操作随心推业务接口。
 */
class ApiOpenApiV10QianchuanShopAdvertiserListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $shopId = null;
    private ?array $permission = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanShopAdvertiserListV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function shopId(int $shopId): self
    {
        $this->shopId = $shopId;
        return $this;
    }

    public function permission(array $permission): self
    {
        $this->permission = $permission;
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
     * 用于获取店铺账户下的广告主账号列表。当授权账户为PLATFORM_ROLE_SHOP_ACCOUNT抖音店铺账户时，可通过当前工具查询店铺下管理的千川广告主账号。仅当账户返回额外权限列表包含随心推权限时，对应账户支持操作随心推业务接口。
     */
    public function execute(): \Oceanengine\Models\QianchuanShopAdvertiserListV10Response
    {
        if ($this->shopId === null) {
            throw new \InvalidArgumentException('shopId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['shop_id'] = $this->shopId;
        if ($this->permission !== null) {
            $queryParams['permission'] = $this->permission;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/shop/advertiser/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanShopAdvertiserListV10Response::class);

        return $result['model'];
    }
}
