<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_clue_product_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * EBP场景下，通过团队ID/advId获取升级版商品列表
 */
class ApiOpenApiV30DpaEbpClueProductListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?int $offset = null;
    private ?int $limit = null;
    /** @var int[] 商品id精确搜索 */
    private ?array $productIds = null;
    /** @var string 商品名模糊搜索 */
    private ?string $productName = null;
    /** @var string[] 审核状态 */
    private ?array $auditStatus = null;
    /** @var int[] 行业id，会级联查询所有叶子节点 */
    private ?array $categoryIds = null;
    /** @var string 商品id精确 or 商品名称 （实现上，19位长度数字视为id） */
    private ?string $productIdOrNameSearch = null;
    /** @var string[] 可投状态过滤 */
    private ?array $statuses = null;
    /** @var \Oceanengine\Models\DpaEbpClueProductListV30AssetQueryScope EBP资产查询范围，作用于归属于ebp部分的数据 */
    private ?\Oceanengine\Models\DpaEbpClueProductListV30AssetQueryScope $assetQueryScope = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaEbpClueProductListV30ApiService $service)
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

    public function offset(int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function limit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * 商品id精确搜索
     */
    public function productIds(array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * 商品名模糊搜索
     */
    public function productName(string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 审核状态
     */
    public function auditStatus(array $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 行业id，会级联查询所有叶子节点
     */
    public function categoryIds(array $categoryIds): self
    {
        $this->categoryIds = $categoryIds;
        return $this;
    }

    /**
     * 商品id精确 or 商品名称 （实现上，19位长度数字视为id）
     */
    public function productIdOrNameSearch(string $productIdOrNameSearch): self
    {
        $this->productIdOrNameSearch = $productIdOrNameSearch;
        return $this;
    }

    /**
     * 可投状态过滤
     */
    public function statuses(array $statuses): self
    {
        $this->statuses = $statuses;
        return $this;
    }

    /**
     * EBP资产查询范围，作用于归属于ebp部分的数据
     */
    public function assetQueryScope(\Oceanengine\Models\DpaEbpClueProductListV30AssetQueryScope $assetQueryScope): self
    {
        $this->assetQueryScope = $assetQueryScope;
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
     * EBP场景下，通过团队ID/advId获取升级版商品列表
     */
    public function execute(): \Oceanengine\Models\DpaEbpClueProductListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->offset === null) {
            throw new \InvalidArgumentException('offset is required and must be specified');
        }
        if ($this->limit === null) {
            throw new \InvalidArgumentException('limit is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        if ($this->productIds !== null) {
            $queryParams['product_ids'] = $this->productIds;
        }
        if ($this->productName !== null) {
            $queryParams['product_name'] = $this->productName;
        }
        if ($this->auditStatus !== null) {
            $queryParams['audit_status'] = $this->auditStatus;
        }
        if ($this->categoryIds !== null) {
            $queryParams['category_ids'] = $this->categoryIds;
        }
        if ($this->productIdOrNameSearch !== null) {
            $queryParams['product_id_or_name_search'] = $this->productIdOrNameSearch;
        }
        if ($this->statuses !== null) {
            $queryParams['statuses'] = $this->statuses;
        }
        if ($this->assetQueryScope !== null) {
            $__encoded0 = json_encode($this->assetQueryScope);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: assetQueryScope');
            }
            $queryParams['asset_query_scope'] = $__encoded0;
        }
        $queryParams['offset'] = $this->offset;
        $queryParams['limit'] = $this->limit;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/dpa/ebp/clue_product/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaEbpClueProductListV30Response::class);

        return $result['model'];
    }
}
