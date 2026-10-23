<?php

/**
 * 本文件由 go2php 生成，源: api_tools_event_all_assets_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 包含我创建的资产+被共享的资产，返回结果与AD事件资产列表&详情信息对齐
 */
class ApiOpenApi2ToolsEventAllAssetsListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户id */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\ToolsEventAllAssetsListV2Filtering 过滤条件 */
    private ?\Oceanengine\Models\ToolsEventAllAssetsListV2Filtering $filtering = null;
    /** @var int 页数，默认值&#x60;1&#x60;，最大值&#x60;999999&#x60; */
    private ?int $page = null;
    /** @var int 页面大小，默认值&#x60;10&#x60;，最大&#x60;100&#x60; */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEventAllAssetsListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告账户id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\ToolsEventAllAssetsListV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页数，默认值&#x60;1&#x60;，最大值&#x60;999999&#x60;
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值&#x60;10&#x60;，最大&#x60;100&#x60;
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
     * 包含我创建的资产+被共享的资产，返回结果与AD事件资产列表&详情信息对齐
     */
    public function execute(): \Oceanengine\Models\ToolsEventAllAssetsListV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/event/all_assets/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEventAllAssetsListV2Response::class);

        return $result['model'];
    }
}
