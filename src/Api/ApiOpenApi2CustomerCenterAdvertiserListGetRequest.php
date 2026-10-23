<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_advertiser_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取当前纵横组织下的资产账户列表（广告主，企业号），如果纵横组织下还有子级组织账号，会把cc_account_id下所有可操作的资产账户全量返回
 */
class ApiOpenApi2CustomerCenterAdvertiserListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $accountSource = null;
    private ?int $ccAccountId = null;
    private ?\Oceanengine\Models\CustomerCenterAdvertiserListV2Filtering $filtering = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CustomerCenterAdvertiserListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountSource(string $accountSource): self
    {
        $this->accountSource = $accountSource;
        return $this;
    }

    public function ccAccountId(int $ccAccountId): self
    {
        $this->ccAccountId = $ccAccountId;
        return $this;
    }

    public function filtering(\Oceanengine\Models\CustomerCenterAdvertiserListV2Filtering $filtering): self
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
     * 获取当前纵横组织下的资产账户列表（广告主，企业号），如果纵横组织下还有子级组织账号，会把cc_account_id下所有可操作的资产账户全量返回
     */
    public function execute(): \Oceanengine\Models\CustomerCenterAdvertiserListV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->accountSource !== null) {
            $queryParams['account_source'] = $this->accountSource;
        }
        if ($this->ccAccountId !== null) {
            $queryParams['cc_account_id'] = $this->ccAccountId;
        }
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
        $url = '/open_api/2/customer_center/advertiser/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CustomerCenterAdvertiserListV2Response::class);

        return $result['model'];
    }
}
