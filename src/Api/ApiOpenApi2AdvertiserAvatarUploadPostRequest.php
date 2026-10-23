<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_avatar_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 上传广告主头像
 */
class ApiOpenApi2AdvertiserAvatarUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?\Oceanengine\FormFileInfo $imageFile = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserAvatarUploadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function imageFile(\Oceanengine\FormFileInfo $imageFile): self
    {
        $this->imageFile = $imageFile;
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
     * 上传广告主头像
     */
    public function execute(): \Oceanengine\Models\AdvertiserAvatarUploadV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->imageFile === null) {
            throw new \InvalidArgumentException('imageFile is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['advertiser_id'] = $this->advertiserId;
        if ($this->imageFile !== null) {
            $files['image_file'] = $this->imageFile;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/advertiser/avatar/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserAvatarUploadV2Response::class);

        return $result['model'];
    }
}
