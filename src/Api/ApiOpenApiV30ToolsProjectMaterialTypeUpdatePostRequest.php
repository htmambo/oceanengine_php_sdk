<?php

/**
 * 本文件由 go2php 生成，源: api_tools_project_material_type_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新标准项目的自选素材开关及素材列表，内部通过服务编排串联标准项目更新逻辑，对照 std_project/update 实现
 */
class ApiOpenApiV30ToolsProjectMaterialTypeUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30Request $toolsProjectMaterialTypeUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsProjectMaterialTypeUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsProjectMaterialTypeUpdateV30Request(\Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30Request $toolsProjectMaterialTypeUpdateV30Request): self
    {
        $this->toolsProjectMaterialTypeUpdateV30Request = $toolsProjectMaterialTypeUpdateV30Request;
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
     * 更新标准项目的自选素材开关及素材列表，内部通过服务编排串联标准项目更新逻辑，对照 std_project/update 实现
     */
    public function execute(): \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsProjectMaterialTypeUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/project_material_type/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30Response::class);

        return $result['model'];
    }
}
