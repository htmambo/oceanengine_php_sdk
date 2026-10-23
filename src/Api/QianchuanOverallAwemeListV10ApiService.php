<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_aweme_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanOverallAwemeListV10ApiService
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
     * 商品乘方创编时，选完商品后的抖音号选择列表
     */
    public function get(): ApiOpenApiV10QianchuanOverallAwemeListGetRequest
    {
        return new ApiOpenApiV10QianchuanOverallAwemeListGetRequest($this);
    }
}
