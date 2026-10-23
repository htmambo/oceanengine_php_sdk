<?php

/**
 * 本文件由 go2php 生成，源: api_aic_element_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AicElementUploadV30ApiService
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
     * 通过此接口可以上传原料到即创原料库
     */
    public function post(): ApiOpenApiV30AicElementUploadPostRequest
    {
        return new ApiOpenApiV30AicElementUploadPostRequest($this);
    }
}
