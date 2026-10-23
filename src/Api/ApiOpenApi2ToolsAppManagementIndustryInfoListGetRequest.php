<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_industry_info_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取应用细分分类及题材标签「支持所有账户体系】 可通过请求参数account_id 账户id（指可以接的账号体系如广告主id、bpid等）和account_type 账户类型，查询所有应用细分分类及题材标签情况。
 */
class ApiOpenApi2ToolsAppManagementIndustryInfoListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户id指可以接的账号体系如广告主id、巨量纵横组织id等 */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementIndustryInfoListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户类型
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
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
     * 获取应用细分分类及题材标签「支持所有账户体系】 可通过请求参数account_id 账户id（指可以接的账号体系如广告主id、bpid等）和account_type 账户类型，查询所有应用细分分类及题材标签情况。
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountId < 1) {
            throw new \InvalidArgumentException('accountId must be greater than 1');
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
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/industry_info/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2Response::class);

        return $result['model'];
    }
}
