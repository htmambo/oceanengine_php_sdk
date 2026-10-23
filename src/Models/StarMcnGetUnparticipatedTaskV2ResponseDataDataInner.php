<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnGetUnparticipatedTaskV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $brand = null;

    /**
     * @var int
     */
    protected ?int $challengeStatus = null;

    /**
     * @var int
     */
    protected ?int $commissionRate = null;

    /**
     * @var string
     */
    protected ?string $commissionRateIaap = null;

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
    protected ?int $firstClassCategory = null;

    /**
     * @var int
     */
    protected ?int $highProfitChallenge = null;

    /**
     * @var int
     */
    protected ?int $itemComponentType = null;

    /**
     * @var int
     */
    protected ?int $mcnProfitRate = null;

    /**
     * @var int
     */
    protected ?int $payType = null;

    /**
     * @var int
     */
    protected ?int $playletCategory = null;

    /**
     * @var int
     */
    protected ?int $playletFirstWeek = null;

    /**
     * @var int[]
     */
    protected ?array $playletGender = null;

    /**
     * @var int
     */
    protected ?int $playletHot = null;

    /**
     * @var int
     */
    protected ?int $playletSecondWeek = null;

    /**
     * @var int[]
     */
    protected ?array $playletTheme = null;

    /**
     * @var int
     */
    protected ?int $price = null;

    /**
     * @var int
     */
    protected ?int $productCategory = null;

    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var array<string,int>
     */
    protected ?array $profitRateChannel = null;

    /**
     * @var int
     */
    protected ?int $realCost = null;

    /**
     * @var int
     */
    protected ?int $secondClassCategory = null;

    /**
     * @var \Oceanengine\Models\StarMcnGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo
     */
    protected ?\Oceanengine\Models\StarMcnGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo $smallAppInfo = null;

    /**
     * @var int
     */
    protected ?int $totalBudget = null;

    /**
     * @var int
     */
    protected ?int $videoType = null;

    /**
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return self
     */
    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return int
     */
    public function getChallengeStatus(): ?int
    {
        return $this->challengeStatus;
    }

    /**
     * @param int $challengeStatus
     * @return self
     */
    public function setChallengeStatus(?int $challengeStatus): self
    {
        $this->challengeStatus = $challengeStatus;
        return $this;
    }

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
    public function getHighProfitChallenge(): ?int
    {
        return $this->highProfitChallenge;
    }

    /**
     * @param int $highProfitChallenge
     * @return self
     */
    public function setHighProfitChallenge(?int $highProfitChallenge): self
    {
        $this->highProfitChallenge = $highProfitChallenge;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemComponentType(): ?int
    {
        return $this->itemComponentType;
    }

    /**
     * @param int $itemComponentType
     * @return self
     */
    public function setItemComponentType(?int $itemComponentType): self
    {
        $this->itemComponentType = $itemComponentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getMcnProfitRate(): ?int
    {
        return $this->mcnProfitRate;
    }

    /**
     * @param int $mcnProfitRate
     * @return self
     */
    public function setMcnProfitRate(?int $mcnProfitRate): self
    {
        $this->mcnProfitRate = $mcnProfitRate;
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
     * @return int
     */
    public function getPlayletCategory(): ?int
    {
        return $this->playletCategory;
    }

    /**
     * @param int $playletCategory
     * @return self
     */
    public function setPlayletCategory(?int $playletCategory): self
    {
        $this->playletCategory = $playletCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayletFirstWeek(): ?int
    {
        return $this->playletFirstWeek;
    }

    /**
     * @param int $playletFirstWeek
     * @return self
     */
    public function setPlayletFirstWeek(?int $playletFirstWeek): self
    {
        $this->playletFirstWeek = $playletFirstWeek;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPlayletGender(): ?array
    {
        return $this->playletGender;
    }

    /**
     * @param int[] $playletGender
     * @return self
     */
    public function setPlayletGender(?array $playletGender): self
    {
        $this->playletGender = $playletGender;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayletHot(): ?int
    {
        return $this->playletHot;
    }

    /**
     * @param int $playletHot
     * @return self
     */
    public function setPlayletHot(?int $playletHot): self
    {
        $this->playletHot = $playletHot;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayletSecondWeek(): ?int
    {
        return $this->playletSecondWeek;
    }

    /**
     * @param int $playletSecondWeek
     * @return self
     */
    public function setPlayletSecondWeek(?int $playletSecondWeek): self
    {
        $this->playletSecondWeek = $playletSecondWeek;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPlayletTheme(): ?array
    {
        return $this->playletTheme;
    }

    /**
     * @param int[] $playletTheme
     * @return self
     */
    public function setPlayletTheme(?array $playletTheme): self
    {
        $this->playletTheme = $playletTheme;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
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
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return array<string,int>
     */
    public function getProfitRateChannel(): ?array
    {
        return $this->profitRateChannel;
    }

    /**
     * @param array<string,int> $profitRateChannel
     * @return self
     */
    public function setProfitRateChannel(?array $profitRateChannel): self
    {
        $this->profitRateChannel = $profitRateChannel;
        return $this;
    }

    /**
     * @return int
     */
    public function getRealCost(): ?int
    {
        return $this->realCost;
    }

    /**
     * @param int $realCost
     * @return self
     */
    public function setRealCost(?int $realCost): self
    {
        $this->realCost = $realCost;
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
     * @return \Oceanengine\Models\StarMcnGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo
     */
    public function getSmallAppInfo(): ?\Oceanengine\Models\StarMcnGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo
    {
        return $this->smallAppInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo $smallAppInfo
     * @return self
     */
    public function setSmallAppInfo(?\Oceanengine\Models\StarMcnGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo $smallAppInfo): self
    {
        $this->smallAppInfo = $smallAppInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalBudget(): ?int
    {
        return $this->totalBudget;
    }

    /**
     * @param int $totalBudget
     * @return self
     */
    public function setTotalBudget(?int $totalBudget): self
    {
        $this->totalBudget = $totalBudget;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoType(): ?int
    {
        return $this->videoType;
    }

    /**
     * @param int $videoType
     * @return self
     */
    public function setVideoType(?int $videoType): self
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brand !== null) {
            $result['brand'] = $this->brand;
        }
        if ($this->challengeStatus !== null) {
            $result['challenge_status'] = $this->challengeStatus;
        }
        if ($this->commissionRate !== null) {
            $result['commission_rate'] = $this->commissionRate;
        }
        if ($this->commissionRateIaap !== null) {
            $result['commission_rate_iaap'] = $this->commissionRateIaap;
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
        if ($this->firstClassCategory !== null) {
            $result['first_class_category'] = $this->firstClassCategory;
        }
        if ($this->highProfitChallenge !== null) {
            $result['high_profit_challenge'] = $this->highProfitChallenge;
        }
        if ($this->itemComponentType !== null) {
            $result['item_component_type'] = $this->itemComponentType;
        }
        if ($this->mcnProfitRate !== null) {
            $result['mcn_profit_rate'] = $this->mcnProfitRate;
        }
        if ($this->payType !== null) {
            $result['pay_type'] = $this->payType;
        }
        if ($this->playletCategory !== null) {
            $result['playlet_category'] = $this->playletCategory;
        }
        if ($this->playletFirstWeek !== null) {
            $result['playlet_first_week'] = $this->playletFirstWeek;
        }
        if ($this->playletGender !== null) {
            $result['playlet_gender'] = $this->playletGender;
        }
        if ($this->playletHot !== null) {
            $result['playlet_hot'] = $this->playletHot;
        }
        if ($this->playletSecondWeek !== null) {
            $result['playlet_second_week'] = $this->playletSecondWeek;
        }
        if ($this->playletTheme !== null) {
            $result['playlet_theme'] = $this->playletTheme;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        if ($this->productCategory !== null) {
            $result['product_category'] = $this->productCategory;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->profitRateChannel !== null) {
            $result['profit_rate_channel'] = $this->profitRateChannel;
        }
        if ($this->realCost !== null) {
            $result['real_cost'] = $this->realCost;
        }
        if ($this->secondClassCategory !== null) {
            $result['second_class_category'] = $this->secondClassCategory;
        }
        if ($this->smallAppInfo !== null) {
            $result['small_app_info'] = $this->smallAppInfo;
        }
        if ($this->totalBudget !== null) {
            $result['total_budget'] = $this->totalBudget;
        }
        if ($this->videoType !== null) {
            $result['video_type'] = $this->videoType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand'] ?? null) !== null) {
            $obj->brand = (string) $v;
        }
        if (($v = $data['challenge_status'] ?? null) !== null) {
            $obj->challengeStatus = (int) $v;
        }
        if (($v = $data['commission_rate'] ?? null) !== null) {
            $obj->commissionRate = (int) $v;
        }
        if (($v = $data['commission_rate_iaap'] ?? null) !== null) {
            $obj->commissionRateIaap = (string) $v;
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
        if (($v = $data['first_class_category'] ?? null) !== null) {
            $obj->firstClassCategory = (int) $v;
        }
        if (($v = $data['high_profit_challenge'] ?? null) !== null) {
            $obj->highProfitChallenge = (int) $v;
        }
        if (($v = $data['item_component_type'] ?? null) !== null) {
            $obj->itemComponentType = (int) $v;
        }
        if (($v = $data['mcn_profit_rate'] ?? null) !== null) {
            $obj->mcnProfitRate = (int) $v;
        }
        if (($v = $data['pay_type'] ?? null) !== null) {
            $obj->payType = (int) $v;
        }
        if (($v = $data['playlet_category'] ?? null) !== null) {
            $obj->playletCategory = (int) $v;
        }
        if (($v = $data['playlet_first_week'] ?? null) !== null) {
            $obj->playletFirstWeek = (int) $v;
        }
        if (($v = $data['playlet_gender'] ?? null) !== null && is_array($v)) {
            $obj->playletGender = $v;
        }
        if (($v = $data['playlet_hot'] ?? null) !== null) {
            $obj->playletHot = (int) $v;
        }
        if (($v = $data['playlet_second_week'] ?? null) !== null) {
            $obj->playletSecondWeek = (int) $v;
        }
        if (($v = $data['playlet_theme'] ?? null) !== null && is_array($v)) {
            $obj->playletTheme = $v;
        }
        if (($v = $data['price'] ?? null) !== null) {
            $obj->price = (int) $v;
        }
        if (($v = $data['product_category'] ?? null) !== null) {
            $obj->productCategory = (int) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['profit_rate_channel'] ?? null) !== null && is_array($v)) {
            $obj->profitRateChannel = $v;
        }
        if (($v = $data['real_cost'] ?? null) !== null) {
            $obj->realCost = (int) $v;
        }
        if (($v = $data['second_class_category'] ?? null) !== null) {
            $obj->secondClassCategory = (int) $v;
        }
        if (($v = $data['small_app_info'] ?? null) !== null && is_array($v)) {
            $obj->smallAppInfo = \Oceanengine\Models\StarMcnGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo::fromArray($v);
        }
        if (($v = $data['total_budget'] ?? null) !== null) {
            $obj->totalBudget = (int) $v;
        }
        if (($v = $data['video_type'] ?? null) !== null) {
            $obj->videoType = (int) $v;
        }
        return $obj;
    }
}
