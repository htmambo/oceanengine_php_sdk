<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_block_material_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取全域可排除抖音视频列表
 */
class ApiOpenApiV10QianchuanUniPromotionBlockMaterialGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 抖音号id */
    private ?int $awemeId = null;
    private ?string $marketingGoal = null;
    private ?string $mediaType = null;
    private ?array $productId = null;
    /** @var \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10Filtering 过滤器 */
    private ?\Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10Filtering $filtering = null;
    private ?string $orderField = null;
    /** @var int 页码游标值 */
    private ?int $cursor = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionBlockMaterialGetV10ApiService $service)
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

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function mediaType(string $mediaType): self
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    public function productId(array $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
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
     * 获取全域可排除抖音视频列表
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        if ($this->mediaType !== null) {
            $queryParams['media_type'] = $this->mediaType;
        }
        if ($this->productId !== null) {
            $queryParams['product_id'] = $this->productId;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/block_material/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10Response::class);

        return $result['model'];
    }
}
