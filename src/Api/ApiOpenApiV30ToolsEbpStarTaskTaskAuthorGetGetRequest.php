<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_star_task_task_author_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取EBP星广联投任务已投稿达人信息，只支持通用版星广联投任务，不兼容短剧版
 */
class ApiOpenApiV30ToolsEbpStarTaskTaskAuthorGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID */
    private ?int $accountId = null;
    /** @var string 账户类型 */
    private ?string $accountType = null;
    /** @var int 星广任务ID */
    private ?int $starTaskId = null;
    /** @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30Filtering $filtering = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpStarTaskTaskAuthorGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户ID
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
     * 星广任务ID
     */
    public function starTaskId(int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30Filtering $filtering): self
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
     * 获取EBP星广联投任务已投稿达人信息，只支持通用版星广联投任务，不兼容短剧版
     */
    public function execute(): \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->starTaskId === null) {
            throw new \InvalidArgumentException('starTaskId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['star_task_id'] = $this->starTaskId;
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
        $url = '/open_api/v3.0/tools/ebp/star_task/task_author/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorGetV30Response::class);

        return $result['model'];
    }
}
