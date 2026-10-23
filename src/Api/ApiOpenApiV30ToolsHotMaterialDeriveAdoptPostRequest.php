<?php

/**
 * 本文件由 go2php 生成，源: api_tools_hot_material_derive_adopt_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 爆款裂变采纳
 */
class ApiOpenApiV30ToolsHotMaterialDeriveAdoptPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30Request $toolsHotMaterialDeriveAdoptV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsHotMaterialDeriveAdoptV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsHotMaterialDeriveAdoptV30Request(\Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30Request $toolsHotMaterialDeriveAdoptV30Request): self
    {
        $this->toolsHotMaterialDeriveAdoptV30Request = $toolsHotMaterialDeriveAdoptV30Request;
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
     * 爆款裂变采纳
     */
    public function execute(): \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsHotMaterialDeriveAdoptV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/hot_material_derive/adopt/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30Response::class);

        return $result['model'];
    }
}
