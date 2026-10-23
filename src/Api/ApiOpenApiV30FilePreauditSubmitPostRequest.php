<?php

/**
 * 本文件由 go2php 生成，源: api_file_preaudit_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 素材预审提交
 */
class ApiOpenApiV30FilePreauditSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FilePreauditSubmitV30Request $filePreauditSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FilePreauditSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function filePreauditSubmitV30Request(\Oceanengine\Models\FilePreauditSubmitV30Request $filePreauditSubmitV30Request): self
    {
        $this->filePreauditSubmitV30Request = $filePreauditSubmitV30Request;
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
     * 素材预审提交
     */
    public function execute(): \Oceanengine\Models\FilePreauditSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->filePreauditSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/file/preaudit/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FilePreauditSubmitV30Response::class);

        return $result['model'];
    }
}
