<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_material_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除全域推广项目下素材
 */
class ApiOpenApiV30OcProjectMaterialDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OcProjectMaterialDeleteV30Request $ocProjectMaterialDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectMaterialDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ocProjectMaterialDeleteV30Request(\Oceanengine\Models\OcProjectMaterialDeleteV30Request $ocProjectMaterialDeleteV30Request): self
    {
        $this->ocProjectMaterialDeleteV30Request = $ocProjectMaterialDeleteV30Request;
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
     * 删除全域推广项目下素材
     */
    public function execute(): \Oceanengine\Models\OcProjectMaterialDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ocProjectMaterialDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/material/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectMaterialDeleteV30Response::class);

        return $result['model'];
    }
}
