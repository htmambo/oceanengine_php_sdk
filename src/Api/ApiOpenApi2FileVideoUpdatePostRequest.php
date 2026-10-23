<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以批量更新素材视频的名称。
 */
class ApiOpenApi2FileVideoUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FileVideoUpdateV2Request $fileVideoUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileVideoUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fileVideoUpdateV2Request(\Oceanengine\Models\FileVideoUpdateV2Request $fileVideoUpdateV2Request): self
    {
        $this->fileVideoUpdateV2Request = $fileVideoUpdateV2Request;
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
     * 通过此接口，用户可以批量更新素材视频的名称。
     */
    public function execute(): \Oceanengine\Models\FileVideoUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->fileVideoUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/video/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileVideoUpdateV2Response::class);

        return $result['model'];
    }
}
