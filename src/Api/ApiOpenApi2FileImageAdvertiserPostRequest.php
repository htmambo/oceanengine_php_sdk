<?php

/**
 * 本文件由 go2php 生成，源: api_file_image_advertiser_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 资质图片上传
 */
class ApiOpenApi2FileImageAdvertiserPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $uploadTo = null;
    private ?\Oceanengine\FormFileInfo $imageFile = null;
    private ?string $imageSignature = null;
    private ?string $imageUrl = null;
    private ?string $uploadType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileImageAdvertiserV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function uploadTo(string $uploadTo): self
    {
        $this->uploadTo = $uploadTo;
        return $this;
    }

    public function imageFile(\Oceanengine\FormFileInfo $imageFile): self
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    public function imageSignature(string $imageSignature): self
    {
        $this->imageSignature = $imageSignature;
        return $this;
    }

    public function imageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
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
     * 资质图片上传
     */
    public function execute(): \Oceanengine\Models\FileImageAdvertiserV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->uploadTo === null) {
            throw new \InvalidArgumentException('uploadTo is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['advertiser_id'] = $this->advertiserId;
        if ($this->imageFile !== null) {
            $files['image_file'] = $this->imageFile;
        }
        if ($this->imageSignature !== null) {
            $formParams['image_signature'] = $this->imageSignature;
        }
        if ($this->imageUrl !== null) {
            $formParams['image_url'] = $this->imageUrl;
        }
        $formParams['upload_to'] = $this->uploadTo;
        if ($this->uploadType !== null) {
            $formParams['upload_type'] = $this->uploadType;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/image/advertiser/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileImageAdvertiserV2Response::class);

        return $result['model'];
    }
}
