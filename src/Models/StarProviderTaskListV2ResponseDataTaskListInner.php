<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarProviderTaskListV2ResponseDataTaskListInner implements \JsonSerializable
{
    /**
     * 关联推商品计划数
     * @var int
     */
    protected ?int $adPlanCntProduct = null;

    /**
     * 已选中达人数
     * @var int
     */
    protected ?int $confirmedAuthorCnt = null;

    /**
     * 待确认达人数
     * @var int
     */
    protected ?int $confirmingAuthorCnt = null;

    /**
     * 待确认视频数
     * @var int
     */
    protected ?int $confirmingItemCnt = null;

    /**
     * 预估可结算收益
     * @var int
     */
    protected ?int $estimatedSettleIncome = null;

    /**
     * 投稿截止时间
     * @var int
     */
    protected ?int $expirationTimeEnd = null;

    /**
     * 消耗(推直播)
     * @var int
     */
    protected ?int $liveAdCost = null;

    /**
     * 已报名达人数
     * @var int
     */
    protected ?int $participatedAuthorCnt = null;

    /**
     * 消耗(推商品)
     * @var int
     */
    protected ?int $productAdCost = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 已发布视频数
     * @var int
     */
    protected ?int $publishedItemCnt = null;

    /**
     * 剩余待交付素材数
     * @var int
     */
    protected ?int $remainingMaterialCnt = null;

    /**
     * 已结算收益
     * @var int
     */
    protected ?int $settledIncome = null;

    /**
     * 店铺名称
     * @var string
     */
    protected ?string $shopName = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $taskName = null;

    /**
     * 任务状态
     * @var int
     */
    protected ?int $taskStatus = null;

    /**
     * 消耗(整体)
     * @var int
     */
    protected ?int $totalAdCost = null;

    /**
     * 关联推商品计划数
     * @return int
     */
    public function getAdPlanCntProduct(): ?int
    {
        return $this->adPlanCntProduct;
    }

    /**
     * 关联推商品计划数
     * @param int $adPlanCntProduct
     * @return self
     */
    public function setAdPlanCntProduct(?int $adPlanCntProduct): self
    {
        $this->adPlanCntProduct = $adPlanCntProduct;
        return $this;
    }

    /**
     * 已选中达人数
     * @return int
     */
    public function getConfirmedAuthorCnt(): ?int
    {
        return $this->confirmedAuthorCnt;
    }

    /**
     * 已选中达人数
     * @param int $confirmedAuthorCnt
     * @return self
     */
    public function setConfirmedAuthorCnt(?int $confirmedAuthorCnt): self
    {
        $this->confirmedAuthorCnt = $confirmedAuthorCnt;
        return $this;
    }

    /**
     * 待确认达人数
     * @return int
     */
    public function getConfirmingAuthorCnt(): ?int
    {
        return $this->confirmingAuthorCnt;
    }

    /**
     * 待确认达人数
     * @param int $confirmingAuthorCnt
     * @return self
     */
    public function setConfirmingAuthorCnt(?int $confirmingAuthorCnt): self
    {
        $this->confirmingAuthorCnt = $confirmingAuthorCnt;
        return $this;
    }

    /**
     * 待确认视频数
     * @return int
     */
    public function getConfirmingItemCnt(): ?int
    {
        return $this->confirmingItemCnt;
    }

    /**
     * 待确认视频数
     * @param int $confirmingItemCnt
     * @return self
     */
    public function setConfirmingItemCnt(?int $confirmingItemCnt): self
    {
        $this->confirmingItemCnt = $confirmingItemCnt;
        return $this;
    }

    /**
     * 预估可结算收益
     * @return int
     */
    public function getEstimatedSettleIncome(): ?int
    {
        return $this->estimatedSettleIncome;
    }

    /**
     * 预估可结算收益
     * @param int $estimatedSettleIncome
     * @return self
     */
    public function setEstimatedSettleIncome(?int $estimatedSettleIncome): self
    {
        $this->estimatedSettleIncome = $estimatedSettleIncome;
        return $this;
    }

    /**
     * 投稿截止时间
     * @return int
     */
    public function getExpirationTimeEnd(): ?int
    {
        return $this->expirationTimeEnd;
    }

    /**
     * 投稿截止时间
     * @param int $expirationTimeEnd
     * @return self
     */
    public function setExpirationTimeEnd(?int $expirationTimeEnd): self
    {
        $this->expirationTimeEnd = $expirationTimeEnd;
        return $this;
    }

    /**
     * 消耗(推直播)
     * @return int
     */
    public function getLiveAdCost(): ?int
    {
        return $this->liveAdCost;
    }

    /**
     * 消耗(推直播)
     * @param int $liveAdCost
     * @return self
     */
    public function setLiveAdCost(?int $liveAdCost): self
    {
        $this->liveAdCost = $liveAdCost;
        return $this;
    }

    /**
     * 已报名达人数
     * @return int
     */
    public function getParticipatedAuthorCnt(): ?int
    {
        return $this->participatedAuthorCnt;
    }

    /**
     * 已报名达人数
     * @param int $participatedAuthorCnt
     * @return self
     */
    public function setParticipatedAuthorCnt(?int $participatedAuthorCnt): self
    {
        $this->participatedAuthorCnt = $participatedAuthorCnt;
        return $this;
    }

    /**
     * 消耗(推商品)
     * @return int
     */
    public function getProductAdCost(): ?int
    {
        return $this->productAdCost;
    }

    /**
     * 消耗(推商品)
     * @param int $productAdCost
     * @return self
     */
    public function setProductAdCost(?int $productAdCost): self
    {
        $this->productAdCost = $productAdCost;
        return $this;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 商品名称
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 已发布视频数
     * @return int
     */
    public function getPublishedItemCnt(): ?int
    {
        return $this->publishedItemCnt;
    }

    /**
     * 已发布视频数
     * @param int $publishedItemCnt
     * @return self
     */
    public function setPublishedItemCnt(?int $publishedItemCnt): self
    {
        $this->publishedItemCnt = $publishedItemCnt;
        return $this;
    }

    /**
     * 剩余待交付素材数
     * @return int
     */
    public function getRemainingMaterialCnt(): ?int
    {
        return $this->remainingMaterialCnt;
    }

    /**
     * 剩余待交付素材数
     * @param int $remainingMaterialCnt
     * @return self
     */
    public function setRemainingMaterialCnt(?int $remainingMaterialCnt): self
    {
        $this->remainingMaterialCnt = $remainingMaterialCnt;
        return $this;
    }

    /**
     * 已结算收益
     * @return int
     */
    public function getSettledIncome(): ?int
    {
        return $this->settledIncome;
    }

    /**
     * 已结算收益
     * @param int $settledIncome
     * @return self
     */
    public function setSettledIncome(?int $settledIncome): self
    {
        $this->settledIncome = $settledIncome;
        return $this;
    }

    /**
     * 店铺名称
     * @return string
     */
    public function getShopName(): ?string
    {
        return $this->shopName;
    }

    /**
     * 店铺名称
     * @param string $shopName
     * @return self
     */
    public function setShopName(?string $shopName): self
    {
        $this->shopName = $shopName;
        return $this;
    }

    /**
     * 任务ID
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * 任务ID
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * 任务名称
     * @return string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * 任务名称
     * @param string $taskName
     * @return self
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * 任务状态
     * @return int
     */
    public function getTaskStatus(): ?int
    {
        return $this->taskStatus;
    }

    /**
     * 任务状态
     * @param int $taskStatus
     * @return self
     */
    public function setTaskStatus(?int $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
        return $this;
    }

    /**
     * 消耗(整体)
     * @return int
     */
    public function getTotalAdCost(): ?int
    {
        return $this->totalAdCost;
    }

    /**
     * 消耗(整体)
     * @param int $totalAdCost
     * @return self
     */
    public function setTotalAdCost(?int $totalAdCost): self
    {
        $this->totalAdCost = $totalAdCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adPlanCntProduct !== null) {
            $result['ad_plan_cnt_product'] = $this->adPlanCntProduct;
        }
        if ($this->confirmedAuthorCnt !== null) {
            $result['confirmed_author_cnt'] = $this->confirmedAuthorCnt;
        }
        if ($this->confirmingAuthorCnt !== null) {
            $result['confirming_author_cnt'] = $this->confirmingAuthorCnt;
        }
        if ($this->confirmingItemCnt !== null) {
            $result['confirming_item_cnt'] = $this->confirmingItemCnt;
        }
        if ($this->estimatedSettleIncome !== null) {
            $result['estimated_settle_income'] = $this->estimatedSettleIncome;
        }
        if ($this->expirationTimeEnd !== null) {
            $result['expiration_time_end'] = $this->expirationTimeEnd;
        }
        if ($this->liveAdCost !== null) {
            $result['live_ad_cost'] = $this->liveAdCost;
        }
        if ($this->participatedAuthorCnt !== null) {
            $result['participated_author_cnt'] = $this->participatedAuthorCnt;
        }
        if ($this->productAdCost !== null) {
            $result['product_ad_cost'] = $this->productAdCost;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->publishedItemCnt !== null) {
            $result['published_item_cnt'] = $this->publishedItemCnt;
        }
        if ($this->remainingMaterialCnt !== null) {
            $result['remaining_material_cnt'] = $this->remainingMaterialCnt;
        }
        if ($this->settledIncome !== null) {
            $result['settled_income'] = $this->settledIncome;
        }
        if ($this->shopName !== null) {
            $result['shop_name'] = $this->shopName;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        if ($this->taskName !== null) {
            $result['task_name'] = $this->taskName;
        }
        if ($this->taskStatus !== null) {
            $result['task_status'] = $this->taskStatus;
        }
        if ($this->totalAdCost !== null) {
            $result['total_ad_cost'] = $this->totalAdCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_plan_cnt_product'] ?? null) !== null) {
            $obj->adPlanCntProduct = (int) $v;
        }
        if (($v = $data['confirmed_author_cnt'] ?? null) !== null) {
            $obj->confirmedAuthorCnt = (int) $v;
        }
        if (($v = $data['confirming_author_cnt'] ?? null) !== null) {
            $obj->confirmingAuthorCnt = (int) $v;
        }
        if (($v = $data['confirming_item_cnt'] ?? null) !== null) {
            $obj->confirmingItemCnt = (int) $v;
        }
        if (($v = $data['estimated_settle_income'] ?? null) !== null) {
            $obj->estimatedSettleIncome = (int) $v;
        }
        if (($v = $data['expiration_time_end'] ?? null) !== null) {
            $obj->expirationTimeEnd = (int) $v;
        }
        if (($v = $data['live_ad_cost'] ?? null) !== null) {
            $obj->liveAdCost = (int) $v;
        }
        if (($v = $data['participated_author_cnt'] ?? null) !== null) {
            $obj->participatedAuthorCnt = (int) $v;
        }
        if (($v = $data['product_ad_cost'] ?? null) !== null) {
            $obj->productAdCost = (int) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['published_item_cnt'] ?? null) !== null) {
            $obj->publishedItemCnt = (int) $v;
        }
        if (($v = $data['remaining_material_cnt'] ?? null) !== null) {
            $obj->remainingMaterialCnt = (int) $v;
        }
        if (($v = $data['settled_income'] ?? null) !== null) {
            $obj->settledIncome = (int) $v;
        }
        if (($v = $data['shop_name'] ?? null) !== null) {
            $obj->shopName = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        if (($v = $data['task_name'] ?? null) !== null) {
            $obj->taskName = (string) $v;
        }
        if (($v = $data['task_status'] ?? null) !== null) {
            $obj->taskStatus = (int) $v;
        }
        if (($v = $data['total_ad_cost'] ?? null) !== null) {
            $obj->totalAdCost = (int) $v;
        }
        return $obj;
    }
}
