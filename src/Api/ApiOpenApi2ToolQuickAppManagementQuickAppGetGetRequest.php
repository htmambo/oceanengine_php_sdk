<?php

/**
 * 本文件由 go2php 生成，源: api_tool_quick_app_management_quick_app_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询当前广告主的快应用
 */
class ApiOpenApi2ToolQuickAppManagementQuickAppGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string[] 应用状态:  AUDIT_DOING:审核中  AUDIT_SEND_REJECTED：送审失败 AUDIT_REJECTED:审核失败  AUDIT_ACCEPTED:审核成功 REMOVED：已下架 */
    private ?array $status = null;
    /** @var int 页码，默认值为1 */
    private ?int $page = null;
    /** @var int 页面大小，默认值为10，最大不超过100 */
    private ?int $pageSize = null;
    /** @var \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2UpdateTime 修改时间 */
    private ?\Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2UpdateTime $updateTime = null;
    /** @var string 搜索关键字 快应用名称或者包名的模糊搜索，可以为空，可以传中文 */
    private ?string $searchKey = null;
    /** @var int[] 快应用ids */
    private ?array $quickAppIds = null;
    private ?string $assetGeneration = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolQuickAppManagementQuickAppGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 应用状态:  AUDIT_DOING:审核中  AUDIT_SEND_REJECTED：送审失败 AUDIT_REJECTED:审核失败  AUDIT_ACCEPTED:审核成功 REMOVED：已下架
     */
    public function status(array $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 页码，默认值为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值为10，最大不超过100
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 修改时间
     */
    public function updateTime(\Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2UpdateTime $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * 搜索关键字 快应用名称或者包名的模糊搜索，可以为空，可以传中文
     */
    public function searchKey(string $searchKey): self
    {
        $this->searchKey = $searchKey;
        return $this;
    }

    /**
     * 快应用ids
     */
    public function quickAppIds(array $quickAppIds): self
    {
        $this->quickAppIds = $quickAppIds;
        return $this;
    }

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
     * 查询当前广告主的快应用
     */
    public function execute(): \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->updateTime !== null) {
            $__encoded0 = json_encode($this->updateTime);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: updateTime');
            }
            $queryParams['update_time'] = $__encoded0;
        }
        if ($this->searchKey !== null) {
            $queryParams['search_key'] = $this->searchKey;
        }
        if ($this->quickAppIds !== null) {
            $queryParams['quick_app_ids'] = $this->quickAppIds;
        }
        if ($this->assetGeneration !== null) {
            $queryParams['asset_generation'] = $this->assetGeneration;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tool/quick_app_management/quick_app/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolQuickAppManagementQuickAppGetV2Response::class);

        return $result['model'];
    }
}
