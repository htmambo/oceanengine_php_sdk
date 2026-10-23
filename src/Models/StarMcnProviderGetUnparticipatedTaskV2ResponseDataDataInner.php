<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetUnparticipatedTaskV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $commissionRate = null;

    /**
     * @var string
     */
    protected ?string $commissionRateIaap = null;

    /**
     * @var int
     */
    protected ?int $componentType = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $demandIcon = null;

    /**
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * @var int
     */
    protected ?int $evaluateType = null;

    /**
     * @var string
     */
    protected ?string $expirationTime = null;

    /**
     * @var string
     */
    protected ?string $expirationTimeEnd = null;

    /**
     * @var int
     */
    protected ?int $firstCategoryId = null;

    /**
     * @var int
     */
    protected ?int $firstClassCategory = null;

    /**
     * @var int
     */
    protected ?int $participateCope = null;

    /**
     * @var int
     */
    protected ?int $payType = null;

    /**
     * 任务单价 CPM CPA
     * @var int
     */
    protected ?int $price = null;

    /**
     * @var int
     */
    protected ?int $productCategory = null;

    /**
     * @var int
     */
    protected ?int $quota = null;

    /**
     * @var int
     */
    protected ?int $secondClassCategory = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo $smallAppInfo = null;

    /**
     * @var bool
     */
    protected ?bool $taskSupportAd = null;

    /**
     * @return int
     */
    public function getCommissionRate(): ?int
    {
        return $this->commissionRate;
    }

    /**
     * @param int $commissionRate
     * @return self
     */
    public function setCommissionRate(?int $commissionRate): self
    {
        $this->commissionRate = $commissionRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommissionRateIaap(): ?string
    {
        return $this->commissionRateIaap;
    }

    /**
     * @param string $commissionRateIaap
     * @return self
     */
    public function setCommissionRateIaap(?string $commissionRateIaap): self
    {
        $this->commissionRateIaap = $commissionRateIaap;
        return $this;
    }

    /**
     * @return int
     */
    public function getComponentType(): ?int
    {
        return $this->componentType;
    }

    /**
     * @param int $componentType
     * @return self
     */
    public function setComponentType(?int $componentType): self
    {
        $this->componentType = $componentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDemandIcon(): ?string
    {
        return $this->demandIcon;
    }

    /**
     * @param string $demandIcon
     * @return self
     */
    public function setDemandIcon(?string $demandIcon): self
    {
        $this->demandIcon = $demandIcon;
        return $this;
    }

    /**
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * @return int
     */
    public function getEvaluateType(): ?int
    {
        return $this->evaluateType;
    }

    /**
     * @param int $evaluateType
     * @return self
     */
    public function setEvaluateType(?int $evaluateType): self
    {
        $this->evaluateType = $evaluateType;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationTime(): ?string
    {
        return $this->expirationTime;
    }

    /**
     * @param string $expirationTime
     * @return self
     */
    public function setExpirationTime(?string $expirationTime): self
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationTimeEnd(): ?string
    {
        return $this->expirationTimeEnd;
    }

    /**
     * @param string $expirationTimeEnd
     * @return self
     */
    public function setExpirationTimeEnd(?string $expirationTimeEnd): self
    {
        $this->expirationTimeEnd = $expirationTimeEnd;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstCategoryId(): ?int
    {
        return $this->firstCategoryId;
    }

    /**
     * @param int $firstCategoryId
     * @return self
     */
    public function setFirstCategoryId(?int $firstCategoryId): self
    {
        $this->firstCategoryId = $firstCategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstClassCategory(): ?int
    {
        return $this->firstClassCategory;
    }

    /**
     * @param int $firstClassCategory
     * @return self
     */
    public function setFirstClassCategory(?int $firstClassCategory): self
    {
        $this->firstClassCategory = $firstClassCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getParticipateCope(): ?int
    {
        return $this->participateCope;
    }

    /**
     * @param int $participateCope
     * @return self
     */
    public function setParticipateCope(?int $participateCope): self
    {
        $this->participateCope = $participateCope;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayType(): ?int
    {
        return $this->payType;
    }

    /**
     * @param int $payType
     * @return self
     */
    public function setPayType(?int $payType): self
    {
        $this->payType = $payType;
        return $this;
    }

    /**
     * 任务单价 CPM CPA
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * 任务单价 CPM CPA
     * @param int $price
     * @return self
     */
    public function setPrice(?int $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductCategory(): ?int
    {
        return $this->productCategory;
    }

    /**
     * @param int $productCategory
     * @return self
     */
    public function setProductCategory(?int $productCategory): self
    {
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuota(): ?int
    {
        return $this->quota;
    }

    /**
     * @param int $quota
     * @return self
     */
    public function setQuota(?int $quota): self
    {
        $this->quota = $quota;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecondClassCategory(): ?int
    {
        return $this->secondClassCategory;
    }

    /**
     * @param int $secondClassCategory
     * @return self
     */
    public function setSecondClassCategory(?int $secondClassCategory): self
    {
        $this->secondClassCategory = $secondClassCategory;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo
     */
    public function getSmallAppInfo(): ?\Oceanengine\Models\StarMcnProviderGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo
    {
        return $this->smallAppInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo $smallAppInfo
     * @return self
     */
    public function setSmallAppInfo(?\Oceanengine\Models\StarMcnProviderGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo $smallAppInfo): self
    {
        $this->smallAppInfo = $smallAppInfo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaskSupportAd(): ?bool
    {
        return $this->taskSupportAd;
    }

    /**
     * @param bool $taskSupportAd
     * @return self
     */
    public function setTaskSupportAd(?bool $taskSupportAd): self
    {
        $this->taskSupportAd = $taskSupportAd;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->commissionRate !== null) {
            $result['commission_rate'] = $this->commissionRate;
        }
        if ($this->commissionRateIaap !== null) {
            $result['commission_rate_iaap'] = $this->commissionRateIaap;
        }
        if ($this->componentType !== null) {
            $result['component_type'] = $this->componentType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandIcon !== null) {
            $result['demand_icon'] = $this->demandIcon;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->evaluateType !== null) {
            $result['evaluate_type'] = $this->evaluateType;
        }
        if ($this->expirationTime !== null) {
            $result['expiration_time'] = $this->expirationTime;
        }
        if ($this->expirationTimeEnd !== null) {
            $result['expiration_time_end'] = $this->expirationTimeEnd;
        }
        if ($this->firstCategoryId !== null) {
            $result['first_category_id'] = $this->firstCategoryId;
        }
        if ($this->firstClassCategory !== null) {
            $result['first_class_category'] = $this->firstClassCategory;
        }
        if ($this->participateCope !== null) {
            $result['participate_cope'] = $this->participateCope;
        }
        if ($this->payType !== null) {
            $result['pay_type'] = $this->payType;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        if ($this->productCategory !== null) {
            $result['product_category'] = $this->productCategory;
        }
        if ($this->quota !== null) {
            $result['quota'] = $this->quota;
        }
        if ($this->secondClassCategory !== null) {
            $result['second_class_category'] = $this->secondClassCategory;
        }
        if ($this->smallAppInfo !== null) {
            $result['small_app_info'] = $this->smallAppInfo;
        }
        if ($this->taskSupportAd !== null) {
            $result['task_support_ad'] = $this->taskSupportAd;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['commission_rate'] ?? null) !== null) {
            $obj->commissionRate = (int) $v;
        }
        if (($v = $data['commission_rate_iaap'] ?? null) !== null) {
            $obj->commissionRateIaap = (string) $v;
        }
        if (($v = $data['component_type'] ?? null) !== null) {
            $obj->componentType = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['demand_icon'] ?? null) !== null) {
            $obj->demandIcon = (string) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['evaluate_type'] ?? null) !== null) {
            $obj->evaluateType = (int) $v;
        }
        if (($v = $data['expiration_time'] ?? null) !== null) {
            $obj->expirationTime = (string) $v;
        }
        if (($v = $data['expiration_time_end'] ?? null) !== null) {
            $obj->expirationTimeEnd = (string) $v;
        }
        if (($v = $data['first_category_id'] ?? null) !== null) {
            $obj->firstCategoryId = (int) $v;
        }
        if (($v = $data['first_class_category'] ?? null) !== null) {
            $obj->firstClassCategory = (int) $v;
        }
        if (($v = $data['participate_cope'] ?? null) !== null) {
            $obj->participateCope = (int) $v;
        }
        if (($v = $data['pay_type'] ?? null) !== null) {
            $obj->payType = (int) $v;
        }
        if (($v = $data['price'] ?? null) !== null) {
            $obj->price = (int) $v;
        }
        if (($v = $data['product_category'] ?? null) !== null) {
            $obj->productCategory = (int) $v;
        }
        if (($v = $data['quota'] ?? null) !== null) {
            $obj->quota = (int) $v;
        }
        if (($v = $data['second_class_category'] ?? null) !== null) {
            $obj->secondClassCategory = (int) $v;
        }
        if (($v = $data['small_app_info'] ?? null) !== null && is_array($v)) {
            $obj->smallAppInfo = \Oceanengine\Models\StarMcnProviderGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo::fromArray($v);
        }
        if (($v = $data['task_support_ad'] ?? null) !== null) {
            $obj->taskSupportAd = (bool) $v;
        }
        return $obj;
    }
}
