<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以上传和广告相关的素材视频。
 */
class ApiOpenApi2FileVideoAdPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名 */
    private ?string $filename = null;
    /** @var bool 视频素材是否为AIGC生成 */
    private ?bool $isAigc = null;
    /** @var bool 上传视频场景是否是引导视频 */
    private ?bool $isGuideVideo = null;
    private ?array $labels = null;
    private ?string $uploadType = null;
    /** @var string 视频封面 */
    private ?string $videoCoverId = null;
    /** @var \Oceanengine\FormFileInfo 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） upload_type为UPLOAD_BY_File必填 */
    private ?\Oceanengine\FormFileInfo $videoFile = null;
    /** @var string 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填 */
    private ?string $videoSignature = null;
    /** @var string 视频url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填 */
    private ?string $videoUrl = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileVideoAdV2ApiService $service)
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
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     */
    public function filename(string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * 视频素材是否为AIGC生成
     */
    public function isAigc(bool $isAigc): self
    {
        $this->isAigc = $isAigc;
        return $this;
    }

    /**
     * 上传视频场景是否是引导视频
     */
    public function isGuideVideo(bool $isGuideVideo): self
    {
        $this->isGuideVideo = $isGuideVideo;
        return $this;
    }

    public function labels(array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    public function uploadType(string $uploadType): self
    {
        $this->uploadType = $uploadType;
        return $this;
    }

    /**
     * 视频封面
     */
    public function videoCoverId(string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
        return $this;
    }

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） upload_type为UPLOAD_BY_File必填
     */
    public function videoFile(\Oceanengine\FormFileInfo $videoFile): self
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填
     */
    public function videoSignature(string $videoSignature): self
    {
        $this->videoSignature = $videoSignature;
        return $this;
    }

    /**
     * 视频url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填
     */
    public function videoUrl(string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
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
     * 通过此接口，用户可以上传和广告相关的素材视频。
     */
    public function execute(): \Oceanengine\Models\FileVideoAdV2Response
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
        if ($this->isAigc !== null) {
            $formParams['is_aigc'] = $this->isAigc;
        }
        if ($this->isGuideVideo !== null) {
            $formParams['is_guide_video'] = $this->isGuideVideo;
        }
        if ($this->labels !== null) {
            $formParams['labels'] = $this->labels;
        }
        if ($this->uploadType !== null) {
            $formParams['upload_type'] = $this->uploadType;
        }
        if ($this->videoCoverId !== null) {
            $formParams['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoFile !== null) {
            $files['video_file'] = $this->videoFile;
        }
        if ($this->videoSignature !== null) {
            $formParams['video_signature'] = $this->videoSignature;
        }
        if ($this->videoUrl !== null) {
            $formParams['video_url'] = $this->videoUrl;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/video/ad/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileVideoAdV2Response::class);

        return $result['model'];
    }
}
