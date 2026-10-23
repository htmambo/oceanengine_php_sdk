<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsStarTaskSettlementConfigV2ResponseData implements \JsonSerializable
{
    /**
     * 任务最小可设置基础素材费单价（元），每条视频最低需要支付的价格,影响达人接单积极性 - 不同行业+素材类目组合，最小可设置素材费单价不同
     * @var float
     */
    protected ?float $minStarMaterialBid = null;

    /**
     * 任务最小可设置预算（元） - 最小可设置预算为固定值
     * @var float
     */
    protected ?float $minStarTaskBudget = null;

    /**
     * 素材分成费比例（单位是千分之一分，比如接口返回是20= 千分之20，实际是2%） - 不同的行业+素材类目组合，分成比例可能不同 - 限时免费期间，分成比例为0，后续变更请关注巨量运营/销售同学的通知
     * @var int
     */
    protected ?int $starAdCostDivideRatio = null;

    /**
     * 任务建议出价金额（元） - 不同行业和优化目标组合下，建议出价金额不同
     * @var float
     */
    protected ?float $suggestionStarTaskBid = null;

    /**
     * 任务最小可设置基础素材费单价（元），每条视频最低需要支付的价格,影响达人接单积极性 - 不同行业+素材类目组合，最小可设置素材费单价不同
     * @return float
     */
    public function getMinStarMaterialBid(): ?float
    {
        return $this->minStarMaterialBid;
    }

    /**
     * 任务最小可设置基础素材费单价（元），每条视频最低需要支付的价格,影响达人接单积极性 - 不同行业+素材类目组合，最小可设置素材费单价不同
     * @param float $minStarMaterialBid
     * @return self
     */
    public function setMinStarMaterialBid(?float $minStarMaterialBid): self
    {
        $this->minStarMaterialBid = $minStarMaterialBid;
        return $this;
    }

    /**
     * 任务最小可设置预算（元） - 最小可设置预算为固定值
     * @return float
     */
    public function getMinStarTaskBudget(): ?float
    {
        return $this->minStarTaskBudget;
    }

    /**
     * 任务最小可设置预算（元） - 最小可设置预算为固定值
     * @param float $minStarTaskBudget
     * @return self
     */
    public function setMinStarTaskBudget(?float $minStarTaskBudget): self
    {
        $this->minStarTaskBudget = $minStarTaskBudget;
        return $this;
    }

    /**
     * 素材分成费比例（单位是千分之一分，比如接口返回是20= 千分之20，实际是2%） - 不同的行业+素材类目组合，分成比例可能不同 - 限时免费期间，分成比例为0，后续变更请关注巨量运营/销售同学的通知
     * @return int
     */
    public function getStarAdCostDivideRatio(): ?int
    {
        return $this->starAdCostDivideRatio;
    }

    /**
     * 素材分成费比例（单位是千分之一分，比如接口返回是20= 千分之20，实际是2%） - 不同的行业+素材类目组合，分成比例可能不同 - 限时免费期间，分成比例为0，后续变更请关注巨量运营/销售同学的通知
     * @param int $starAdCostDivideRatio
     * @return self
     */
    public function setStarAdCostDivideRatio(?int $starAdCostDivideRatio): self
    {
        $this->starAdCostDivideRatio = $starAdCostDivideRatio;
        return $this;
    }

    /**
     * 任务建议出价金额（元） - 不同行业和优化目标组合下，建议出价金额不同
     * @return float
     */
    public function getSuggestionStarTaskBid(): ?float
    {
        return $this->suggestionStarTaskBid;
    }

    /**
     * 任务建议出价金额（元） - 不同行业和优化目标组合下，建议出价金额不同
     * @param float $suggestionStarTaskBid
     * @return self
     */
    public function setSuggestionStarTaskBid(?float $suggestionStarTaskBid): self
    {
        $this->suggestionStarTaskBid = $suggestionStarTaskBid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->minStarMaterialBid !== null) {
            $result['min_star_material_bid'] = $this->minStarMaterialBid;
        }
        if ($this->minStarTaskBudget !== null) {
            $result['min_star_task_budget'] = $this->minStarTaskBudget;
        }
        if ($this->starAdCostDivideRatio !== null) {
            $result['star_ad_cost_divide_ratio'] = $this->starAdCostDivideRatio;
        }
        if ($this->suggestionStarTaskBid !== null) {
            $result['suggestion_star_task_bid'] = $this->suggestionStarTaskBid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['min_star_material_bid'] ?? null) !== null) {
            $obj->minStarMaterialBid = (float) $v;
        }
        if (($v = $data['min_star_task_budget'] ?? null) !== null) {
            $obj->minStarTaskBudget = (float) $v;
        }
        if (($v = $data['star_ad_cost_divide_ratio'] ?? null) !== null) {
            $obj->starAdCostDivideRatio = (int) $v;
        }
        if (($v = $data['suggestion_star_task_bid'] ?? null) !== null) {
            $obj->suggestionStarTaskBid = (float) $v;
        }
        return $obj;
    }
}
