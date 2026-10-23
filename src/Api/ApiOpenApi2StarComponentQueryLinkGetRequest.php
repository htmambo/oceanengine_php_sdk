<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_query_link_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 常规组件查询
 */
class ApiOpenApi2StarComponentQueryLinkGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 星图客户ID */
    private ?int $starId = null;
    /** @var int 组件状态 0 &#x3D; 待送审 1 &#x3D; 有效 2 &#x3D;审核中 3 &#x3D; 审核失败 不传则为全部 */
    private ?int $componentStatus = null;
    /** @var int 分页页码 正整数，默认1 */
    private ?int $page = null;
    /** @var int 页大小 正整数且≤50，默认10 */
    private ?int $limit = null;
    private ?array $linkIds = null;
    private ?int $linkType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarComponentQueryLinkV2ApiService $service)
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
    public function componentStatus(int $componentStatus): self
    {
        $this->componentStatus = $componentStatus;
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

    public function linkIds(array $linkIds): self
    {
        $this->linkIds = $linkIds;
        return $this;
    }

    public function linkType(int $linkType): self
    {
        $this->linkType = $linkType;
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
     * 常规组件查询
     */
    public function execute(): \Oceanengine\Models\StarComponentQueryLinkV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->componentStatus !== null) {
            $queryParams['component_status'] = $this->componentStatus;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->limit !== null) {
            $queryParams['limit'] = $this->limit;
        }
        if ($this->linkIds !== null) {
            $queryParams['link_ids'] = $this->linkIds;
        }
        if ($this->linkType !== null) {
            $queryParams['link_type'] = $this->linkType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/component/query_link/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarComponentQueryLinkV2Response::class);

        return $result['model'];
    }
}
