<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_upload_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建异步下载任务「支持所有账户体系】 可通过请求参数account_id 账户id和account_type 账户类型，执行异步下载&上传到TOS&apk解析。
 */
class ApiOpenApi2ToolsAppManagementUploadTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2Request $toolsAppManagementUploadTaskCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAppManagementUploadTaskCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsAppManagementUploadTaskCreateV2Request(\Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2Request $toolsAppManagementUploadTaskCreateV2Request): self
    {
        $this->toolsAppManagementUploadTaskCreateV2Request = $toolsAppManagementUploadTaskCreateV2Request;
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
     * 创建异步下载任务「支持所有账户体系】 可通过请求参数account_id 账户id和account_type 账户类型，执行异步下载&上传到TOS&apk解析。
     */
    public function execute(): \Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsAppManagementUploadTaskCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/app_management/upload_task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2Response::class);

        return $result['model'];
    }
}
