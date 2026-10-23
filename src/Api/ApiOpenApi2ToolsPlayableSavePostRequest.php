<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_save_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 上传并校验审核通过后，调用本接口保存试玩素材。
 */
class ApiOpenApi2ToolsPlayableSavePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPlayableSaveV2Request $toolsPlayableSaveV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPlayableSaveV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPlayableSaveV2Request(\Oceanengine\Models\ToolsPlayableSaveV2Request $toolsPlayableSaveV2Request): self
    {
        $this->toolsPlayableSaveV2Request = $toolsPlayableSaveV2Request;
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
     * 上传并校验审核通过后，调用本接口保存试玩素材。
     */
    public function execute(): \Oceanengine\Models\ToolsPlayableSaveV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPlayableSaveV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/playable/save/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPlayableSaveV2Response::class);

        return $result['model'];
    }
}
