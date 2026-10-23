<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_brand_authorized_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanBrandAuthorizedGetV10ApiService
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
     * 在品牌新客场景下，支持广告主选择具体绑定的品牌进行新客投放
     * 投放到近365天未在该品牌下发生过成交订单的人群
     */
    public function get(): ApiOpenApiV10QianchuanBrandAuthorizedGetGetRequest
    {
        return new ApiOpenApiV10QianchuanBrandAuthorizedGetGetRequest($this);
    }
}
