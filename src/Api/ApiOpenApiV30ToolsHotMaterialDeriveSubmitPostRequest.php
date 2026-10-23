<?php

/**
 * 本文件由 go2php 生成，源: api_tools_hot_material_derive_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 提交爆款裂变任务
 */
class ApiOpenApiV30ToolsHotMaterialDeriveSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30Request $toolsHotMaterialDeriveSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsHotMaterialDeriveSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsHotMaterialDeriveSubmitV30Request(\Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30Request $toolsHotMaterialDeriveSubmitV30Request): self
    {
        $this->toolsHotMaterialDeriveSubmitV30Request = $toolsHotMaterialDeriveSubmitV30Request;
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
     * 提交爆款裂变任务
     */
    public function execute(): \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsHotMaterialDeriveSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/hot_material_derive/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30Response::class);

        return $result['model'];
    }
}
