<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以获取广告主建站列表。
 * 列表栏包括建站ID、建站名称、建站状态、建站类型、建站类别、站点缩略图等信息。
 */
class ApiOpenApi2ToolsSiteGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id，范围：1 &lt;&#x3D; advertiser_id &lt;&#x3D; MAX_INT64 */
    private ?int $advertiserId = null;
    private ?string $xOrangeCaller = null;
    /** @var int 页码，默认值: 1，范围：page &gt;&#x3D; 1 */
    private ?int $page = null;
    /** @var int 页面数据量，默认值：10，范围：20～300 */
    private ?int $pageSize = null;
    /** @var string 建站粗粒度状态，详见【附录-枚举值-建站粗粒度状态】 */
    private ?string $status = null;
    private ?string $shareType = null;
    /** @var \Oceanengine\Models\ToolsSiteGetV2Filtering 过滤条件 */
    private ?\Oceanengine\Models\ToolsSiteGetV2Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id，范围：1 &lt;&#x3D; advertiser_id &lt;&#x3D; MAX_INT64
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function xOrangeCaller(string $xOrangeCaller): self
    {
        $this->xOrangeCaller = $xOrangeCaller;
        return $this;
    }

    /**
     * 页码，默认值: 1，范围：page &gt;&#x3D; 1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面数据量，默认值：10，范围：20～300
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 建站粗粒度状态，详见【附录-枚举值-建站粗粒度状态】
     */
    public function status(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function shareType(string $shareType): self
    {
        $this->shareType = $shareType;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\ToolsSiteGetV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * 通过此接口，用户可以获取广告主建站列表。
     */
    public function execute(): \Oceanengine\Models\ToolsSiteGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->shareType !== null) {
            $queryParams['share_type'] = $this->shareType;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->xOrangeCaller !== null) {
            $headers['X-Orange-Caller'] = $this->xOrangeCaller;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteGetV2Response::class);

        return $result['model'];
    }
}
