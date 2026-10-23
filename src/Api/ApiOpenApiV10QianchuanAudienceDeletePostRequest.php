<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_audience_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 技术文档：https://bytedance.feishu.cn/wiki/wikcnBy344NTluLkMQ9anjV5nff
 * 开发：杨旭
 * PM：朱颖波
 */
class ApiOpenApiV10QianchuanAudienceDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAudienceDeleteV10Request $qianchuanAudienceDeleteV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAudienceDeleteV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAudienceDeleteV10Request(\Oceanengine\Models\QianchuanAudienceDeleteV10Request $qianchuanAudienceDeleteV10Request): self
    {
        $this->qianchuanAudienceDeleteV10Request = $qianchuanAudienceDeleteV10Request;
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
     * 技术文档：https://bytedance.feishu.cn/wiki/wikcnBy344NTluLkMQ9anjV5nff
     */
    public function execute(): \Oceanengine\Models\QianchuanAudienceDeleteV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAudienceDeleteV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/audience/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAudienceDeleteV10Response::class);

        return $result['model'];
    }
}
