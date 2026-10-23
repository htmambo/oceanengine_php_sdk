<?php

/**
 * 本文件由 go2php 生成，源: api_common.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CommonApiService
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
     * 通用 GET 请求
     */
    public function get(string $path): CommonApiRequest
    {
        return new CommonApiRequest($this, 'GET', $path, '');
    }

    /**
     * 通用 POST 请求（application/json）
     */
    public function post(string $path): CommonApiRequest
    {
        return new CommonApiRequest($this, 'POST', $path, 'application/json');
    }

    /**
     * 通用 POST multipart/form-data 请求
     */
    public function postMultipart(string $path): CommonApiRequest
    {
        return new CommonApiRequest($this, 'POST', $path, 'multipart/form-data');
    }
}
