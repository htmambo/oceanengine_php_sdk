<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DiagnosisTaskAdvCreateV2RequestDiagnoseConfig implements \JsonSerializable
{
    /**
     * 受众年龄
     * @var \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge[]
     */
    protected ?array $audienceAge = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender
     */
    protected ?string $audienceGender = null;

    /**
     * 网络类型
     * @var \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork[]
     */
    protected ?array $audienceNetwork = null;

    /**
     * 受众地区，传入二级行政区域（市）的code，行政区域接口
     * @var int[]
     */
    protected ?array $audienceRegion = null;

    /**
     * 预算金额：取值范围: [1, 10000],  精确到小数点后2位
     * @var float
     */
    protected ?float $budget = null;

    /**
     * 是否最优成本出价，只有AD支持，千川场景下会忽略本字段
     * @var bool
     */
    protected ?bool $costCap = null;

    /**
     * 目标转化成本：取值范围: [1, 10000],  精确到小数点后2位
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * 目标点击成本：取值范围: [1, 10000],  精确到小数点后2位
     * @var float
     */
    protected ?float $cpcBid = null;

    /**
     * 客户名称
     * @var string
     */
    protected ?string $cusName = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * 是否最大转化出价，只有AD支持，千川场景下会忽略本字段
     * @var bool
     */
    protected ?bool $nobid = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform
     */
    protected ?string $platform = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType
     */
    protected ?string $pricingType = null;

    /**
     * 是否稳定成本出价，只有AD支持，千川场景下会忽略本字段
     * @var bool
     */
    protected ?bool $targetCost = null;

    /**
     * 受众年龄
     * @return \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge[]
     */
    public function getAudienceAge(): ?array
    {
        return $this->audienceAge;
    }

    /**
     * 受众年龄
     * @param \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceAge[] $audienceAge
     * @return self
     */
    public function setAudienceAge(?array $audienceAge): self
    {
        $this->audienceAge = $audienceAge;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender
     */
    public function getAudienceGender(): ?string
    {
        return $this->audienceGender;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceGender $audienceGender
     * @return self
     */
    public function setAudienceGender(?string $audienceGender): self
    {
        $this->audienceGender = $audienceGender;
        return $this;
    }

    /**
     * 网络类型
     * @return \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork[]
     */
    public function getAudienceNetwork(): ?array
    {
        return $this->audienceNetwork;
    }

    /**
     * 网络类型
     * @param \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigAudienceNetwork[] $audienceNetwork
     * @return self
     */
    public function setAudienceNetwork(?array $audienceNetwork): self
    {
        $this->audienceNetwork = $audienceNetwork;
        return $this;
    }

    /**
     * 受众地区，传入二级行政区域（市）的code，行政区域接口
     * @return int[]
     */
    public function getAudienceRegion(): ?array
    {
        return $this->audienceRegion;
    }

    /**
     * 受众地区，传入二级行政区域（市）的code，行政区域接口
     * @param int[] $audienceRegion
     * @return self
     */
    public function setAudienceRegion(?array $audienceRegion): self
    {
        $this->audienceRegion = $audienceRegion;
        return $this;
    }

    /**
     * 预算金额：取值范围: [1, 10000],  精确到小数点后2位
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 预算金额：取值范围: [1, 10000],  精确到小数点后2位
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 是否最优成本出价，只有AD支持，千川场景下会忽略本字段
     * @return bool
     */
    public function getCostCap(): ?bool
    {
        return $this->costCap;
    }

    /**
     * 是否最优成本出价，只有AD支持，千川场景下会忽略本字段
     * @param bool $costCap
     * @return self
     */
    public function setCostCap(?bool $costCap): self
    {
        $this->costCap = $costCap;
        return $this;
    }

    /**
     * 目标转化成本：取值范围: [1, 10000],  精确到小数点后2位
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * 目标转化成本：取值范围: [1, 10000],  精确到小数点后2位
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

    /**
     * 目标点击成本：取值范围: [1, 10000],  精确到小数点后2位
     * @return float
     */
    public function getCpcBid(): ?float
    {
        return $this->cpcBid;
    }

    /**
     * 目标点击成本：取值范围: [1, 10000],  精确到小数点后2位
     * @param float $cpcBid
     * @return self
     */
    public function setCpcBid(?float $cpcBid): self
    {
        $this->cpcBid = $cpcBid;
        return $this;
    }

    /**
     * 客户名称
     * @return string
     */
    public function getCusName(): ?string
    {
        return $this->cusName;
    }

    /**
     * 客户名称
     * @param string $cusName
     * @return self
     */
    public function setCusName(?string $cusName): self
    {
        $this->cusName = $cusName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 是否最大转化出价，只有AD支持，千川场景下会忽略本字段
     * @return bool
     */
    public function getNobid(): ?bool
    {
        return $this->nobid;
    }

    /**
     * 是否最大转化出价，只有AD支持，千川场景下会忽略本字段
     * @param bool $nobid
     * @return self
     */
    public function setNobid(?bool $nobid): self
    {
        $this->nobid = $nobid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType
     */
    public function getPricingType(): ?string
    {
        return $this->pricingType;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType $pricingType
     * @return self
     */
    public function setPricingType(?string $pricingType): self
    {
        $this->pricingType = $pricingType;
        return $this;
    }

    /**
     * 是否稳定成本出价，只有AD支持，千川场景下会忽略本字段
     * @return bool
     */
    public function getTargetCost(): ?bool
    {
        return $this->targetCost;
    }

    /**
     * 是否稳定成本出价，只有AD支持，千川场景下会忽略本字段
     * @param bool $targetCost
     * @return self
     */
    public function setTargetCost(?bool $targetCost): self
    {
        $this->targetCost = $targetCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audienceAge !== null) {
            $result['audience_age'] = $this->audienceAge;
        }
        if ($this->audienceGender !== null) {
            $result['audience_gender'] = $this->audienceGender;
        }
        if ($this->audienceNetwork !== null) {
            $result['audience_network'] = $this->audienceNetwork;
        }
        if ($this->audienceRegion !== null) {
            $result['audience_region'] = $this->audienceRegion;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->costCap !== null) {
            $result['cost_cap'] = $this->costCap;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->cpcBid !== null) {
            $result['cpc_bid'] = $this->cpcBid;
        }
        if ($this->cusName !== null) {
            $result['cus_name'] = $this->cusName;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->nobid !== null) {
            $result['nobid'] = $this->nobid;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->pricingType !== null) {
            $result['pricing_type'] = $this->pricingType;
        }
        if ($this->targetCost !== null) {
            $result['target_cost'] = $this->targetCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_age'] ?? null) !== null && is_array($v)) {
            $obj->audienceAge = $v;
        }
        if (($v = $data['audience_gender'] ?? null) !== null) {
            $obj->audienceGender = (string) $v;
        }
        if (($v = $data['audience_network'] ?? null) !== null && is_array($v)) {
            $obj->audienceNetwork = $v;
        }
        if (($v = $data['audience_region'] ?? null) !== null && is_array($v)) {
            $obj->audienceRegion = $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['cost_cap'] ?? null) !== null) {
            $obj->costCap = (bool) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['cpc_bid'] ?? null) !== null) {
            $obj->cpcBid = (float) $v;
        }
        if (($v = $data['cus_name'] ?? null) !== null) {
            $obj->cusName = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['nobid'] ?? null) !== null) {
            $obj->nobid = (bool) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['pricing_type'] ?? null) !== null) {
            $obj->pricingType = (string) $v;
        }
        if (($v = $data['target_cost'] ?? null) !== null) {
            $obj->targetCost = (bool) $v;
        }
        return $obj;
    }
}
