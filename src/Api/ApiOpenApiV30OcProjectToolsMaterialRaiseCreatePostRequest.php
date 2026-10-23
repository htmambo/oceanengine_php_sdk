<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_material_raise_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建素材起量调控任务
 */
class ApiOpenApiV30OcProjectToolsMaterialRaiseCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30Request $ocProjectToolsMaterialRaiseCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectToolsMaterialRaiseCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ocProjectToolsMaterialRaiseCreateV30Request(\Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30Request $ocProjectToolsMaterialRaiseCreateV30Request): self
    {
        $this->ocProjectToolsMaterialRaiseCreateV30Request = $ocProjectToolsMaterialRaiseCreateV30Request;
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
     * 创建素材起量调控任务
     */
    public function execute(): \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ocProjectToolsMaterialRaiseCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/tools_material_raise/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30Response::class);

        return $result['model'];
    }
}
