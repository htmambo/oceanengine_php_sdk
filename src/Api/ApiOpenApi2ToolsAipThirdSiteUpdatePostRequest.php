<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aip_third_site_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 开发者可以在修改完第三方落地页的内容后，调用此接口更新站点再次发起落地页标准化校验。
 * >  注意：因校验落地页是否为标准第三方落地页是异步进行的，所以更新时若落地页不符合标准落地页规范，也可更新成功。开发者可通过【获取标准第三方落地页站点】接口返回的校验状态validate_status确认是否成功创建标准第三方落地页。
 */
class ApiOpenApi2ToolsAipThirdSiteUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAipThirdSiteUpdateV2Request $toolsAipThirdSiteUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAipThirdSiteUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAipThirdSiteUpdateV2Request(\Oceanengine\Models\ToolsAipThirdSiteUpdateV2Request $toolsAipThirdSiteUpdateV2Request): self
    {
        $this->toolsAipThirdSiteUpdateV2Request = $toolsAipThirdSiteUpdateV2Request;
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
     * 开发者可以在修改完第三方落地页的内容后，调用此接口更新站点再次发起落地页标准化校验。
     */
    public function execute(): \Oceanengine\Models\ToolsAipThirdSiteUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAipThirdSiteUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aip_third_site/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAipThirdSiteUpdateV2Response::class);

        return $result['model'];
    }
}
