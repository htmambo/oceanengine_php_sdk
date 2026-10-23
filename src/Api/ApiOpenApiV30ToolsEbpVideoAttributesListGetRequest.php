<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_video_attributes_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取视频素材评估标签
 */
class ApiOpenApiV30ToolsEbpVideoAttributesListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 各平台账户id，需同时选择account_type类型 需传入「获取已授权账户」接口返回的advertiser_id */
    private ?int $accountId = null;
    /** @var string 账户类型，允许值： */
    private ?string $accountType = null;
    /** @var \Oceanengine\Models\ToolsEbpVideoAttributesListV30Filtering 过滤条件 */
    private ?\Oceanengine\Models\ToolsEbpVideoAttributesListV30Filtering $filtering = null;
    private ?bool $returnLowqualitySuggestions = null;
    /** @var int 页面数据量，默认值: 100，page*page_size 最大1000 */
    private ?int $pageSize = null;
    /** @var int 页码，默认值: 1，page*page_size 最大1000 */
    private ?int $page = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEbpVideoAttributesListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 各平台账户id，需同时选择account_type类型 需传入「获取已授权账户」接口返回的advertiser_id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户类型，允许值：
     */
    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\ToolsEbpVideoAttributesListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function returnLowqualitySuggestions(bool $returnLowqualitySuggestions): self
    {
        $this->returnLowqualitySuggestions = $returnLowqualitySuggestions;
        return $this;
    }

    /**
     * 页面数据量，默认值: 100，page*page_size 最大1000
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 页码，默认值: 1，page*page_size 最大1000
     */
    public function page(int $page): self
    {
        $this->page = $page;
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
     * 获取视频素材评估标签
     */
    public function execute(): \Oceanengine\Models\ToolsEbpVideoAttributesListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        if ($this->accountType !== null) {
            $queryParams['account_type'] = $this->accountType;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->returnLowqualitySuggestions !== null) {
            $queryParams['return_lowquality_suggestions'] = $this->returnLowqualitySuggestions;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/ebp/video_attributes/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEbpVideoAttributesListV30Response::class);

        return $result['model'];
    }
}
