<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_upload_image_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 服务商上传图片资源，在发送消息时，支持发送图片
 */
class ApiOpenApiV30LocalImUploadImagePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\FormFileInfo $imageFile = null;
    private ?int $localAccountId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalImUploadImageV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function imageFile(\Oceanengine\FormFileInfo $imageFile): self
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
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
     * 服务商上传图片资源，在发送消息时，支持发送图片
     */
    public function execute(): \Oceanengine\Models\LocalImUploadImageV30Response
    {
        if ($this->imageFile === null) {
            throw new \InvalidArgumentException('imageFile is required and must be specified');
        }
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
        $formParams['local_account_id'] = $this->localAccountId;
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/im/upload/image/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalImUploadImageV30Response::class);

        return $result['model'];
    }
}
