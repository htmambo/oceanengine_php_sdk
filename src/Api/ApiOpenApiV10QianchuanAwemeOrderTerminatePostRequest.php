<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_terminate_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 该接口用于终止小店随心推订单
 */
class ApiOpenApiV10QianchuanAwemeOrderTerminatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAwemeOrderTerminateV10Request $qianchuanAwemeOrderTerminateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeOrderTerminateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAwemeOrderTerminateV10Request(\Oceanengine\Models\QianchuanAwemeOrderTerminateV10Request $qianchuanAwemeOrderTerminateV10Request): self
    {
        $this->qianchuanAwemeOrderTerminateV10Request = $qianchuanAwemeOrderTerminateV10Request;
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
     * 该接口用于终止小店随心推订单
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeOrderTerminateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAwemeOrderTerminateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/order/terminate/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeOrderTerminateV10Response::class);

        return $result['model'];
    }
}
