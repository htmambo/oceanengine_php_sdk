<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_aweme_aweme_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除乘方计划下的抖音号
 */
class ApiOpenApiV10QianchuanOverallAwemeAwemeDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10Request $qianchuanOverallAwemeAwemeDeleteV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanOverallAwemeAwemeDeleteV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanOverallAwemeAwemeDeleteV10Request(\Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10Request $qianchuanOverallAwemeAwemeDeleteV10Request): self
    {
        $this->qianchuanOverallAwemeAwemeDeleteV10Request = $qianchuanOverallAwemeAwemeDeleteV10Request;
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
     * 删除乘方计划下的抖音号
     */
    public function execute(): \Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanOverallAwemeAwemeDeleteV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/overall_aweme/aweme/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10Response::class);

        return $result['model'];
    }
}
