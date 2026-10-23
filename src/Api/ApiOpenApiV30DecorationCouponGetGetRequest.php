<?php

/**
 * 本文件由 go2php 生成，源: api_decoration_coupon_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 线索通获取家装联盟卡券列表
 */
class ApiOpenApiV30DecorationCouponGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户id */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\DecorationCouponGetV30Filtering 过滤条件 */
    private ?\Oceanengine\Models\DecorationCouponGetV30Filtering $filtering = null;
    /** @var int 页码，默认值为1 */
    private ?int $page = null;
    /** @var int 页面大小，默认值为10，最大不超过50 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DecorationCouponGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告账户id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filtering(\Oceanengine\Models\DecorationCouponGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码，默认值为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值为10，最大不超过50
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
     * 线索通获取家装联盟卡券列表
     */
    public function execute(): \Oceanengine\Models\DecorationCouponGetV30Response
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
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/decoration/coupon/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DecorationCouponGetV30Response::class);

        return $result['model'];
    }
}
