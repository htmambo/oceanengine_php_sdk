<?php

/**
 * 本文件由 go2php 生成，源: api_local_image_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 上传图片素材，视频封面图、推广卡片配图等
 */
class ApiOpenApiV30LocalImageUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var \Oceanengine\FormFileInfo 图片文件 upload_type为UPLOAD_BY_FILE必填 格式: jpg、jpeg、png、bmp、gif, 大小1.5M内 */
    private ?\Oceanengine\FormFileInfo $imageFile = null;
    /** @var string 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE */
    private ?string $imageSignature = null;
    /** @var bool 图片素材是否为AIGC生成 */
    private ?bool $isAigc = null;
    private ?string $uploadType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalImageUploadV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 图片文件 upload_type为UPLOAD_BY_FILE必填 格式: jpg、jpeg、png、bmp、gif, 大小1.5M内
     */
    public function imageFile(\Oceanengine\FormFileInfo $imageFile): self
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    /**
     * 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE
     */
    public function imageSignature(string $imageSignature): self
    {
        $this->imageSignature = $imageSignature;
        return $this;
    }

    /**
     * 图片素材是否为AIGC生成
     */
    public function isAigc(bool $isAigc): self
    {
        $this->isAigc = $isAigc;
        return $this;
    }

    public function uploadType(string $uploadType): self
    {
        $this->uploadType = $uploadType;
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
     * 上传图片素材，视频封面图、推广卡片配图等
     */
    public function execute(): \Oceanengine\Models\LocalImageUploadV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->imageFile !== null) {
            $files['image_file'] = $this->imageFile;
        }
        if ($this->imageSignature !== null) {
            $formParams['image_signature'] = $this->imageSignature;
        }
        if ($this->isAigc !== null) {
            $formParams['is_aigc'] = $this->isAigc;
        }
        $formParams['local_account_id'] = $this->localAccountId;
        if ($this->uploadType !== null) {
            $formParams['upload_type'] = $this->uploadType;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/image/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalImageUploadV30Response::class);

        return $result['model'];
    }
}
