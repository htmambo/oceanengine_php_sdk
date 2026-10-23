<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aigc_material_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取推荐AIGC素材
 */
class ApiOpenApi2ToolsAigcMaterialGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户id */
    private ?int $advertiserId = null;
    private ?string $projectType = null;
    /** @var int 商品id */
    private ?int $productId = null;
    /** @var int 商品库id */
    private ?int $productPlatformId = null;
    /** @var int 升级版商品id */
    private ?int $uniqueProductId = null;
    /** @var string 投放载体 */
    private ?string $deliveryMedium = null;
    /** @var string 多投放载体 */
    private ?string $multiDeliveryMedium = null;
    /** @var string 抖音号id */
    private ?string $awemeId = null;
    /** @var int 小程序id */
    private ?int $instanceId = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAigcMaterialGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function projectType(string $projectType): self
    {
        $this->projectType = $projectType;
        return $this;
    }

    /**
     * 商品id
     */
    public function productId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 商品库id
     */
    public function productPlatformId(int $productPlatformId): self
    {
        $this->productPlatformId = $productPlatformId;
        return $this;
    }

    /**
     * 升级版商品id
     */
    public function uniqueProductId(int $uniqueProductId): self
    {
        $this->uniqueProductId = $uniqueProductId;
        return $this;
    }

    /**
     * 投放载体
     */
    public function deliveryMedium(string $deliveryMedium): self
    {
        $this->deliveryMedium = $deliveryMedium;
        return $this;
    }

    /**
     * 多投放载体
     */
    public function multiDeliveryMedium(string $multiDeliveryMedium): self
    {
        $this->multiDeliveryMedium = $multiDeliveryMedium;
        return $this;
    }

    /**
     * 抖音号id
     */
    public function awemeId(string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 小程序id
     */
    public function instanceId(int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
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
     * 获取推荐AIGC素材
     */
    public function execute(): \Oceanengine\Models\ToolsAigcMaterialGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->projectType === null) {
            throw new \InvalidArgumentException('projectType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->productId !== null) {
            $queryParams['product_id'] = $this->productId;
        }
        if ($this->productPlatformId !== null) {
            $queryParams['product_platform_id'] = $this->productPlatformId;
        }
        if ($this->uniqueProductId !== null) {
            $queryParams['unique_product_id'] = $this->uniqueProductId;
        }
        if ($this->deliveryMedium !== null) {
            $queryParams['delivery_medium'] = $this->deliveryMedium;
        }
        if ($this->multiDeliveryMedium !== null) {
            $queryParams['multi_delivery_medium'] = $this->multiDeliveryMedium;
        }
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        if ($this->instanceId !== null) {
            $queryParams['instance_id'] = $this->instanceId;
        }
        $queryParams['project_type'] = $this->projectType;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aigc_material/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAigcMaterialGetV2Response::class);

        return $result['model'];
    }
}
