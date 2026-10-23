<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_product_aweme_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 全域达人获取可投商品列表
 */
class ApiOpenApiV10QianchuanUniPromotionProductAwemeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 抖音号id */
    private ?int $awemeId = null;
    /** @var \Oceanengine\Models\QianchuanUniPromotionProductAwemeGetV10Filtering 过滤器 */
    private ?\Oceanengine\Models\QianchuanUniPromotionProductAwemeGetV10Filtering $filtering = null;
    /** @var int 页码游标值 */
    private ?int $cursor = null;
    /** @var string 0-Unknown 1-PC 2-随心推 不传默认PC */
    private ?string $platform = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionProductAwemeGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 抖音号id
     */
    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QianchuanUniPromotionProductAwemeGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
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

    /**
     * 0-Unknown 1-PC 2-随心推 不传默认PC
     */
    public function platform(string $platform): self
    {
        $this->platform = $platform;
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
     * 全域达人获取可投商品列表
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionProductAwemeGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->awemeId < 0) {
            throw new \InvalidArgumentException('awemeId must be greater than 0');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->platform !== null) {
            $queryParams['platform'] = $this->platform;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/product/aweme/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionProductAwemeGetV10Response::class);

        return $result['model'];
    }
}
