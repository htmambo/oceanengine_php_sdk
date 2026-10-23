<?php

/**
 * 本文件由 go2php 生成，源: api_file_playable_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建试玩、直玩素材
 */
class ApiOpenApiV30FilePlayableCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FilePlayableCreateV30Request $filePlayableCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FilePlayableCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function filePlayableCreateV30Request(\Oceanengine\Models\FilePlayableCreateV30Request $filePlayableCreateV30Request): self
    {
        $this->filePlayableCreateV30Request = $filePlayableCreateV30Request;
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
     * 创建试玩、直玩素材
     */
    public function execute(): \Oceanengine\Models\FilePlayableCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->filePlayableCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/file/playable/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FilePlayableCreateV30Response::class);

        return $result['model'];
    }
}
