<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_file_image_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量删除图片素材
 */
class ApiOpenApiV10QianchuanFileImageDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanFileImageDeleteV10Request $qianchuanFileImageDeleteV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanFileImageDeleteV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanFileImageDeleteV10Request(\Oceanengine\Models\QianchuanFileImageDeleteV10Request $qianchuanFileImageDeleteV10Request): self
    {
        $this->qianchuanFileImageDeleteV10Request = $qianchuanFileImageDeleteV10Request;
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
     * 批量删除图片素材
     */
    public function execute(): \Oceanengine\Models\QianchuanFileImageDeleteV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanFileImageDeleteV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/file/image/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanFileImageDeleteV10Response::class);

        return $result['model'];
    }
}
