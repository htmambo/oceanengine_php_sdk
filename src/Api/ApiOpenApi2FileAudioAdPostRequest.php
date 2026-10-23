<?php

/**
 * 本文件由 go2php 生成，源: api_file_audio_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以上传和广告相关的音频图片，例如图文中的音频。
 */
class ApiOpenApi2FileAudioAdPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    private ?string $uploadType = null;
    private ?\Oceanengine\FormFileInfo $audioFile = null;
    /** @var string 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE */
    private ?string $audioSignature = null;
    private ?string $audioUrl = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileAudioAdV2ApiService $service)
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

    public function uploadType(string $uploadType): self
    {
        $this->uploadType = $uploadType;
        return $this;
    }

    public function audioFile(\Oceanengine\FormFileInfo $audioFile): self
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE
     */
    public function audioSignature(string $audioSignature): self
    {
        $this->audioSignature = $audioSignature;
        return $this;
    }

    public function audioUrl(string $audioUrl): self
    {
        $this->audioUrl = $audioUrl;
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
     * 通过此接口，用户可以上传和广告相关的音频图片，例如图文中的音频。
     */
    public function execute(): \Oceanengine\Models\FileAudioAdV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->uploadType === null) {
            throw new \InvalidArgumentException('uploadType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['advertiser_id'] = $this->advertiserId;
        if ($this->audioFile !== null) {
            $files['audio_file'] = $this->audioFile;
        }
        if ($this->audioSignature !== null) {
            $formParams['audio_signature'] = $this->audioSignature;
        }
        if ($this->audioUrl !== null) {
            $formParams['audio_url'] = $this->audioUrl;
        }
        $formParams['upload_type'] = $this->uploadType;
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/audio/ad/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileAudioAdV2Response::class);

        return $result['model'];
    }
}
