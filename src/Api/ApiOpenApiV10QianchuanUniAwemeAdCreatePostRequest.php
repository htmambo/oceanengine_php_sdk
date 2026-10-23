<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_aweme_ad_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 新建全域推广计划
 */
class ApiOpenApiV10QianchuanUniAwemeAdCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniAwemeAdCreateV10Request $qianchuanUniAwemeAdCreateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniAwemeAdCreateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniAwemeAdCreateV10Request(\Oceanengine\Models\QianchuanUniAwemeAdCreateV10Request $qianchuanUniAwemeAdCreateV10Request): self
    {
        $this->qianchuanUniAwemeAdCreateV10Request = $qianchuanUniAwemeAdCreateV10Request;
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
     * 新建全域推广计划
     */
    public function execute(): \Oceanengine\Models\QianchuanUniAwemeAdCreateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniAwemeAdCreateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_aweme/ad/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniAwemeAdCreateV10Response::class);

        return $result['model'];
    }
}
