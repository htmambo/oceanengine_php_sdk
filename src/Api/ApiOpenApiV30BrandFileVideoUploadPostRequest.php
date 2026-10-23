<?php

/**
 * 本文件由 go2php 生成，源: api_brand_file_video_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * AD品牌视频上传
 */
class ApiOpenApiV30BrandFileVideoUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\FormFileInfo 视频文件 */
    private ?\Oceanengine\FormFileInfo $videoFile = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandFileVideoUploadV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 视频文件
     */
    public function videoFile(\Oceanengine\FormFileInfo $videoFile): self
    {
        $this->videoFile = $videoFile;
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
     * AD品牌视频上传
     */
    public function execute(): \Oceanengine\Models\BrandFileVideoUploadV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->videoFile === null) {
            throw new \InvalidArgumentException('videoFile is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['advertiser_id'] = $this->advertiserId;
        if ($this->videoFile !== null) {
            $files['video_file'] = $this->videoFile;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/file/video/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandFileVideoUploadV30Response::class);

        return $result['model'];
    }
}
