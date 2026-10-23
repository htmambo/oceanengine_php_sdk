<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_template_site_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 基于站点创建模板
 */
class ApiOpenApi2ToolsSiteTemplateSiteCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2Request $toolsSiteTemplateSiteCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteTemplateSiteCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsSiteTemplateSiteCreateV2Request(\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2Request $toolsSiteTemplateSiteCreateV2Request): self
    {
        $this->toolsSiteTemplateSiteCreateV2Request = $toolsSiteTemplateSiteCreateV2Request;
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
     * 基于站点创建模板
     */
    public function execute(): \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsSiteTemplateSiteCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site_template/site/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2Response::class);

        return $result['model'];
    }
}
