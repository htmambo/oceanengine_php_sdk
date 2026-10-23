<?php

/**
 * 本文件由 go2php 生成，源: api_brand_upload_image_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * AD品牌上传图片
 */
class ApiOpenApiV30BrandUploadImagePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\FormFileInfo 图片文件 */
    private ?\Oceanengine\FormFileInfo $imageFile = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandUploadImageV30ApiService $service)
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
     * 图片文件
     */
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
     * AD品牌上传图片
     */
    public function execute(): \Oceanengine\Models\BrandUploadImageV30Response
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
        $url = '/open_api/v3.0/brand/upload_image/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandUploadImageV30Response::class);

        return $result['model'];
    }
}
