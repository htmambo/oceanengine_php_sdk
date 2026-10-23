<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_attachment_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 附件上传接口，在通过【投放资质提交】接口提交资质前，需要将资质附件从本接口上传至认证中心，获取附件id，将附件id作为入参传入投放资质提交接口
 */
class ApiOpenApiV30AdvertiserAttachmentUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $attachmentType = null;
    /** @var string 文件名 注意：不要包含文件路径，不要含有&#39;/&#39;等非法字符 */
    private ?string $filename = null;
    /** @var \Oceanengine\FormFileInfo 图片数据 */
    private ?\Oceanengine\FormFileInfo $imageData = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserAttachmentUploadV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function attachmentType(string $attachmentType): self
    {
        $this->attachmentType = $attachmentType;
        return $this;
    }

    /**
     * 文件名 注意：不要包含文件路径，不要含有&#39;/&#39;等非法字符
     */
    public function filename(string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * 图片数据
     */
    public function imageData(\Oceanengine\FormFileInfo $imageData): self
    {
        $this->imageData = $imageData;
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
     * 附件上传接口，在通过【投放资质提交】接口提交资质前，需要将资质附件从本接口上传至认证中心，获取附件id，将附件id作为入参传入投放资质提交接口
     */
    public function execute(): \Oceanengine\Models\AdvertiserAttachmentUploadV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->attachmentType === null) {
            throw new \InvalidArgumentException('attachmentType is required and must be specified');
        }
        if ($this->filename === null) {
            throw new \InvalidArgumentException('filename is required and must be specified');
        }
        if ($this->imageData === null) {
            throw new \InvalidArgumentException('imageData is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['advertiser_id'] = $this->advertiserId;
        $formParams['attachment_type'] = $this->attachmentType;
        $formParams['filename'] = $this->filename;
        if ($this->imageData !== null) {
            $files['image_data'] = $this->imageData;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/advertiser/attachment/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserAttachmentUploadV30Response::class);

        return $result['model'];
    }
}
