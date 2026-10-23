<?php

/**
 * 本文件由 go2php 生成，源: api_file_material_bind_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 素材推送
 */
class ApiOpenApi2FileMaterialBindPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\FileMaterialBindV2Request $fileMaterialBindV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileMaterialBindV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function fileMaterialBindV2Request(\Oceanengine\Models\FileMaterialBindV2Request $fileMaterialBindV2Request): self
    {
        $this->fileMaterialBindV2Request = $fileMaterialBindV2Request;
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
     * 素材推送
     */
    public function execute(): \Oceanengine\Models\FileMaterialBindV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->fileMaterialBindV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/material/bind/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileMaterialBindV2Response::class);

        return $result['model'];
    }
}
