<?php

/**
 * 本文件由 go2php 生成，源: api_file_material_attributes_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取各平台素材属性列表
 */
class ApiOpenApi2FileMaterialAttributesListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 各平台账户id，需同时选择account_type类型 需传入「获取已授权账户」接口返回的advertiser_id */
    private ?int $accountId = null;
    /** @var string 账户类型，允许值： */
    private ?string $accountType = null;
    /** @var int 页面数据量，默认值: 100，page*page_size 最大1000 */
    private ?int $pageSize = null;
    /** @var int 页码，默认值: 1，page*page_size 最大1000 */
    private ?int $page = null;
    /** @var \Oceanengine\Models\FileMaterialAttributesListV2Filtering 过滤条件 */
    private ?\Oceanengine\Models\FileMaterialAttributesListV2Filtering $filtering = null;
    private ?bool $returnLowqualitySuggestions = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileMaterialAttributesListV2ApiService $service)
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

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\FileMaterialAttributesListV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function returnLowqualitySuggestions(bool $returnLowqualitySuggestions): self
    {
        $this->returnLowqualitySuggestions = $returnLowqualitySuggestions;
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
     * 获取各平台素材属性列表
     */
    public function execute(): \Oceanengine\Models\FileMaterialAttributesListV2Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize < 1) {
            throw new \InvalidArgumentException('pageSize must be greater than 1');
        }
        if ($this->pageSize > 1000) {
            throw new \InvalidArgumentException('pageSize must be less than 1000');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->page < 1) {
            throw new \InvalidArgumentException('page must be greater than 1');
        }
        if ($this->page > 1000) {
            throw new \InvalidArgumentException('page must be less than 1000');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
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
        $queryParams['page_size'] = $this->pageSize;
        $queryParams['page'] = $this->page;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/material_attributes/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileMaterialAttributesListV2Response::class);

        return $result['model'];
    }
}
