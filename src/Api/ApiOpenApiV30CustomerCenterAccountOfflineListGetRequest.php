<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_account_offline_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于获取超过10000条工作台账户下的管理的账户列表。（仅支持类型为CUSTOMER_ADMIN或CUSTOMER_OPERATOR的账户）。
 */
class ApiOpenApiV30CustomerCenterAccountOfflineListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 工作台账户ID，账户类型为&#x60;CUSTOMER_ADMIN&#x60;或&#x60;CUSTOMER_OPERATOR&#x60;对应账户ID */
    private ?int $accountId = null;
    /** @var \Oceanengine\Models\CustomerCenterAccountOfflineListV30Filter 过滤条件 */
    private ?\Oceanengine\Models\CustomerCenterAccountOfflineListV30Filter $filter = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CustomerCenterAccountOfflineListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 工作台账户ID，账户类型为&#x60;CUSTOMER_ADMIN&#x60;或&#x60;CUSTOMER_OPERATOR&#x60;对应账户ID
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filter(\Oceanengine\Models\CustomerCenterAccountOfflineListV30Filter $filter): self
    {
        $this->filter = $filter;
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
     * 用于获取超过10000条工作台账户下的管理的账户列表。（仅支持类型为CUSTOMER_ADMIN或CUSTOMER_OPERATOR的账户）。
     */
    public function execute(): \Oceanengine\Models\CustomerCenterAccountOfflineListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->filter === null) {
            throw new \InvalidArgumentException('filter is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/customer_center/account/offline_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CustomerCenterAccountOfflineListV30Response::class);

        return $result['model'];
    }
}
