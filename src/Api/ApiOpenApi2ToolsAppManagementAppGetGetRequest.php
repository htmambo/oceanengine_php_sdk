<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_app_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询应用信息 可通过请求参数advertiser_id广告主id 查询广告主下应用列表及应用详细信息，具体返回信息见返回参数
 */
class ApiOpenApi2ToolsAppManagementAppGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?string $searchKey = null;
    private ?string $searchType = null;
    private ?string $status = null;
    private ?\Oceanengine\Models\ToolsAppManagementAppGetV2PublishTime $publishTime = null;
    private ?\Oceanengine\Models\ToolsAppManagementAppGetV2CreateTime $createTime = null;
    private ?string $accountAssetQueryScope = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementAppGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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

    public function searchKey(string $searchKey): self
    {
        $this->searchKey = $searchKey;
        return $this;
    }

    public function searchType(string $searchType): self
    {
        $this->searchType = $searchType;
        return $this;
    }

    public function status(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function publishTime(\Oceanengine\Models\ToolsAppManagementAppGetV2PublishTime $publishTime): self
    {
        $this->publishTime = $publishTime;
        return $this;
    }

    public function createTime(\Oceanengine\Models\ToolsAppManagementAppGetV2CreateTime $createTime): self
    {
        $this->createTime = $createTime;
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
     * 查询应用信息 可通过请求参数advertiser_id广告主id 查询广告主下应用列表及应用详细信息，具体返回信息见返回参数
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementAppGetV2Response
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
        if ($this->searchKey !== null) {
            $queryParams['search_key'] = $this->searchKey;
        }
        if ($this->searchType !== null) {
            $queryParams['search_type'] = $this->searchType;
        }
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->publishTime !== null) {
            $__encoded0 = json_encode($this->publishTime);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: publishTime');
            }
            $queryParams['publish_time'] = $__encoded0;
        }
        if ($this->createTime !== null) {
            $__encoded1 = json_encode($this->createTime);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: createTime');
            }
            $queryParams['create_time'] = $__encoded1;
        }
        if ($this->accountAssetQueryScope !== null) {
            $queryParams['account_asset_query_scope'] = $this->accountAssetQueryScope;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/app/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementAppGetV2Response::class);

        return $result['model'];
    }
}
