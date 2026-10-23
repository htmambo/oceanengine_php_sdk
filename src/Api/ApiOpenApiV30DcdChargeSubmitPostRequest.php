<?php

/**
 * 本文件由 go2php 生成，源: api_dcd_charge_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 为懂车帝二手车APP提供MAPI接口用户充值提交
 */
class ApiOpenApiV30DcdChargeSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DcdChargeSubmitV30Request $dcdChargeSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DcdChargeSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dcdChargeSubmitV30Request(\Oceanengine\Models\DcdChargeSubmitV30Request $dcdChargeSubmitV30Request): self
    {
        $this->dcdChargeSubmitV30Request = $dcdChargeSubmitV30Request;
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
     * 为懂车帝二手车APP提供MAPI接口用户充值提交
     */
    public function execute(): \Oceanengine\Models\DcdChargeSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dcdChargeSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dcd/charge/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DcdChargeSubmitV30Response::class);

        return $result['model'];
    }
}
