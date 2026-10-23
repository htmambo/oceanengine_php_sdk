<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_harmony_app_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询鸿蒙应用列表
 */
class ApiOpenApi2ToolsAppManagementHarmonyAppListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;
    /** @var \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2Filtering 过滤器 */
    private ?\Oceanengine\Models\ToolsAppManagementHarmonyAppListV2Filtering $filtering = null;
    private ?string $accountAssetQueryScope = null;
    /** @var string 不传默认返回全部 */
    private ?string $assetGeneration = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementHarmonyAppListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\ToolsAppManagementHarmonyAppListV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function accountAssetQueryScope(string $accountAssetQueryScope): self
    {
        $this->accountAssetQueryScope = $accountAssetQueryScope;
        return $this;
    }

    /**
     * 不传默认返回全部
     */
    public function assetGeneration(string $assetGeneration): self
    {
        $this->assetGeneration = $assetGeneration;
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
     * 查询鸿蒙应用列表
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->accountAssetQueryScope !== null) {
            $queryParams['account_asset_query_scope'] = $this->accountAssetQueryScope;
        }
        if ($this->assetGeneration !== null) {
            $queryParams['asset_generation'] = $this->assetGeneration;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/harmony_app_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2Response::class);

        return $result['model'];
    }
}
