<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_material_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量添加智擎版项目下素材
 */
class ApiOpenApiV30OcProjectMaterialCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OcProjectMaterialCreateV30Request $ocProjectMaterialCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectMaterialCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ocProjectMaterialCreateV30Request(\Oceanengine\Models\OcProjectMaterialCreateV30Request $ocProjectMaterialCreateV30Request): self
    {
        $this->ocProjectMaterialCreateV30Request = $ocProjectMaterialCreateV30Request;
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
     * 批量添加智擎版项目下素材
     */
    public function execute(): \Oceanengine\Models\OcProjectMaterialCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ocProjectMaterialCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/material/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectMaterialCreateV30Response::class);

        return $result['model'];
    }
}
