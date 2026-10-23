<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建DOU+订单(API白名单，联系巨量引擎销售开通）
 */
class ApiOpenApiV30DouplusOrderCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DouplusOrderCreateV30Request $douplusOrderCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DouplusOrderCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function douplusOrderCreateV30Request(\Oceanengine\Models\DouplusOrderCreateV30Request $douplusOrderCreateV30Request): self
    {
        $this->douplusOrderCreateV30Request = $douplusOrderCreateV30Request;
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
     * 创建DOU+订单(API白名单，联系巨量引擎销售开通）
     */
    public function execute(): \Oceanengine\Models\DouplusOrderCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->douplusOrderCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/douplus/order/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DouplusOrderCreateV30Response::class);

        return $result['model'];
    }
}
