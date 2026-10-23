<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_live_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 编辑乘方商品投放计划
 */
class ApiOpenApiV10QianchuanOverallLiveUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanOverallLiveUpdateV10Request $qianchuanOverallLiveUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanOverallLiveUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanOverallLiveUpdateV10Request(\Oceanengine\Models\QianchuanOverallLiveUpdateV10Request $qianchuanOverallLiveUpdateV10Request): self
    {
        $this->qianchuanOverallLiveUpdateV10Request = $qianchuanOverallLiveUpdateV10Request;
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
     * 编辑乘方商品投放计划
     */
    public function execute(): \Oceanengine\Models\QianchuanOverallLiveUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanOverallLiveUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/overall_live/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanOverallLiveUpdateV10Response::class);

        return $result['model'];
    }
}
