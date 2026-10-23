<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_material_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量修改全域推广项目下素材状态
 */
class ApiOpenApiV30OcProjectMaterialStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OcProjectMaterialStatusUpdateV30Request $ocProjectMaterialStatusUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectMaterialStatusUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ocProjectMaterialStatusUpdateV30Request(\Oceanengine\Models\OcProjectMaterialStatusUpdateV30Request $ocProjectMaterialStatusUpdateV30Request): self
    {
        $this->ocProjectMaterialStatusUpdateV30Request = $ocProjectMaterialStatusUpdateV30Request;
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
     * 批量修改全域推广项目下素材状态
     */
    public function execute(): \Oceanengine\Models\OcProjectMaterialStatusUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ocProjectMaterialStatusUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/material/status/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectMaterialStatusUpdateV30Response::class);

        return $result['model'];
    }
}
