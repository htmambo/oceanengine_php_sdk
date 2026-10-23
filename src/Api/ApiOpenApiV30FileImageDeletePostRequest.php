<?php

/**
 * 本文件由 go2php 生成，源: api_file_image_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以批量删除广告主下创意素材库的图片。
 */
class ApiOpenApiV30FileImageDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FileImageDeleteV30Request $fileImageDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileImageDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fileImageDeleteV30Request(\Oceanengine\Models\FileImageDeleteV30Request $fileImageDeleteV30Request): self
    {
        $this->fileImageDeleteV30Request = $fileImageDeleteV30Request;
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
     * 通过此接口，用户可以批量删除广告主下创意素材库的图片。
     */
    public function execute(): \Oceanengine\Models\FileImageDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->fileImageDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/file/image/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileImageDeleteV30Response::class);

        return $result['model'];
    }
}
