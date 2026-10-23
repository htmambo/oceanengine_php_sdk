<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_audience_create_by_file_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * https://bytedance.feishu.cn/wiki/wikcnBy344NTluLkMQ9anjV5nff
 */
class ApiOpenApiV10QianchuanAudienceCreateByFilePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAudienceCreateByFileV10Request $qianchuanAudienceCreateByFileV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAudienceCreateByFileV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAudienceCreateByFileV10Request(\Oceanengine\Models\QianchuanAudienceCreateByFileV10Request $qianchuanAudienceCreateByFileV10Request): self
    {
        $this->qianchuanAudienceCreateByFileV10Request = $qianchuanAudienceCreateByFileV10Request;
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
     * https://bytedance.feishu.cn/wiki/wikcnBy344NTluLkMQ9anjV5nff
     */
    public function execute(): \Oceanengine\Models\QianchuanAudienceCreateByFileV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAudienceCreateByFileV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/audience/create_by_file/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAudienceCreateByFileV10Response::class);

        return $result['model'];
    }
}
