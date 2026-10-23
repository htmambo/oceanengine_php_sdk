<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_material_raise_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除素材起量调控任务
 */
class ApiOpenApiV30OcProjectToolsMaterialRaiseDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OcProjectToolsMaterialRaiseDeleteV30Request $ocProjectToolsMaterialRaiseDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectToolsMaterialRaiseDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ocProjectToolsMaterialRaiseDeleteV30Request(\Oceanengine\Models\OcProjectToolsMaterialRaiseDeleteV30Request $ocProjectToolsMaterialRaiseDeleteV30Request): self
    {
        $this->ocProjectToolsMaterialRaiseDeleteV30Request = $ocProjectToolsMaterialRaiseDeleteV30Request;
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
     * 删除素材起量调控任务
     */
    public function execute(): \Oceanengine\Models\OcProjectToolsMaterialRaiseDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ocProjectToolsMaterialRaiseDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/tools_material_raise/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectToolsMaterialRaiseDeleteV30Response::class);

        return $result['model'];
    }
}
