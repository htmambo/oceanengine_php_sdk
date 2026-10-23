<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_close_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 可批量终止DOU+订单(API白名单，联系巨量引擎销售开通）
 */
class ApiOpenApiV30DouplusOrderClosePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DouplusOrderCloseV30Request $douplusOrderCloseV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DouplusOrderCloseV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function douplusOrderCloseV30Request(\Oceanengine\Models\DouplusOrderCloseV30Request $douplusOrderCloseV30Request): self
    {
        $this->douplusOrderCloseV30Request = $douplusOrderCloseV30Request;
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
     * 可批量终止DOU+订单(API白名单，联系巨量引擎销售开通）
     */
    public function execute(): \Oceanengine\Models\DouplusOrderCloseV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->douplusOrderCloseV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/douplus/order/close/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DouplusOrderCloseV30Response::class);

        return $result['model'];
    }
}
