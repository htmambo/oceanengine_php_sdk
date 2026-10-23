<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_playable_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP组织-上传试玩/直玩素材
 */
class ApiOpenApiV30ToolsEbpPlayableUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpPlayableUploadV30Request $toolsEbpPlayableUploadV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpPlayableUploadV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpPlayableUploadV30Request(\Oceanengine\Models\ToolsEbpPlayableUploadV30Request $toolsEbpPlayableUploadV30Request): self
    {
        $this->toolsEbpPlayableUploadV30Request = $toolsEbpPlayableUploadV30Request;
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
     * EBP组织-上传试玩/直玩素材
     */
    public function execute(): \Oceanengine\Models\ToolsEbpPlayableUploadV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpPlayableUploadV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/playable/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpPlayableUploadV30Response::class);

        return $result['model'];
    }
}
