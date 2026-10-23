<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_read_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以获取站点的详细信息，包括新建或更新时传递的全量数据。
 */
class ApiOpenApi2ToolsSiteReadGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $xOrangeCaller = null;
    /** @var string 广告主id，广告主id， 传的这个advertiser_id的数字的范围：1 &lt;&#x3D; advertiser_id &lt;&#x3D; MAX_INT64 */
    private ?string $advertiserId = null;
    /** @var string 橙子建站站点id */
    private ?string $siteId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteReadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function xOrangeCaller(string $xOrangeCaller): self
    {
        $this->xOrangeCaller = $xOrangeCaller;
        return $this;
    }

    /**
     * 广告主id，广告主id， 传的这个advertiser_id的数字的范围：1 &lt;&#x3D; advertiser_id &lt;&#x3D; MAX_INT64
     */
    public function advertiserId(string $advertiserId): self
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
     * 通过此接口，用户可以获取站点的详细信息，包括新建或更新时传递的全量数据。
     */
    public function execute(): \Oceanengine\Models\ToolsSiteReadV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->siteId !== null) {
            $queryParams['site_id'] = $this->siteId;
        }
        if ($this->xOrangeCaller !== null) {
            $headers['x-orange-caller'] = $this->xOrangeCaller;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site/read/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteReadV2Response::class);

        return $result['model'];
    }
}
