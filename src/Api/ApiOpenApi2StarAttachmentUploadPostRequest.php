<?php

/**
 * 本文件由 go2php 生成，源: api_star_attachment_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 任务材料上传
 */
class ApiOpenApi2StarAttachmentUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var \Oceanengine\FormFileInfo 上传的文件 */
    private ?\Oceanengine\FormFileInfo $file = null;
    /** @var string 文件名 */
    private ?string $fileName = null;
    /** @var int 星图客户ID */
    private ?int $starId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarAttachmentUploadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 上传的文件
     */
    public function file(\Oceanengine\FormFileInfo $file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * 文件名
     */
    public function fileName(string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 星图客户ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
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
     * 任务材料上传
     */
    public function execute(): \Oceanengine\Models\StarAttachmentUploadV2Response
    {
        if ($this->file === null) {
            throw new \InvalidArgumentException('file is required and must be specified');
        }
        if ($this->fileName === null) {
            throw new \InvalidArgumentException('fileName is required and must be specified');
        }
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->file !== null) {
            $files['file'] = $this->file;
        }
        $formParams['file_name'] = $this->fileName;
        $formParams['star_id'] = $this->starId;
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/attachment/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarAttachmentUploadV2Response::class);

        return $result['model'];
    }
}
