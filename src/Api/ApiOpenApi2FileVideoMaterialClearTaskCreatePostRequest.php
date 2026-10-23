<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_material_clear_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建素材清理任务
 */
class ApiOpenApi2FileVideoMaterialClearTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FileVideoMaterialClearTaskCreateV2Request $fileVideoMaterialClearTaskCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileVideoMaterialClearTaskCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fileVideoMaterialClearTaskCreateV2Request(\Oceanengine\Models\FileVideoMaterialClearTaskCreateV2Request $fileVideoMaterialClearTaskCreateV2Request): self
    {
        $this->fileVideoMaterialClearTaskCreateV2Request = $fileVideoMaterialClearTaskCreateV2Request;
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
     * 创建素材清理任务
     */
    public function execute(): \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->fileVideoMaterialClearTaskCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/video/material/clear_task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2Response::class);

        return $result['model'];
    }
}
