<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建小店随心推订单
 */
class ApiOpenApiV10QianchuanAwemeOrderCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAwemeOrderCreateV10Request $qianchuanAwemeOrderCreateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeOrderCreateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAwemeOrderCreateV10Request(\Oceanengine\Models\QianchuanAwemeOrderCreateV10Request $qianchuanAwemeOrderCreateV10Request): self
    {
        $this->qianchuanAwemeOrderCreateV10Request = $qianchuanAwemeOrderCreateV10Request;
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
     * 创建小店随心推订单
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeOrderCreateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAwemeOrderCreateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/order/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeOrderCreateV10Response::class);

        return $result['model'];
    }
}
