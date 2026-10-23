<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_aweme_ad_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 编辑全域推广计划
 */
class ApiOpenApiV10QianchuanUniAwemeAdUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10Request $qianchuanUniAwemeAdUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniAwemeAdUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniAwemeAdUpdateV10Request(\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10Request $qianchuanUniAwemeAdUpdateV10Request): self
    {
        $this->qianchuanUniAwemeAdUpdateV10Request = $qianchuanUniAwemeAdUpdateV10Request;
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
     * 编辑全域推广计划
     */
    public function execute(): \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniAwemeAdUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_aweme/ad/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10Response::class);

        return $result['model'];
    }
}
