<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_data_source_file_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 数据源文件上传
 */
class ApiOpenApi2DmpDataSourceFileUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?\Oceanengine\FormFileInfo $file = null;
    private ?string $fileSignature = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DmpDataSourceFileUploadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function file(\Oceanengine\FormFileInfo $file): self
    {
        $this->file = $file;
        return $this;
    }

    public function fileSignature(string $fileSignature): self
    {
        $this->fileSignature = $fileSignature;
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
     * 数据源文件上传
     */
    public function execute(): \Oceanengine\Models\DmpDataSourceFileUploadV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->file === null) {
            throw new \InvalidArgumentException('file is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['advertiser_id'] = $this->advertiserId;
        if ($this->file !== null) {
            $files['file'] = $this->file;
        }
        if ($this->fileSignature !== null) {
            $formParams['file_signature'] = $this->fileSignature;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dmp/data_source/file/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DmpDataSourceFileUploadV2Response::class);

        return $result['model'];
    }
}
