<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanTodayLiveRoomProductListGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $adLiveOrderSettleCostPerProduct7d = null;

    /**
     * @var float
     */
    protected ?float $adLiveOrderSettleRoiPerProduct7d = null;

    /**
     * @var \Oceanengine\Models\QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus
     */
    protected ?string $explainStatus = null;

    /**
     * @var string
     */
    protected ?string $imgUrl = null;

    /**
     * @var float
     */
    protected ?float $liveCostPerProduct = null;

    /**
     * @var float
     */
    protected ?float $liveOrderRefundAmount = null;

    /**
     * @var float
     */
    protected ?float $liveOrderSettleAmount7d = null;

    /**
     * @var int
     */
    protected ?int $liveOrderSettleCount7d = null;

    /**
     * @var float
     */
    protected ?float $liveOrderSettleCountRate7d = null;

    /**
     * @var int
     */
    protected ?int $livePayOrderCountAlias = null;

    /**
     * @var float
     */
    protected ?float $livePayOrderGmvAlias = null;

    /**
     * @var float
     */
    protected ?float $livePayOrderRoiPerProduct = null;

    /**
     * @var int
     */
    protected ?int $liveProductInventory = null;

    /**
     * @var string
     */
    protected ?string $liveProductBindTime = null;

    /**
     * @var int
     */
    protected ?int $liveProductExplainCnt = null;

    /**
     * @var float
     */
    protected ?float $liveProductPrice = null;

    /**
     * @var int
     */
    protected ?int $lubanLivePayOrderCount = null;

    /**
     * @var float
     */
    protected ?float $lubanLivePayOrderGmv = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var float
     */
    protected ?float $productClickPayUcntRatio = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var float
     */
    protected ?float $totalLivePayOrderGpmEcom = null;

    /**
     * @return float
     */
    public function getAdLiveOrderSettleCostPerProduct7d(): ?float
    {
        return $this->adLiveOrderSettleCostPerProduct7d;
    }

    /**
     * @param float $adLiveOrderSettleCostPerProduct7d
     * @return self
     */
    public function setAdLiveOrderSettleCostPerProduct7d(?float $adLiveOrderSettleCostPerProduct7d): self
    {
        $this->adLiveOrderSettleCostPerProduct7d = $adLiveOrderSettleCostPerProduct7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdLiveOrderSettleRoiPerProduct7d(): ?float
    {
        return $this->adLiveOrderSettleRoiPerProduct7d;
    }

    /**
     * @param float $adLiveOrderSettleRoiPerProduct7d
     * @return self
     */
    public function setAdLiveOrderSettleRoiPerProduct7d(?float $adLiveOrderSettleRoiPerProduct7d): self
    {
        $this->adLiveOrderSettleRoiPerProduct7d = $adLiveOrderSettleRoiPerProduct7d;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus
     */
    public function getExplainStatus(): ?string
    {
        return $this->explainStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus $explainStatus
     * @return self
     */
    public function setExplainStatus(?string $explainStatus): self
    {
        $this->explainStatus = $explainStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    /**
     * @param string $imgUrl
     * @return self
     */
    public function setImgUrl(?string $imgUrl): self
    {
        $this->imgUrl = $imgUrl;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveCostPerProduct(): ?float
    {
        return $this->liveCostPerProduct;
    }

    /**
     * @param float $liveCostPerProduct
     * @return self
     */
    public function setLiveCostPerProduct(?float $liveCostPerProduct): self
    {
        $this->liveCostPerProduct = $liveCostPerProduct;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOrderRefundAmount(): ?float
    {
        return $this->liveOrderRefundAmount;
    }

    /**
     * @param float $liveOrderRefundAmount
     * @return self
     */
    public function setLiveOrderRefundAmount(?float $liveOrderRefundAmount): self
    {
        $this->liveOrderRefundAmount = $liveOrderRefundAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOrderSettleAmount7d(): ?float
    {
        return $this->liveOrderSettleAmount7d;
    }

    /**
     * @param float $liveOrderSettleAmount7d
     * @return self
     */
    public function setLiveOrderSettleAmount7d(?float $liveOrderSettleAmount7d): self
    {
        $this->liveOrderSettleAmount7d = $liveOrderSettleAmount7d;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveOrderSettleCount7d(): ?int
    {
        return $this->liveOrderSettleCount7d;
    }

    /**
     * @param int $liveOrderSettleCount7d
     * @return self
     */
    public function setLiveOrderSettleCount7d(?int $liveOrderSettleCount7d): self
    {
        $this->liveOrderSettleCount7d = $liveOrderSettleCount7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOrderSettleCountRate7d(): ?float
    {
        return $this->liveOrderSettleCountRate7d;
    }

    /**
     * @param float $liveOrderSettleCountRate7d
     * @return self
     */
    public function setLiveOrderSettleCountRate7d(?float $liveOrderSettleCountRate7d): self
    {
        $this->liveOrderSettleCountRate7d = $liveOrderSettleCountRate7d;
        return $this;
    }

    /**
     * @return int
     */
    public function getLivePayOrderCountAlias(): ?int
    {
        return $this->livePayOrderCountAlias;
    }

    /**
     * @param int $livePayOrderCountAlias
     * @return self
     */
    public function setLivePayOrderCountAlias(?int $livePayOrderCountAlias): self
    {
        $this->livePayOrderCountAlias = $livePayOrderCountAlias;
        return $this;
    }

    /**
     * @return float
     */
    public function getLivePayOrderGmvAlias(): ?float
    {
        return $this->livePayOrderGmvAlias;
    }

    /**
     * @param float $livePayOrderGmvAlias
     * @return self
     */
    public function setLivePayOrderGmvAlias(?float $livePayOrderGmvAlias): self
    {
        $this->livePayOrderGmvAlias = $livePayOrderGmvAlias;
        return $this;
    }

    /**
     * @return float
     */
    public function getLivePayOrderRoiPerProduct(): ?float
    {
        return $this->livePayOrderRoiPerProduct;
    }

    /**
     * @param float $livePayOrderRoiPerProduct
     * @return self
     */
    public function setLivePayOrderRoiPerProduct(?float $livePayOrderRoiPerProduct): self
    {
        $this->livePayOrderRoiPerProduct = $livePayOrderRoiPerProduct;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveProductInventory(): ?int
    {
        return $this->liveProductInventory;
    }

    /**
     * @param int $liveProductInventory
     * @return self
     */
    public function setLiveProductInventory(?int $liveProductInventory): self
    {
        $this->liveProductInventory = $liveProductInventory;
        return $this;
    }

    /**
     * @return string
     */
    public function getLiveProductBindTime(): ?string
    {
        return $this->liveProductBindTime;
    }

    /**
     * @param string $liveProductBindTime
     * @return self
     */
    public function setLiveProductBindTime(?string $liveProductBindTime): self
    {
        $this->liveProductBindTime = $liveProductBindTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveProductExplainCnt(): ?int
    {
        return $this->liveProductExplainCnt;
    }

    /**
     * @param int $liveProductExplainCnt
     * @return self
     */
    public function setLiveProductExplainCnt(?int $liveProductExplainCnt): self
    {
        $this->liveProductExplainCnt = $liveProductExplainCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveProductPrice(): ?float
    {
        return $this->liveProductPrice;
    }

    /**
     * @param float $liveProductPrice
     * @return self
     */
    public function setLiveProductPrice(?float $liveProductPrice): self
    {
        $this->liveProductPrice = $liveProductPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLivePayOrderCount(): ?int
    {
        return $this->lubanLivePayOrderCount;
    }

    /**
     * @param int $lubanLivePayOrderCount
     * @return self
     */
    public function setLubanLivePayOrderCount(?int $lubanLivePayOrderCount): self
    {
        $this->lubanLivePayOrderCount = $lubanLivePayOrderCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanLivePayOrderGmv(): ?float
    {
        return $this->lubanLivePayOrderGmv;
    }

    /**
     * @param float $lubanLivePayOrderGmv
     * @return self
     */
    public function setLubanLivePayOrderGmv(?float $lubanLivePayOrderGmv): self
    {
        $this->lubanLivePayOrderGmv = $lubanLivePayOrderGmv;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductClickPayUcntRatio(): ?float
    {
        return $this->productClickPayUcntRatio;
    }

    /**
     * @param float $productClickPayUcntRatio
     * @return self
     */
    public function setProductClickPayUcntRatio(?float $productClickPayUcntRatio): self
    {
        $this->productClickPayUcntRatio = $productClickPayUcntRatio;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalLivePayOrderGpmEcom(): ?float
    {
        return $this->totalLivePayOrderGpmEcom;
    }

    /**
     * @param float $totalLivePayOrderGpmEcom
     * @return self
     */
    public function setTotalLivePayOrderGpmEcom(?float $totalLivePayOrderGpmEcom): self
    {
        $this->totalLivePayOrderGpmEcom = $totalLivePayOrderGpmEcom;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adLiveOrderSettleCostPerProduct7d !== null) {
            $result['ad_live_order_settle_cost_per_product_7d'] = $this->adLiveOrderSettleCostPerProduct7d;
        }
        if ($this->adLiveOrderSettleRoiPerProduct7d !== null) {
            $result['ad_live_order_settle_roi_per_product_7d'] = $this->adLiveOrderSettleRoiPerProduct7d;
        }
        if ($this->explainStatus !== null) {
            $result['explain_status'] = $this->explainStatus;
        }
        if ($this->imgUrl !== null) {
            $result['img_url'] = $this->imgUrl;
        }
        if ($this->liveCostPerProduct !== null) {
            $result['live_cost_per_product'] = $this->liveCostPerProduct;
        }
        if ($this->liveOrderRefundAmount !== null) {
            $result['live_order_refund_amount'] = $this->liveOrderRefundAmount;
        }
        if ($this->liveOrderSettleAmount7d !== null) {
            $result['live_order_settle_amount_7d'] = $this->liveOrderSettleAmount7d;
        }
        if ($this->liveOrderSettleCount7d !== null) {
            $result['live_order_settle_count_7d'] = $this->liveOrderSettleCount7d;
        }
        if ($this->liveOrderSettleCountRate7d !== null) {
            $result['live_order_settle_count_rate_7d'] = $this->liveOrderSettleCountRate7d;
        }
        if ($this->livePayOrderCountAlias !== null) {
            $result['live_pay_order_count_alias'] = $this->livePayOrderCountAlias;
        }
        if ($this->livePayOrderGmvAlias !== null) {
            $result['live_pay_order_gmv_alias'] = $this->livePayOrderGmvAlias;
        }
        if ($this->livePayOrderRoiPerProduct !== null) {
            $result['live_pay_order_roi_per_product'] = $this->livePayOrderRoiPerProduct;
        }
        if ($this->liveProductInventory !== null) {
            $result['live_product_Inventory'] = $this->liveProductInventory;
        }
        if ($this->liveProductBindTime !== null) {
            $result['live_product_bind_time'] = $this->liveProductBindTime;
        }
        if ($this->liveProductExplainCnt !== null) {
            $result['live_product_explain_cnt'] = $this->liveProductExplainCnt;
        }
        if ($this->liveProductPrice !== null) {
            $result['live_product_price'] = $this->liveProductPrice;
        }
        if ($this->lubanLivePayOrderCount !== null) {
            $result['luban_live_pay_order_count'] = $this->lubanLivePayOrderCount;
        }
        if ($this->lubanLivePayOrderGmv !== null) {
            $result['luban_live_pay_order_gmv'] = $this->lubanLivePayOrderGmv;
        }
        if ($this->productId !== null) {
            $result['productId'] = $this->productId;
        }
        if ($this->productClickPayUcntRatio !== null) {
            $result['product_click_pay_ucnt_ratio'] = $this->productClickPayUcntRatio;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->totalLivePayOrderGpmEcom !== null) {
            $result['total_live_pay_order_gpm_ecom'] = $this->totalLivePayOrderGpmEcom;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_live_order_settle_cost_per_product_7d'] ?? null) !== null) {
            $obj->adLiveOrderSettleCostPerProduct7d = (float) $v;
        }
        if (($v = $data['ad_live_order_settle_roi_per_product_7d'] ?? null) !== null) {
            $obj->adLiveOrderSettleRoiPerProduct7d = (float) $v;
        }
        if (($v = $data['explain_status'] ?? null) !== null) {
            $obj->explainStatus = (string) $v;
        }
        if (($v = $data['img_url'] ?? null) !== null) {
            $obj->imgUrl = (string) $v;
        }
        if (($v = $data['live_cost_per_product'] ?? null) !== null) {
            $obj->liveCostPerProduct = (float) $v;
        }
        if (($v = $data['live_order_refund_amount'] ?? null) !== null) {
            $obj->liveOrderRefundAmount = (float) $v;
        }
        if (($v = $data['live_order_settle_amount_7d'] ?? null) !== null) {
            $obj->liveOrderSettleAmount7d = (float) $v;
        }
        if (($v = $data['live_order_settle_count_7d'] ?? null) !== null) {
            $obj->liveOrderSettleCount7d = (int) $v;
        }
        if (($v = $data['live_order_settle_count_rate_7d'] ?? null) !== null) {
            $obj->liveOrderSettleCountRate7d = (float) $v;
        }
        if (($v = $data['live_pay_order_count_alias'] ?? null) !== null) {
            $obj->livePayOrderCountAlias = (int) $v;
        }
        if (($v = $data['live_pay_order_gmv_alias'] ?? null) !== null) {
            $obj->livePayOrderGmvAlias = (float) $v;
        }
        if (($v = $data['live_pay_order_roi_per_product'] ?? null) !== null) {
            $obj->livePayOrderRoiPerProduct = (float) $v;
        }
        if (($v = $data['live_product_Inventory'] ?? null) !== null) {
            $obj->liveProductInventory = (int) $v;
        }
        if (($v = $data['live_product_bind_time'] ?? null) !== null) {
            $obj->liveProductBindTime = (string) $v;
        }
        if (($v = $data['live_product_explain_cnt'] ?? null) !== null) {
            $obj->liveProductExplainCnt = (int) $v;
        }
        if (($v = $data['live_product_price'] ?? null) !== null) {
            $obj->liveProductPrice = (float) $v;
        }
        if (($v = $data['luban_live_pay_order_count'] ?? null) !== null) {
            $obj->lubanLivePayOrderCount = (int) $v;
        }
        if (($v = $data['luban_live_pay_order_gmv'] ?? null) !== null) {
            $obj->lubanLivePayOrderGmv = (float) $v;
        }
        if (($v = $data['productId'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_click_pay_ucnt_ratio'] ?? null) !== null) {
            $obj->productClickPayUcntRatio = (float) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['total_live_pay_order_gpm_ecom'] ?? null) !== null) {
            $obj->totalLivePayOrderGpmEcom = (float) $v;
        }
        return $obj;
    }
}
