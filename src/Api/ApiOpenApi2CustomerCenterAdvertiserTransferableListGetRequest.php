<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_advertiser_transferable_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 本接口用于查询管家或者广告主的可转账列表
 * 注意：暂不支持代理商角色账号获取
 * 报错：账户角色不能为一代或者二代代理商
 */
class ApiOpenApi2CustomerCenterAdvertiserTransferableListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $transferAccountType = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CustomerCenterAdvertiserTransferableListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function transferAccountType(string $transferAccountType): self
    {
        $this->transferAccountType = $transferAccountType;
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
     * 本接口用于查询管家或者广告主的可转账列表
     */
    public function execute(): \Oceanengine\Models\CustomerCenterAdvertiserTransferableListV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->transferAccountType !== null) {
            $queryParams['transfer_account_type'] = $this->transferAccountType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/customer_center/advertiser/transferable/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CustomerCenterAdvertiserTransferableListV2Response::class);

        return $result['model'];
    }
}
