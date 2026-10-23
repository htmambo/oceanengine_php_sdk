<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_playable_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP组织-删除试玩/直玩素材
 */
class ApiOpenApiV30ToolsEbpPlayableDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsEbpPlayableDeleteV30Request $toolsEbpPlayableDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpPlayableDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsEbpPlayableDeleteV30Request(\Oceanengine\Models\ToolsEbpPlayableDeleteV30Request $toolsEbpPlayableDeleteV30Request): self
    {
        $this->toolsEbpPlayableDeleteV30Request = $toolsEbpPlayableDeleteV30Request;
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
     * EBP组织-删除试玩/直玩素材
     */
    public function execute(): \Oceanengine\Models\ToolsEbpPlayableDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsEbpPlayableDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/playable/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpPlayableDeleteV30Response::class);

        return $result['model'];
    }
}
