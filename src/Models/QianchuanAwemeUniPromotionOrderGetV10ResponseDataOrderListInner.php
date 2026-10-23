<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerAwemeInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerAwemeInfo $awemeInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10DataOrderListMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 订单创建时间
     * @var string
     */
    protected ?string $orderCreateTime = null;

    /**
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerProductInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerProductInfo $productInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerStatsInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerStatsInfo $statsInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus
     */
    protected ?string $status = null;

    /**
     * 是否支持续费追投
     * @var bool
     */
    protected ?bool $supportAddBudget = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerAwemeInfo
     */
    public function getAwemeInfo(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerAwemeInfo
    {
        return $this->awemeInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerAwemeInfo $awemeInfo
     * @return self
     */
    public function setAwemeInfo(?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerAwemeInfo $awemeInfo): self
    {
        $this->awemeInfo = $awemeInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10DataOrderListMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10DataOrderListMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 订单创建时间
     * @return string
     */
    public function getOrderCreateTime(): ?string
    {
        return $this->orderCreateTime;
    }

    /**
     * 订单创建时间
     * @param string $orderCreateTime
     * @return self
     */
    public function setOrderCreateTime(?string $orderCreateTime): self
    {
        $this->orderCreateTime = $orderCreateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerStatsInfo
     */
    public function getStatsInfo(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerStatsInfo
    {
        return $this->statsInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerStatsInfo $statsInfo
     * @return self
     */
    public function setStatsInfo(?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerStatsInfo $statsInfo): self
    {
        $this->statsInfo = $statsInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 是否支持续费追投
     * @return bool
     */
    public function getSupportAddBudget(): ?bool
    {
        return $this->supportAddBudget;
    }

    /**
     * 是否支持续费追投
     * @param bool $supportAddBudget
     * @return self
     */
    public function setSupportAddBudget(?bool $supportAddBudget): self
    {
        $this->supportAddBudget = $supportAddBudget;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->awemeInfo !== null) {
            $result['aweme_info'] = $this->awemeInfo;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->orderCreateTime !== null) {
            $result['order_create_time'] = $this->orderCreateTime;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->statsInfo !== null) {
            $result['stats_info'] = $this->statsInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->supportAddBudget !== null) {
            $result['support_add_budget'] = $this->supportAddBudget;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['aweme_info'] ?? null) !== null && is_array($v)) {
            $obj->awemeInfo = \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerAwemeInfo::fromArray($v);
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['order_create_time'] ?? null) !== null) {
            $obj->orderCreateTime = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerProductInfo::fromArray($v);
        }
        if (($v = $data['stats_info'] ?? null) !== null && is_array($v)) {
            $obj->statsInfo = \Oceanengine\Models\QianchuanAwemeUniPromotionOrderGetV10ResponseDataOrderListInnerStatsInfo::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['support_add_budget'] ?? null) !== null) {
            $obj->supportAddBudget = (bool) $v;
        }
        return $obj;
    }
}
