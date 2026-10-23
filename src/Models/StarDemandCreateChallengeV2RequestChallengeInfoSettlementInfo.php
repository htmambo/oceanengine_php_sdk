<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestChallengeInfoSettlementInfo implements \JsonSerializable
{
    /**
     * 巨量引擎广告主ID 需要确保转化ID已在巨量引擎后台创建并激活
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * Android转化ID 有效的转化ID
     * @var int
     */
    protected ?int $androidConvertId = null;

    /**
     * 自动追加预算次数。总金额除以自动追加次数等于单次追加金额 auto_add_budget_trigger_ratio 为正时需提供，最低1，且保证单次追加预算金额不低于10000
     * @var int
     */
    protected ?int $autoAddBudgetTimes = null;

    /**
     * 预算自动追加节点 当消耗到x%时，允许平台自动追加预算 非负整数。为0则不启用自动追加预算，最大100
     * @var int
     */
    protected ?int $autoAddBudgetTriggerRatio = null;

    /**
     * cps分佣比例
     * @var int
     */
    protected ?int $commissionRate = null;

    /**
     * 考核指标 5=视频有效播放量 4=激活总数 10=安装完成数量 31=组件点击数 32=APP唤起 201=客户自定义
     * @var int
     */
    protected ?int $evaluateType = null;

    /**
     * iaa分佣比例
     * @var int
     */
    protected ?int $iaaCommissionRate = null;

    /**
     * iOS转化ID 有效的转化ID
     * @var int
     */
    protected ?int $iosConvertId = null;

    /**
     * 自动追加预算总金额（单位元） auto_add_budget_trigger_ratio 为正时需提供，最低10000
     * @var int
     */
    protected ?int $maxBudgetAddAmount = null;

    /**
     * 奖励规则 2000字内
     * @var string
     */
    protected ?string $rewardRule = null;

    /**
     * 奖励补充说明 200字内
     * @var string
     */
    protected ?string $supplementInfo = null;

    /**
     * 单价（单位分） 根据考核指标的不同而不同： 为视频有效播放量时为千次曝光单价 为激活总数时为Android激活单价 为安装完成数量时为安装单价 为组件点击数时为单次点击单价 为APP唤起时为唤起单价 为客户自定义时为0
     * @var int
     */
    protected ?int $unitPrice = null;

    /**
     * 巨量引擎广告主ID 需要确保转化ID已在巨量引擎后台创建并激活
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 巨量引擎广告主ID 需要确保转化ID已在巨量引擎后台创建并激活
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * Android转化ID 有效的转化ID
     * @return int
     */
    public function getAndroidConvertId(): ?int
    {
        return $this->androidConvertId;
    }

    /**
     * Android转化ID 有效的转化ID
     * @param int $androidConvertId
     * @return self
     */
    public function setAndroidConvertId(?int $androidConvertId): self
    {
        $this->androidConvertId = $androidConvertId;
        return $this;
    }

    /**
     * 自动追加预算次数。总金额除以自动追加次数等于单次追加金额 auto_add_budget_trigger_ratio 为正时需提供，最低1，且保证单次追加预算金额不低于10000
     * @return int
     */
    public function getAutoAddBudgetTimes(): ?int
    {
        return $this->autoAddBudgetTimes;
    }

    /**
     * 自动追加预算次数。总金额除以自动追加次数等于单次追加金额 auto_add_budget_trigger_ratio 为正时需提供，最低1，且保证单次追加预算金额不低于10000
     * @param int $autoAddBudgetTimes
     * @return self
     */
    public function setAutoAddBudgetTimes(?int $autoAddBudgetTimes): self
    {
        $this->autoAddBudgetTimes = $autoAddBudgetTimes;
        return $this;
    }

    /**
     * 预算自动追加节点 当消耗到x%时，允许平台自动追加预算 非负整数。为0则不启用自动追加预算，最大100
     * @return int
     */
    public function getAutoAddBudgetTriggerRatio(): ?int
    {
        return $this->autoAddBudgetTriggerRatio;
    }

    /**
     * 预算自动追加节点 当消耗到x%时，允许平台自动追加预算 非负整数。为0则不启用自动追加预算，最大100
     * @param int $autoAddBudgetTriggerRatio
     * @return self
     */
    public function setAutoAddBudgetTriggerRatio(?int $autoAddBudgetTriggerRatio): self
    {
        $this->autoAddBudgetTriggerRatio = $autoAddBudgetTriggerRatio;
        return $this;
    }

    /**
     * cps分佣比例
     * @return int
     */
    public function getCommissionRate(): ?int
    {
        return $this->commissionRate;
    }

    /**
     * cps分佣比例
     * @param int $commissionRate
     * @return self
     */
    public function setCommissionRate(?int $commissionRate): self
    {
        $this->commissionRate = $commissionRate;
        return $this;
    }

    /**
     * 考核指标 5=视频有效播放量 4=激活总数 10=安装完成数量 31=组件点击数 32=APP唤起 201=客户自定义
     * @return int
     */
    public function getEvaluateType(): ?int
    {
        return $this->evaluateType;
    }

    /**
     * 考核指标 5=视频有效播放量 4=激活总数 10=安装完成数量 31=组件点击数 32=APP唤起 201=客户自定义
     * @param int $evaluateType
     * @return self
     */
    public function setEvaluateType(?int $evaluateType): self
    {
        $this->evaluateType = $evaluateType;
        return $this;
    }

    /**
     * iaa分佣比例
     * @return int
     */
    public function getIaaCommissionRate(): ?int
    {
        return $this->iaaCommissionRate;
    }

    /**
     * iaa分佣比例
     * @param int $iaaCommissionRate
     * @return self
     */
    public function setIaaCommissionRate(?int $iaaCommissionRate): self
    {
        $this->iaaCommissionRate = $iaaCommissionRate;
        return $this;
    }

    /**
     * iOS转化ID 有效的转化ID
     * @return int
     */
    public function getIosConvertId(): ?int
    {
        return $this->iosConvertId;
    }

    /**
     * iOS转化ID 有效的转化ID
     * @param int $iosConvertId
     * @return self
     */
    public function setIosConvertId(?int $iosConvertId): self
    {
        $this->iosConvertId = $iosConvertId;
        return $this;
    }

    /**
     * 自动追加预算总金额（单位元） auto_add_budget_trigger_ratio 为正时需提供，最低10000
     * @return int
     */
    public function getMaxBudgetAddAmount(): ?int
    {
        return $this->maxBudgetAddAmount;
    }

    /**
     * 自动追加预算总金额（单位元） auto_add_budget_trigger_ratio 为正时需提供，最低10000
     * @param int $maxBudgetAddAmount
     * @return self
     */
    public function setMaxBudgetAddAmount(?int $maxBudgetAddAmount): self
    {
        $this->maxBudgetAddAmount = $maxBudgetAddAmount;
        return $this;
    }

    /**
     * 奖励规则 2000字内
     * @return string
     */
    public function getRewardRule(): ?string
    {
        return $this->rewardRule;
    }

    /**
     * 奖励规则 2000字内
     * @param string $rewardRule
     * @return self
     */
    public function setRewardRule(?string $rewardRule): self
    {
        $this->rewardRule = $rewardRule;
        return $this;
    }

    /**
     * 奖励补充说明 200字内
     * @return string
     */
    public function getSupplementInfo(): ?string
    {
        return $this->supplementInfo;
    }

    /**
     * 奖励补充说明 200字内
     * @param string $supplementInfo
     * @return self
     */
    public function setSupplementInfo(?string $supplementInfo): self
    {
        $this->supplementInfo = $supplementInfo;
        return $this;
    }

    /**
     * 单价（单位分） 根据考核指标的不同而不同： 为视频有效播放量时为千次曝光单价 为激活总数时为Android激活单价 为安装完成数量时为安装单价 为组件点击数时为单次点击单价 为APP唤起时为唤起单价 为客户自定义时为0
     * @return int
     */
    public function getUnitPrice(): ?int
    {
        return $this->unitPrice;
    }

    /**
     * 单价（单位分） 根据考核指标的不同而不同： 为视频有效播放量时为千次曝光单价 为激活总数时为Android激活单价 为安装完成数量时为安装单价 为组件点击数时为单次点击单价 为APP唤起时为唤起单价 为客户自定义时为0
     * @param int $unitPrice
     * @return self
     */
    public function setUnitPrice(?int $unitPrice): self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->androidConvertId !== null) {
            $result['android_convert_id'] = $this->androidConvertId;
        }
        if ($this->autoAddBudgetTimes !== null) {
            $result['auto_add_budget_times'] = $this->autoAddBudgetTimes;
        }
        if ($this->autoAddBudgetTriggerRatio !== null) {
            $result['auto_add_budget_trigger_ratio'] = $this->autoAddBudgetTriggerRatio;
        }
        if ($this->commissionRate !== null) {
            $result['commission_rate'] = $this->commissionRate;
        }
        if ($this->evaluateType !== null) {
            $result['evaluate_type'] = $this->evaluateType;
        }
        if ($this->iaaCommissionRate !== null) {
            $result['iaa_commission_rate'] = $this->iaaCommissionRate;
        }
        if ($this->iosConvertId !== null) {
            $result['ios_convert_id'] = $this->iosConvertId;
        }
        if ($this->maxBudgetAddAmount !== null) {
            $result['max_budget_add_amount'] = $this->maxBudgetAddAmount;
        }
        if ($this->rewardRule !== null) {
            $result['reward_rule'] = $this->rewardRule;
        }
        if ($this->supplementInfo !== null) {
            $result['supplement_info'] = $this->supplementInfo;
        }
        if ($this->unitPrice !== null) {
            $result['unit_price'] = $this->unitPrice;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['android_convert_id'] ?? null) !== null) {
            $obj->androidConvertId = (int) $v;
        }
        if (($v = $data['auto_add_budget_times'] ?? null) !== null) {
            $obj->autoAddBudgetTimes = (int) $v;
        }
        if (($v = $data['auto_add_budget_trigger_ratio'] ?? null) !== null) {
            $obj->autoAddBudgetTriggerRatio = (int) $v;
        }
        if (($v = $data['commission_rate'] ?? null) !== null) {
            $obj->commissionRate = (int) $v;
        }
        if (($v = $data['evaluate_type'] ?? null) !== null) {
            $obj->evaluateType = (int) $v;
        }
        if (($v = $data['iaa_commission_rate'] ?? null) !== null) {
            $obj->iaaCommissionRate = (int) $v;
        }
        if (($v = $data['ios_convert_id'] ?? null) !== null) {
            $obj->iosConvertId = (int) $v;
        }
        if (($v = $data['max_budget_add_amount'] ?? null) !== null) {
            $obj->maxBudgetAddAmount = (int) $v;
        }
        if (($v = $data['reward_rule'] ?? null) !== null) {
            $obj->rewardRule = (string) $v;
        }
        if (($v = $data['supplement_info'] ?? null) !== null) {
            $obj->supplementInfo = (string) $v;
        }
        if (($v = $data['unit_price'] ?? null) !== null) {
            $obj->unitPrice = (int) $v;
        }
        return $obj;
    }
}
