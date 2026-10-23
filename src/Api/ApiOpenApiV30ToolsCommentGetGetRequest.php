<?php

/**
 * 本文件由 go2php 生成，源: api_tools_comment_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * PM2
 */
class ApiOpenApiV30ToolsCommentGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string 查询起始时间，格式：yyyy-MM-dd，时间跨度最大三个月，仅支持获取2021-01-01之后的评论 */
    private ?string $startTime = null;
    /** @var string 查询截止时间，格式：yyyy-MM-dd，时间跨度最大三个月，仅支持获取2021-01-01之后的评论 */
    private ?string $endTime = null;
    /** @var string 排序字段 允许值： REPLY_COUNT 按评论回复数量排序 LIKE_COUNT   按点赞数量排序 CREATE_TIME 按评论时间排序（默认值） */
    private ?string $orderField = null;
    /** @var string 排序类型 允许值： ASC 升序 DESC 降序（默认值） */
    private ?string $orderType = null;
    /** @var \Oceanengine\Models\ToolsCommentGetV30Filtering 过滤条件，若此字段不传，或传空则视为无限制条件 */
    private ?\Oceanengine\Models\ToolsCommentGetV30Filtering $filtering = null;
    /** @var int 页码 默认值: 1 */
    private ?int $page = null;
    /** @var int 页面大小 默认值: 10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsCommentGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 查询起始时间，格式：yyyy-MM-dd，时间跨度最大三个月，仅支持获取2021-01-01之后的评论
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 查询截止时间，格式：yyyy-MM-dd，时间跨度最大三个月，仅支持获取2021-01-01之后的评论
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 排序字段 允许值： REPLY_COUNT 按评论回复数量排序 LIKE_COUNT   按点赞数量排序 CREATE_TIME 按评论时间排序（默认值）
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序类型 允许值： ASC 升序 DESC 降序（默认值）
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 过滤条件，若此字段不传，或传空则视为无限制条件
     */
    public function filtering(\Oceanengine\Models\ToolsCommentGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码 默认值: 1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小 默认值: 10
     */
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
     * PM2
     */
    public function execute(): \Oceanengine\Models\ToolsCommentGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
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
        $url = '/open_api/v3.0/tools/comment/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsCommentGetV30Response::class);

        return $result['model'];
    }
}
