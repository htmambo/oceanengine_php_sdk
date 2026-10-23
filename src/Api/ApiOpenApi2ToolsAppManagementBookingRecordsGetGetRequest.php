<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_booking_records_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询应用预约记录接口
 */
class ApiOpenApi2ToolsAppManagementBookingRecordsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $packageId = null;
    private ?string $hostType = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?\Oceanengine\Models\ToolsAppManagementBookingRecordsGetV2CreateTime $createTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementBookingRecordsGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function packageId(string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    public function hostType(string $hostType): self
    {
        $this->hostType = $hostType;
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

    public function createTime(\Oceanengine\Models\ToolsAppManagementBookingRecordsGetV2CreateTime $createTime): self
    {
        $this->createTime = $createTime;
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
     * 查询应用预约记录接口
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementBookingRecordsGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->packageId === null) {
            throw new \InvalidArgumentException('packageId is required and must be specified');
        }
        if ($this->hostType === null) {
            throw new \InvalidArgumentException('hostType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['package_id'] = $this->packageId;
        $queryParams['host_type'] = $this->hostType;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->createTime !== null) {
            $__encoded0 = json_encode($this->createTime);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: createTime');
            }
            $queryParams['create_time'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/booking_records/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementBookingRecordsGetV2Response::class);

        return $result['model'];
    }
}
