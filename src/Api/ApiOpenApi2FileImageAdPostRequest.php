<?php

/**
 * 本文件由 go2php 生成，源: api_file_image_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以上传和广告相关的素材图片，例如创意素材。
 */
class ApiOpenApi2FileImageAdPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string 素材的文件名，可自定义素材名，不传则默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名 */
    private ?string $filename = null;
    /** @var \Oceanengine\FormFileInfo 图片文件 upload_type为UPLOAD_BY_FILE必填 格式: jpg、jpeg、png、bmp、gif, 大小1.5M内 */
    private ?\Oceanengine\FormFileInfo $imageFile = null;
    /** @var string 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE */
    private ?string $imageSignature = null;
    /** @var string 图片url地址，如http://xxx.xxx upload_type为UPLOAD_BY_URL必填 */
    private ?string $imageUrl = null;
    /** @var bool 图片素材是否为AIGC生成 */
    private ?bool $isAigc = null;
    private ?string $uploadType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileImageAdV2ApiService $service)
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
     * 素材的文件名，可自定义素材名，不传则默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     */
    public function filename(string $filename): self
    {
        $this->filename = $filename;
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
     * 图片url地址，如http://xxx.xxx upload_type为UPLOAD_BY_URL必填
     */
    public function imageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
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
     * 通过此接口，用户可以上传和广告相关的素材图片，例如创意素材。
     */
    public function execute(): \Oceanengine\Models\FileImageAdV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['advertiser_id'] = $this->advertiserId;
        if ($this->filename !== null) {
            $formParams['filename'] = $this->filename;
        }
        if ($this->imageFile !== null) {
            $files['image_file'] = $this->imageFile;
        }
        if ($this->imageSignature !== null) {
            $formParams['image_signature'] = $this->imageSignature;
        }
        if ($this->imageUrl !== null) {
            $formParams['image_url'] = $this->imageUrl;
        }
        if ($this->isAigc !== null) {
            $formParams['is_aigc'] = $this->isAigc;
        }
        if ($this->uploadType !== null) {
            $formParams['upload_type'] = $this->uploadType;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/image/ad/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileImageAdV2Response::class);

        return $result['model'];
    }
}
