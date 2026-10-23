<?php

/**
 * 本文件由 go2php 生成，源: api_tools_wechat_applet_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * openapi场景下的小程序获取接口
 */
class ApiOpenApiV30ToolsWechatAppletListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?\Oceanengine\Models\ToolsWechatAppletListV30Filtering $filtering = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    /** @var string 排序方式，允许值： ASC 升序 DESC 降序（默认值） */
    private ?string $orderType = null;
    /** @var string 排序字段，允许值： create_time modify_time (默认值) */
    private ?string $orderField = null;
    private ?string $accountAssetQueryScope = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsWechatAppletListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function filtering(\Oceanengine\Models\ToolsWechatAppletListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 排序方式，允许值： ASC 升序 DESC 降序（默认值）
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 排序字段，允许值： create_time modify_time (默认值)
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    public function accountAssetQueryScope(string $accountAssetQueryScope): self
    {
        $this->accountAssetQueryScope = $accountAssetQueryScope;
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
     * openapi场景下的小程序获取接口
     */
    public function execute(): \Oceanengine\Models\ToolsWechatAppletListV30Response
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
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->accountAssetQueryScope !== null) {
            $queryParams['account_asset_query_scope'] = $this->accountAssetQueryScope;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/wechat_applet/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsWechatAppletListV30Response::class);

        return $result['model'];
    }
}
