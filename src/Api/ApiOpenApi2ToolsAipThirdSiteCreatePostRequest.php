<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aip_third_site_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，开发者可以创建标准第三方落地页站点。
 * > 注意：因校验落地页是否为标准第三方落地页是异步进行的，所以创建时若落地页不符合标准落地页规范，也可创建成功。开发者可通过【获取标准第三方落地页站点】接口返回的校验状态validate_status确认是否成功创建标准第三方落地页。
 */
class ApiOpenApi2ToolsAipThirdSiteCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAipThirdSiteCreateV2Request $toolsAipThirdSiteCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAipThirdSiteCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAipThirdSiteCreateV2Request(\Oceanengine\Models\ToolsAipThirdSiteCreateV2Request $toolsAipThirdSiteCreateV2Request): self
    {
        $this->toolsAipThirdSiteCreateV2Request = $toolsAipThirdSiteCreateV2Request;
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
     * 通过此接口，开发者可以创建标准第三方落地页站点。
     */
    public function execute(): \Oceanengine\Models\ToolsAipThirdSiteCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAipThirdSiteCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aip_third_site/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAipThirdSiteCreateV2Response::class);

        return $result['model'];
    }
}
