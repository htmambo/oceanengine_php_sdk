<?php

/**
 * 本文件由 go2php 生成，源: api_tools_comment_terms_banned_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * PM2
 */
class ApiOpenApiV30ToolsCommentTermsBannedDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsCommentTermsBannedDeleteV30Request $toolsCommentTermsBannedDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsCommentTermsBannedDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsCommentTermsBannedDeleteV30Request(\Oceanengine\Models\ToolsCommentTermsBannedDeleteV30Request $toolsCommentTermsBannedDeleteV30Request): self
    {
        $this->toolsCommentTermsBannedDeleteV30Request = $toolsCommentTermsBannedDeleteV30Request;
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
     * PM2
     */
    public function execute(): \Oceanengine\Models\ToolsCommentTermsBannedDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsCommentTermsBannedDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/comment/terms_banned/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsCommentTermsBannedDeleteV30Response::class);

        return $result['model'];
    }
}
