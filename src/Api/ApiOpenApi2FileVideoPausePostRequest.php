<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_pause_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 暂停账户下的素材
 */
class ApiOpenApi2FileVideoPausePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FileVideoPauseV2Request $fileVideoPauseV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileVideoPauseV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fileVideoPauseV2Request(\Oceanengine\Models\FileVideoPauseV2Request $fileVideoPauseV2Request): self
    {
        $this->fileVideoPauseV2Request = $fileVideoPauseV2Request;
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
     * 暂停账户下的素材
     */
    public function execute(): \Oceanengine\Models\FileVideoPauseV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->fileVideoPauseV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/video/pause/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileVideoPauseV2Response::class);

        return $result['model'];
    }
}
