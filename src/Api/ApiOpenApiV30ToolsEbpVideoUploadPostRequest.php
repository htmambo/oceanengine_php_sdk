<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_video_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP上传视频
 */
class ApiOpenApiV30ToolsEbpVideoUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $accountType = null;
    /** @var string 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名 */
    private ?string $fileName = null;
    /** @var bool 视频素材是否为AIGC生成 */
    private ?bool $isAigc = null;
    private ?array $labels = null;
    private ?string $uploadType = null;
    /** @var \Oceanengine\FormFileInfo 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） upload_type为UPLOAD_BY_File必填 */
    private ?\Oceanengine\FormFileInfo $videoFile = null;
    /** @var string 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填 */
    private ?string $videoSignature = null;
    /** @var string 视频url地址 仅支持开发者购置连山云素材服务上传生成的tos链接上传，不支持其他三方链接地址 */
    private ?string $videoUrl = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpVideoUploadV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     */
    public function fileName(string $fileName): self
    {
        $this->fileName = $fileName;
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
     * 视频url地址 仅支持开发者购置连山云素材服务上传生成的tos链接上传，不支持其他三方链接地址
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
     * EBP上传视频
     */
    public function execute(): \Oceanengine\Models\ToolsEbpVideoUploadV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['account_id'] = $this->accountId;
        if ($this->accountType !== null) {
            $formParams['account_type'] = $this->accountType;
        }
        if ($this->fileName !== null) {
            $formParams['file_name'] = $this->fileName;
        }
        if ($this->isAigc !== null) {
            $formParams['is_aigc'] = $this->isAigc;
        }
        if ($this->labels !== null) {
            $formParams['labels'] = $this->labels;
        }
        if ($this->uploadType !== null) {
            $formParams['upload_type'] = $this->uploadType;
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
        $url = '/open_api/v3.0/tools/ebp/video/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpVideoUploadV30Response::class);

        return $result['model'];
    }
}
