<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_file_video_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量删除视频素材
 */
class ApiOpenApiV10QianchuanFileVideoDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanFileVideoDeleteV10Request $qianchuanFileVideoDeleteV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanFileVideoDeleteV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanFileVideoDeleteV10Request(\Oceanengine\Models\QianchuanFileVideoDeleteV10Request $qianchuanFileVideoDeleteV10Request): self
    {
        $this->qianchuanFileVideoDeleteV10Request = $qianchuanFileVideoDeleteV10Request;
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
     * 批量删除视频素材
     */
    public function execute(): \Oceanengine\Models\QianchuanFileVideoDeleteV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanFileVideoDeleteV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/file/video/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanFileVideoDeleteV10Response::class);

        return $result['model'];
    }
}
