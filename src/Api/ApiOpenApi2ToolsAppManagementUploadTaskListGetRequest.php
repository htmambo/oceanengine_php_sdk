<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_upload_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询异步上传解析任务的状态信息「支持所有账户体系」
 */
class ApiOpenApi2ToolsAppManagementUploadTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户id指可以接的账号体系如广告主id、巨量纵横组织id等 */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    /** @var \Oceanengine\Models\ToolsAppManagementUploadTaskListV2Filtering 过滤条件 */
    private ?\Oceanengine\Models\ToolsAppManagementUploadTaskListV2Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementUploadTaskListV2ApiService $service)
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

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\ToolsAppManagementUploadTaskListV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * 查询异步上传解析任务的状态信息「支持所有账户体系」
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementUploadTaskListV2Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/upload_task/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementUploadTaskListV2Response::class);

        return $result['model'];
    }
}
