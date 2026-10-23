<?php

/**
 * 本文件由 go2php 生成，源: api_file_upload_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 异步上传视频文件
 */
class ApiOpenApi2FileUploadTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FileUploadTaskCreateV2Request $fileUploadTaskCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileUploadTaskCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fileUploadTaskCreateV2Request(\Oceanengine\Models\FileUploadTaskCreateV2Request $fileUploadTaskCreateV2Request): self
    {
        $this->fileUploadTaskCreateV2Request = $fileUploadTaskCreateV2Request;
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
     * 异步上传视频文件
     */
    public function execute(): \Oceanengine\Models\FileUploadTaskCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->fileUploadTaskCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/upload_task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileUploadTaskCreateV2Response::class);

        return $result['model'];
    }
}
