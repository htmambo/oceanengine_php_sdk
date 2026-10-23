<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_video_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 乘方计划创编接口
 */
class ApiOpenApiV10QianchuanOverallVideoCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanOverallVideoCreateV10Request $qianchuanOverallVideoCreateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanOverallVideoCreateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanOverallVideoCreateV10Request(\Oceanengine\Models\QianchuanOverallVideoCreateV10Request $qianchuanOverallVideoCreateV10Request): self
    {
        $this->qianchuanOverallVideoCreateV10Request = $qianchuanOverallVideoCreateV10Request;
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
     * 乘方计划创编接口
     */
    public function execute(): \Oceanengine\Models\QianchuanOverallVideoCreateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanOverallVideoCreateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/overall_video/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanOverallVideoCreateV10Response::class);

        return $result['model'];
    }
}
