<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aip_third_site_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，开发者可以获取广告主下标准第三方落地页站点详情。
 * > 需要注意的是预审的结果和最终的素材的审核结果可能存在出入，预审结果仅供参考。
 */
class ApiOpenApi2ToolsAipThirdSiteGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 站点id，暂不支持批量查询 */
    private ?int $siteId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAipThirdSiteGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 站点id，暂不支持批量查询
     */
    public function siteId(int $siteId): self
    {
        $this->siteId = $siteId;
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
     * 通过此接口，开发者可以获取广告主下标准第三方落地页站点详情。
     */
    public function execute(): \Oceanengine\Models\ToolsAipThirdSiteGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->siteId === null) {
            throw new \InvalidArgumentException('siteId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['site_id'] = $this->siteId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aip_third_site/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAipThirdSiteGetV2Response::class);

        return $result['model'];
    }
}
