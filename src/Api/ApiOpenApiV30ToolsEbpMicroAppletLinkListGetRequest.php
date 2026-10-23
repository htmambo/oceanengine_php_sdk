<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_micro_applet_link_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取字节小程序link详情
 */
class ApiOpenApiV30ToolsEbpMicroAppletLinkListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?int $instanceId = null;
    private ?string $appId = null;
    private ?\Oceanengine\Models\ToolsEbpMicroAppletLinkListV30CreateTime $createTime = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpMicroAppletLinkListV30ApiService $service)
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

    public function instanceId(int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    public function appId(string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function createTime(\Oceanengine\Models\ToolsEbpMicroAppletLinkListV30CreateTime $createTime): self
    {
        $this->createTime = $createTime;
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
     * 获取字节小程序link详情
     */
    public function execute(): \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30Response
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
        if ($this->instanceId !== null) {
            $queryParams['instance_id'] = $this->instanceId;
        }
        if ($this->appId !== null) {
            $queryParams['app_id'] = $this->appId;
        }
        if ($this->createTime !== null) {
            $__encoded0 = json_encode($this->createTime);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: createTime');
            }
            $queryParams['create_time'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/micro_applet/link/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpMicroAppletLinkListV30Response::class);

        return $result['model'];
    }
}
