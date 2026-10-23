<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创编2.0广告列表
 */
class ApiOpenApiV30PromotionListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?\Oceanengine\Models\PromotionListV30Filtering $filtering = null;
    private ?array $fields = null;
    /** @var string RETURN_CARRY_DATA 返回视频素材的搬运属性 */
    private ?string $includingMaterialAtrributes = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    /** @var int 页码游标值，第一次拉取，无需入参 同时传入时，cursor优先级大于page 注：page+page_size与cursor+count为两种分页方式 cursor+count适用于获取数据记录数≥10000的场景 */
    private ?int $cursor = null;
    /** @var int 页面数据量 注：page+page_size与cursor+count为两种分页方式 cursor+count适用于获取数据记录数≥10000的场景 */
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(PromotionListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function filtering(\Oceanengine\Models\PromotionListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * RETURN_CARRY_DATA 返回视频素材的搬运属性
     */
    public function includingMaterialAtrributes(string $includingMaterialAtrributes): self
    {
        $this->includingMaterialAtrributes = $includingMaterialAtrributes;
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

    /**
     * 页码游标值，第一次拉取，无需入参 同时传入时，cursor优先级大于page 注：page+page_size与cursor+count为两种分页方式 cursor+count适用于获取数据记录数≥10000的场景
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 页面数据量 注：page+page_size与cursor+count为两种分页方式 cursor+count适用于获取数据记录数≥10000的场景
     */
    public function count(int $count): self
    {
        $this->count = $count;
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
     * 创编2.0广告列表
     */
    public function execute(): \Oceanengine\Models\PromotionListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->fields !== null) {
            $queryParams['fields'] = $this->fields;
        }
        if ($this->includingMaterialAtrributes !== null) {
            $queryParams['including_material_atrributes'] = $this->includingMaterialAtrributes;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/promotion/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\PromotionListV30Response::class);

        return $result['model'];
    }
}
