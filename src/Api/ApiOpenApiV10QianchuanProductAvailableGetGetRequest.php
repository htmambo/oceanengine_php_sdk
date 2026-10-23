<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_product_available_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取千川账户下店铺内可投商品列表接口
 * 注意：仅支持商家广告主，不支持达人&机构广告主
 */
class ApiOpenApiV10QianchuanProductAvailableGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $awemeId = null;
    private ?\Oceanengine\Models\QianchuanProductAvailableGetV10Filter $filter = null;
    private ?string $campaignScene = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    /** @var int 页码游标值 */
    private ?int $cursor = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanProductAvailableGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function filter(\Oceanengine\Models\QianchuanProductAvailableGetV10Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    public function campaignScene(string $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
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
     * 页码游标值
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
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
     * 获取千川账户下店铺内可投商品列表接口
     */
    public function execute(): \Oceanengine\Models\QianchuanProductAvailableGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 0) {
            throw new \InvalidArgumentException('advertiserId must be greater than 0');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        if ($this->campaignScene !== null) {
            $queryParams['campaign_scene'] = $this->campaignScene;
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
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/product/available/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanProductAvailableGetV10Response::class);

        return $result['model'];
    }
}
