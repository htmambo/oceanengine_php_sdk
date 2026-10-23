<?php

/**
 * 本文件由 go2php 生成，源: api_tools_task_raise_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询优选起量任务
 */
class ApiOpenApi2ToolsTaskRaiseGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 页数。默认值: 1，page范围为[1,99999] */
    private ?int $page = null;
    /** @var int 页面大小。默认值:10，page_size范围为[1,100] */
    private ?int $pageSize = null;
    /** @var string 2.0平台填2 */
    private ?string $platformVersion = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsTaskRaiseGetV2ApiService $service)
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
     * 页数。默认值: 1，page范围为[1,99999]
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小。默认值:10，page_size范围为[1,100]
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 2.0平台填2
     */
    public function platformVersion(string $platformVersion): self
    {
        $this->platformVersion = $platformVersion;
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
     * 查询优选起量任务
     */
    public function execute(): \Oceanengine\Models\ToolsTaskRaiseGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->page < 1) {
            throw new \InvalidArgumentException('page must be greater than 1');
        }
        if ($this->page > 99999) {
            throw new \InvalidArgumentException('page must be less than 99999');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize < 1) {
            throw new \InvalidArgumentException('pageSize must be greater than 1');
        }
        if ($this->pageSize > 100) {
            throw new \InvalidArgumentException('pageSize must be less than 100');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        if ($this->platformVersion !== null) {
            $queryParams['platform_version'] = $this->platformVersion;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/task_raise/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsTaskRaiseGetV2Response::class);

        return $result['model'];
    }
}
