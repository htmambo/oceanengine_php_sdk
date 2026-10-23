<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_audience_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 编辑定向调控任务
 */
class ApiOpenApiV30OcProjectToolsAudienceUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OcProjectToolsAudienceUpdateV30Request $ocProjectToolsAudienceUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectToolsAudienceUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ocProjectToolsAudienceUpdateV30Request(\Oceanengine\Models\OcProjectToolsAudienceUpdateV30Request $ocProjectToolsAudienceUpdateV30Request): self
    {
        $this->ocProjectToolsAudienceUpdateV30Request = $ocProjectToolsAudienceUpdateV30Request;
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
     * 编辑定向调控任务
     */
    public function execute(): \Oceanengine\Models\OcProjectToolsAudienceUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ocProjectToolsAudienceUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/tools_audience/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectToolsAudienceUpdateV30Response::class);

        return $result['model'];
    }
}
