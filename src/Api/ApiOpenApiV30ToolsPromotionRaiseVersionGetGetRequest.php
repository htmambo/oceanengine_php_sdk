<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_raise_version_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取起量版本信息
 */
class ApiOpenApiV30ToolsPromotionRaiseVersionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 广告ID */
    private ?int $promotionId = null;
    /** @var int 页码，默认值：1 */
    private ?int $page = null;
    /** @var int 页面大小，允许值：1-100，默认值：10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPromotionRaiseVersionGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告ID
     */
    public function promotionId(int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * 页码，默认值：1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，允许值：1-100，默认值：10
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
     * 获取起量版本信息
     */
    public function execute(): \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->promotionId === null) {
            throw new \InvalidArgumentException('promotionId is required and must be specified');
        }
        if ($this->promotionId < 1) {
            throw new \InvalidArgumentException('promotionId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['promotion_id'] = $this->promotionId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/promotion_raise_version/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPromotionRaiseVersionGetV30Response::class);

        return $result['model'];
    }
}
