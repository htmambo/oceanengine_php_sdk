<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_shop_authorized_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanShopAuthorizedGetV10ApiService
{
    private \Oceanengine\ApiClient $apiClient;

    public function __construct(\Oceanengine\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient(): \Oceanengine\ApiClient
    {
        return $this->apiClient;
    }

    /**
     * 在店铺新客场景下，支持广告主选择具体绑定的店铺进行新客投放
     * 投放到近365天未在该店铺下发生过成交订单的人群
     */
    public function get(): ApiOpenApiV10QianchuanShopAuthorizedGetGetRequest
    {
        return new ApiOpenApiV10QianchuanShopAuthorizedGetGetRequest($this);
    }
}
