<?php

/**
 * 本文件由 go2php 生成，源: api_tools_event_assets_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * >查询广告主拥有的资产信息
 */
class ApiOpenApi2ToolsEventAssetsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主 id */
    private ?int $advertiserId = null;
    /** @var string 资产类型，允许值:&#x60;THIRD_EXTERNAL&#x60;:三方落地页,&#x60;APP&#x60;:应用,&#x60;QUICK_APP&#x60;:快应用,&#x60;MINI_PROGRAME&#x60;:小程序 */
    private ?string $assetType = null;
    /** @var \Oceanengine\Models\ToolsEventAssetsGetV2Filtering 过滤条件 */
    private ?\Oceanengine\Models\ToolsEventAssetsGetV2Filtering $filtering = null;
    /** @var string 排序方式，允许值：&#x60;ASC&#x60;：升序  &#x60;DESC&#x60;：降序&lt;br&gt;默认值&#x60;ASC&#x60; */
    private ?string $sortType = null;
    /** @var int 页码，默认值&#x60;1&#x60; */
    private ?int $page = null;
    /** @var int 页面大小，默认值&#x60;10&#x60;，最大&#x60;30&#x60; */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEventAssetsGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主 id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 资产类型，允许值:&#x60;THIRD_EXTERNAL&#x60;:三方落地页,&#x60;APP&#x60;:应用,&#x60;QUICK_APP&#x60;:快应用,&#x60;MINI_PROGRAME&#x60;:小程序
     */
    public function assetType(string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\ToolsEventAssetsGetV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 排序方式，允许值：&#x60;ASC&#x60;：升序  &#x60;DESC&#x60;：降序&lt;br&gt;默认值&#x60;ASC&#x60;
     */
    public function sortType(string $sortType): self
    {
        $this->sortType = $sortType;
        return $this;
    }

    /**
     * 页码，默认值&#x60;1&#x60;
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值&#x60;10&#x60;，最大&#x60;30&#x60;
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * >查询广告主拥有的资产信息
     */
    public function execute(): \Oceanengine\Models\ToolsEventAssetsGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->assetType === null) {
            throw new \InvalidArgumentException('assetType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['asset_type'] = $this->assetType;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->sortType !== null) {
            $queryParams['sort_type'] = $this->sortType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/event/assets/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEventAssetsGetV2Response::class);

        return $result['model'];
    }
}
