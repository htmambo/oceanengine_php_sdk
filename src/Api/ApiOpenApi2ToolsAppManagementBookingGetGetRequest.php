<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_booking_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询游戏预约列表接口
 */
class ApiOpenApi2ToolsAppManagementBookingGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?string $searchKey = null;
    private ?string $searchType = null;
    private ?string $status = null;
    private ?\Oceanengine\Models\ToolsAppManagementBookingGetV2ScheduledPublishTime $scheduledPublishTime = null;
    private ?\Oceanengine\Models\ToolsAppManagementBookingGetV2CreateTime $createTime = null;
    private ?string $accountAssetQueryScope = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementBookingGetV2ApiService $service)
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

    public function scheduledPublishTime(\Oceanengine\Models\ToolsAppManagementBookingGetV2ScheduledPublishTime $scheduledPublishTime): self
    {
        $this->scheduledPublishTime = $scheduledPublishTime;
        return $this;
    }

    public function createTime(\Oceanengine\Models\ToolsAppManagementBookingGetV2CreateTime $createTime): self
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
     * 查询游戏预约列表接口
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementBookingGetV2Response
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
        if ($this->scheduledPublishTime !== null) {
            $__encoded0 = json_encode($this->scheduledPublishTime);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: scheduledPublishTime');
            }
            $queryParams['scheduled_publish_time'] = $__encoded0;
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
        $url = '/open_api/2/tools/app_management/booking/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementBookingGetV2Response::class);

        return $result['model'];
    }
}
