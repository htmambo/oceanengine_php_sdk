<?php

/**
 * 本文件由 go2php 生成，源: api_local_file_video_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 上传视频
 */
class ApiOpenApiV30LocalFileVideoUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 */
    private ?string $filename = null;
    private ?int $localAccountId = null;
    /** @var \Oceanengine\FormFileInfo 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） */
    private ?\Oceanengine\FormFileInfo $videoFile = null;
    /** @var string 视频的md5值(用于服务端校验) */
    private ?string $videoSignature = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalFileVideoUploadV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符
     */
    public function filename(string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制）
     */
    public function videoFile(\Oceanengine\FormFileInfo $videoFile): self
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * 视频的md5值(用于服务端校验)
     */
    public function videoSignature(string $videoSignature): self
    {
        $this->videoSignature = $videoSignature;
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
     * 上传视频
     */
    public function execute(): \Oceanengine\Models\LocalFileVideoUploadV30Response
    {
        if ($this->filename === null) {
            throw new \InvalidArgumentException('filename is required and must be specified');
        }
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->videoFile === null) {
            throw new \InvalidArgumentException('videoFile is required and must be specified');
        }
        if ($this->videoSignature === null) {
            throw new \InvalidArgumentException('videoSignature is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['filename'] = $this->filename;
        $formParams['local_account_id'] = $this->localAccountId;
        if ($this->videoFile !== null) {
            $files['video_file'] = $this->videoFile;
        }
        $formParams['video_signature'] = $this->videoSignature;
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/file/video/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalFileVideoUploadV30Response::class);

        return $result['model'];
    }
}
