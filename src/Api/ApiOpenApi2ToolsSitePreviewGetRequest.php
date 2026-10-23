<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_preview_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以获取已创建站点的预览地址
 * 预览地址有效期：20分钟
 */
class ApiOpenApi2ToolsSitePreviewGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id，广告主id， 传的这个advertiser_id的数字的范围：1 &lt;&#x3D; advertiser_id &lt;&#x3D; MAX_INT64 */
    private ?int $advertiserId = null;
    /** @var string 橙子建站站点id */
    private ?string $siteId = null;
    private ?string $xOrangeCaller = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSitePreviewV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id，广告主id， 传的这个advertiser_id的数字的范围：1 &lt;&#x3D; advertiser_id &lt;&#x3D; MAX_INT64
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 橙子建站站点id
     */
    public function siteId(string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function xOrangeCaller(string $xOrangeCaller): self
    {
        $this->xOrangeCaller = $xOrangeCaller;
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
     * 通过此接口，用户可以获取已创建站点的预览地址
     */
    public function execute(): \Oceanengine\Models\ToolsSitePreviewV2Response
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
        if ($this->xOrangeCaller !== null) {
            $headers['X-Orange-Caller'] = $this->xOrangeCaller;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site/preview/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSitePreviewV2Response::class);

        return $result['model'];
    }
}
