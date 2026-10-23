<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_shop_auth_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持广告通过MAPI进行店铺授权
 */
class ApiOpenApiV10QianchuanToolsShopAuthPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanToolsShopAuthV10Request $qianchuanToolsShopAuthV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanToolsShopAuthV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanToolsShopAuthV10Request(\Oceanengine\Models\QianchuanToolsShopAuthV10Request $qianchuanToolsShopAuthV10Request): self
    {
        $this->qianchuanToolsShopAuthV10Request = $qianchuanToolsShopAuthV10Request;
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
     * 支持广告通过MAPI进行店铺授权
     */
    public function execute(): \Oceanengine\Models\QianchuanToolsShopAuthV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanToolsShopAuthV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/tools/shop_auth/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanToolsShopAuthV10Response::class);

        return $result['model'];
    }
}
