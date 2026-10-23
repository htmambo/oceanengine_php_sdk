<?php

/**
 * 本文件由 go2php 生成，源: api_local_file_upload_task_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 异步上传本地推视频
 */
class ApiOpenApiV30LocalFileUploadTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalFileUploadTaskCreateV30Request $localFileUploadTaskCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalFileUploadTaskCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localFileUploadTaskCreateV30Request(\Oceanengine\Models\LocalFileUploadTaskCreateV30Request $localFileUploadTaskCreateV30Request): self
    {
        $this->localFileUploadTaskCreateV30Request = $localFileUploadTaskCreateV30Request;
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
     * 异步上传本地推视频
     */
    public function execute(): \Oceanengine\Models\LocalFileUploadTaskCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localFileUploadTaskCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/file/upload_task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalFileUploadTaskCreateV30Response::class);

        return $result['model'];
    }
}
