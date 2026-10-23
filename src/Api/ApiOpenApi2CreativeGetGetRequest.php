<?php

/**
 * 本文件由 go2php 生成，源: api_creative_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取创意列表
 */
class ApiOpenApi2CreativeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\CreativeGetV2Filtering 过滤条件，若此字段不传，或传空则视为无限制条件 */
    private ?\Oceanengine\Models\CreativeGetV2Filtering $filtering = null;
    /** @var string[] 查询字段集合, 如果指定, 则返回结果数组中, 每个元素是包含所查询字段的字典，默认全部指定 允许值: \&quot;creative_id\&quot;, \&quot;ad_id\&quot;, \&quot;advertiser_id\&quot;, \&quot;status\&quot;,\&quot;opt_status\&quot;, \&quot;image_mode\&quot;, \&quot;title\&quot;, \&quot;creative_word_ids\&quot;,\&quot;third_party_id\&quot;, \&quot;image_ids\&quot;, \&quot;image_id\&quot;, \&quot;video_id\&quot;,\&quot;materials\&quot; */
    private ?array $fields = null;
    /** @var int 页数默认值: 1，page范围为[1,99999]，2022年1月6号生效。 默认走page翻页 */
    private ?int $page = null;
    /** @var int 页面大小默认值:10，page_size范围为[1,100]，2022年1月6号生效。默认走page翻页 */
    private ?int $pageSize = null;
    /** @var int 页码游标值，第一次拉取，无需入参 同时传入时，cursor优先级大于page 注：page+page_size与cursor+count为两种分页方式 cursor+count适用于获取数据记录数≥10000的场景 */
    private ?int $cursor = null;
    /** @var int 页面数据量 注：page+page_size与cursor+count为两种分页方式 cursor+count适用于获取数据记录数≥10000的场景 */
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CreativeGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 过滤条件，若此字段不传，或传空则视为无限制条件
     */
    public function filtering(\Oceanengine\Models\CreativeGetV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 查询字段集合, 如果指定, 则返回结果数组中, 每个元素是包含所查询字段的字典，默认全部指定 允许值: \&quot;creative_id\&quot;, \&quot;ad_id\&quot;, \&quot;advertiser_id\&quot;, \&quot;status\&quot;,\&quot;opt_status\&quot;, \&quot;image_mode\&quot;, \&quot;title\&quot;, \&quot;creative_word_ids\&quot;,\&quot;third_party_id\&quot;, \&quot;image_ids\&quot;, \&quot;image_id\&quot;, \&quot;video_id\&quot;,\&quot;materials\&quot;
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 页数默认值: 1，page范围为[1,99999]，2022年1月6号生效。 默认走page翻页
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小默认值:10，page_size范围为[1,100]，2022年1月6号生效。默认走page翻页
     */
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
     * 获取创意列表
     */
    public function execute(): \Oceanengine\Models\CreativeGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
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
        $url = '/open_api/2/creative/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CreativeGetV2Response::class);

        return $result['model'];
    }
}
