<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取橙子建站站点列表
 */
class ApiOpenApi2ToolsSiteTemplateCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsSiteTemplateCreateV2Request $toolsSiteTemplateCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteTemplateCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsSiteTemplateCreateV2Request(\Oceanengine\Models\ToolsSiteTemplateCreateV2Request $toolsSiteTemplateCreateV2Request): self
    {
        $this->toolsSiteTemplateCreateV2Request = $toolsSiteTemplateCreateV2Request;
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
     * 获取橙子建站站点列表
     */
    public function execute(): \Oceanengine\Models\ToolsSiteTemplateCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsSiteTemplateCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site_template/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteTemplateCreateV2Response::class);

        return $result['model'];
    }
}
