<?php

/**
 * 本文件由 go2php 生成，源: api_local_charge_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建一笔充值单，生成支付链接，进行支付
 */
class ApiOpenApiV30LocalChargeSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalChargeSubmitV30Request $localChargeSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalChargeSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localChargeSubmitV30Request(\Oceanengine\Models\LocalChargeSubmitV30Request $localChargeSubmitV30Request): self
    {
        $this->localChargeSubmitV30Request = $localChargeSubmitV30Request;
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
     * 创建一笔充值单，生成支付链接，进行支付
     */
    public function execute(): \Oceanengine\Models\LocalChargeSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localChargeSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/charge/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalChargeSubmitV30Response::class);

        return $result['model'];
    }
}
