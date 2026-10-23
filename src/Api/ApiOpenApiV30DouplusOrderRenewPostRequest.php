<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_renew_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用以给正在投放中的DOU+订单追加预算与投放时长
 */
class ApiOpenApiV30DouplusOrderRenewPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DouplusOrderRenewV30Request $douplusOrderRenewV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DouplusOrderRenewV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function douplusOrderRenewV30Request(\Oceanengine\Models\DouplusOrderRenewV30Request $douplusOrderRenewV30Request): self
    {
        $this->douplusOrderRenewV30Request = $douplusOrderRenewV30Request;
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
     * 用以给正在投放中的DOU+订单追加预算与投放时长
     */
    public function execute(): \Oceanengine\Models\DouplusOrderRenewV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->douplusOrderRenewV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/douplus/order/renew/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DouplusOrderRenewV30Response::class);

        return $result['model'];
    }
}
