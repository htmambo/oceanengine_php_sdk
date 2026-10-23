<?php

/**
 * 本文件由 go2php 生成，源: api_tools_landing_group_site_opt_status_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以修改落地页组站点的启用状态。
 */
class ApiOpenApi2ToolsLandingGroupSiteOptStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $xOrangeCaller = null;
    private ?\Oceanengine\Models\ToolsLandingGroupSiteOptStatusUpdateV2Request $toolsLandingGroupSiteOptStatusUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsLandingGroupSiteOptStatusUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function xOrangeCaller(string $xOrangeCaller): self
    {
        $this->xOrangeCaller = $xOrangeCaller;
        return $this;
    }

    public function toolsLandingGroupSiteOptStatusUpdateV2Request(\Oceanengine\Models\ToolsLandingGroupSiteOptStatusUpdateV2Request $toolsLandingGroupSiteOptStatusUpdateV2Request): self
    {
        $this->toolsLandingGroupSiteOptStatusUpdateV2Request = $toolsLandingGroupSiteOptStatusUpdateV2Request;
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
     * 通过此接口，用户可以修改落地页组站点的启用状态。
     */
    public function execute(): \Oceanengine\Models\ToolsLandingGroupSiteOptStatusUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->xOrangeCaller !== null) {
            $headers['X-Orange-Caller'] = $this->xOrangeCaller;
        }
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsLandingGroupSiteOptStatusUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/landing_group/site_opt_status/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsLandingGroupSiteOptStatusUpdateV2Response::class);

        return $result['model'];
    }
}
