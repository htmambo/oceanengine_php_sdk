<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_agent_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商可以通过此接口，上传视频素材
 */
class ApiOpenApi2FileVideoAgentPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商id */
    private ?int $agentId = null;
    /** @var string 视频上传名称 */
    private ?string $fileName = null;
    /** @var bool 标注是否允许授权(素材搬运)，目前只支持true */
    private ?bool $isNeedAuth = null;
    /** @var bool 标注是否为AIGC生成,默认false */
    private ?bool $isAigc = null;
    private ?string $uploadType = null;
    /** @var \Oceanengine\FormFileInfo 文件数据 */
    private ?\Oceanengine\FormFileInfo $videoFile = null;
    /** @var string 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填 */
    private ?string $videoSignature = null;
    /** @var string 视频URL地址，upload_type为UPLOAD_BY_URL必传 只支持连山tos地址 */
    private ?string $videoUrl = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileVideoAgentV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商id
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 视频上传名称
     */
    public function fileName(string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 标注是否允许授权(素材搬运)，目前只支持true
     */
    public function isNeedAuth(bool $isNeedAuth): self
    {
        $this->isNeedAuth = $isNeedAuth;
        return $this;
    }

    /**
     * 标注是否为AIGC生成,默认false
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

    /**
     * 文件数据
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
     * 视频URL地址，upload_type为UPLOAD_BY_URL必传 只支持连山tos地址
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
     * 代理商可以通过此接口，上传视频素材
     */
    public function execute(): \Oceanengine\Models\FileVideoAgentV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->fileName === null) {
            throw new \InvalidArgumentException('fileName is required and must be specified');
        }
        if ($this->isNeedAuth === null) {
            throw new \InvalidArgumentException('isNeedAuth is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['agent_id'] = $this->agentId;
        $formParams['file_name'] = $this->fileName;
        if ($this->isAigc !== null) {
            $formParams['is_aigc'] = $this->isAigc;
        }
        $formParams['is_need_auth'] = $this->isNeedAuth;
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
        $url = '/open_api/2/file/video/agent/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileVideoAgentV2Response::class);

        return $result['model'];
    }
}
