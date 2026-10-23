<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_overall_suggest_roi_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 乘方-商品+直播 建议出价
 */
class ApiOpenApiV10QianchuanOverallSuggestRoiGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $marketingGoal = null;
    private ?string $deepExternalAction = null;
    /** @var int 直播场景AuthorID：抖音号ID */
    private ?int $awemeId = null;
    /** @var int 更新场景：获取指定计划的建议ROI */
    private ?int $adId = null;
    private ?\Oceanengine\Models\QianchuanOverallSuggestRoiGetV10OverallCostItems $overallCostItems = null;
    /** @var \Oceanengine\Models\QianchuanOverallSuggestRoiGetV10ProductId2AwemeUidInner[] 仅乘方商品，ProductID与AwemeUID的叉乘关系 */
    private ?array $productId2AwemeUid = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanOverallSuggestRoiGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function deepExternalAction(string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * 直播场景AuthorID：抖音号ID
     */
    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 更新场景：获取指定计划的建议ROI
     */
    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    public function overallCostItems(\Oceanengine\Models\QianchuanOverallSuggestRoiGetV10OverallCostItems $overallCostItems): self
    {
        $this->overallCostItems = $overallCostItems;
        return $this;
    }

    /**
     * 仅乘方商品，ProductID与AwemeUID的叉乘关系
     */
    public function productId2AwemeUid(array $productId2AwemeUid): self
    {
        $this->productId2AwemeUid = $productId2AwemeUid;
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
     * 乘方-商品+直播 建议出价
     */
    public function execute(): \Oceanengine\Models\QianchuanOverallSuggestRoiGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        if ($this->deepExternalAction === null) {
            throw new \InvalidArgumentException('deepExternalAction is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        if ($this->awemeId !== null) {
            $queryParams['aweme_id'] = $this->awemeId;
        }
        $queryParams['deep_external_action'] = $this->deepExternalAction;
        if ($this->adId !== null) {
            $queryParams['ad_id'] = $this->adId;
        }
        if ($this->overallCostItems !== null) {
            $__encoded0 = json_encode($this->overallCostItems);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: overallCostItems');
            }
            $queryParams['overall_cost_items'] = $__encoded0;
        }
        if ($this->productId2AwemeUid !== null) {
            $__encoded1 = json_encode($this->productId2AwemeUid);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: productId2AwemeUid');
            }
            $queryParams['product_id_2_aweme_uid'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/overall/suggest/roi/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanOverallSuggestRoiGetV10Response::class);

        return $result['model'];
    }
}
