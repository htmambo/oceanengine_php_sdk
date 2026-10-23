<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_query_industry_anchor_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 行业组件查询
 */
class ApiOpenApi2StarComponentQueryIndustryAnchorGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 星图客户ID */
    private ?int $starId = null;
    /** @var int 组件状态 0 &#x3D; 待送审 1 &#x3D; 有效 2 &#x3D;审核中 3 &#x3D; 审核失败 不传则为全部 */
    private ?int $anchorStatus = null;
    /** @var int 行业锚点类型       电商 &#x3D; 1    汽车 &#x3D; 2    网服 &#x3D; 3    保险 &#x3D; 4    教育 &#x3D; 5    家装 &#x3D; 6    剪映锚点 &#x3D; 7    招商加盟组件 &#x3D; 8    旅游 &#x3D; 9    游戏行业组件 &#x3D; 10    通信行业组件 &#x3D; 11    房产行业组件 &#x3D; 12    西瓜行业组件 &#x3D; 13    轻颜行业组件 &#x3D; 14    醒图行业组件  &#x3D; 15 不传则为全部 */
    private ?int $anchorType = null;
    /** @var int 分页页码 正整数，默认1 */
    private ?int $page = null;
    /** @var int 页大小 正整数且≤50，默认10 */
    private ?int $limit = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarComponentQueryIndustryAnchorV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 星图客户ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 组件状态 0 &#x3D; 待送审 1 &#x3D; 有效 2 &#x3D;审核中 3 &#x3D; 审核失败 不传则为全部
     */
    public function anchorStatus(int $anchorStatus): self
    {
        $this->anchorStatus = $anchorStatus;
        return $this;
    }

    /**
     * 行业锚点类型       电商 &#x3D; 1    汽车 &#x3D; 2    网服 &#x3D; 3    保险 &#x3D; 4    教育 &#x3D; 5    家装 &#x3D; 6    剪映锚点 &#x3D; 7    招商加盟组件 &#x3D; 8    旅游 &#x3D; 9    游戏行业组件 &#x3D; 10    通信行业组件 &#x3D; 11    房产行业组件 &#x3D; 12    西瓜行业组件 &#x3D; 13    轻颜行业组件 &#x3D; 14    醒图行业组件  &#x3D; 15 不传则为全部
     */
    public function anchorType(int $anchorType): self
    {
        $this->anchorType = $anchorType;
        return $this;
    }

    /**
     * 分页页码 正整数，默认1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页大小 正整数且≤50，默认10
     */
    public function limit(int $limit): self
    {
        $this->limit = $limit;
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
     * 行业组件查询
     */
    public function execute(): \Oceanengine\Models\StarComponentQueryIndustryAnchorV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->anchorStatus !== null) {
            $queryParams['anchor_status'] = $this->anchorStatus;
        }
        if ($this->anchorType !== null) {
            $queryParams['anchor_type'] = $this->anchorType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->limit !== null) {
            $queryParams['limit'] = $this->limit;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/component/query_industry_anchor/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarComponentQueryIndustryAnchorV2Response::class);

        return $result['model'];
    }
}
