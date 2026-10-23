<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_live_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建直播乘方计划
 */
class ApiOpenApiV10QianchuanOverallLiveCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanOverallLiveCreateV10Request $qianchuanOverallLiveCreateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanOverallLiveCreateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanOverallLiveCreateV10Request(\Oceanengine\Models\QianchuanOverallLiveCreateV10Request $qianchuanOverallLiveCreateV10Request): self
    {
        $this->qianchuanOverallLiveCreateV10Request = $qianchuanOverallLiveCreateV10Request;
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
     * 创建直播乘方计划
     */
    public function execute(): \Oceanengine\Models\QianchuanOverallLiveCreateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanOverallLiveCreateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/overall_live/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanOverallLiveCreateV10Response::class);

        return $result['model'];
    }
}
