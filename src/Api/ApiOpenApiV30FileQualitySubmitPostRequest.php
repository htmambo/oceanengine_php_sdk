<?php

/**
 * 本文件由 go2php 生成，源: api_file_quality_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 素材属性提交分析
 */
class ApiOpenApiV30FileQualitySubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FileQualitySubmitV30Request $fileQualitySubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileQualitySubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fileQualitySubmitV30Request(\Oceanengine\Models\FileQualitySubmitV30Request $fileQualitySubmitV30Request): self
    {
        $this->fileQualitySubmitV30Request = $fileQualitySubmitV30Request;
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
     * 素材属性提交分析
     */
    public function execute(): \Oceanengine\Models\FileQualitySubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->fileQualitySubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/file/quality/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileQualitySubmitV30Response::class);

        return $result['model'];
    }
}
