<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_bid_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApiV10QianchuanAdBidUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAdBidUpdateV10Request $qianchuanAdBidUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdBidUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAdBidUpdateV10Request(\Oceanengine\Models\QianchuanAdBidUpdateV10Request $qianchuanAdBidUpdateV10Request): self
    {
        $this->qianchuanAdBidUpdateV10Request = $qianchuanAdBidUpdateV10Request;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\QianchuanAdBidUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAdBidUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/ad/bid/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdBidUpdateV10Response::class);

        return $result['model'];
    }
}
