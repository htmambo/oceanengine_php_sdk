<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentQueryRiskPromotionListV2Filtering implements \JsonSerializable
{
    /**
     * 广告主账户ID，最多支持100个
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * 广告主账户名称，模糊搜索，长度不能超过30
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * 客户公司ID，最多支持100个
     * @var int[]
     */
    protected ?array $companyIds = null;

    /**
     * 客户公司名称，模糊搜索，长度不能超过30
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringFinalOperatorTag
     */
    protected ?string $finalOperatorTag = null;

    /**
     * 预结算标签；如果同时设置final_operator_tag和本字段，将以本字段为准
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList[]
     */
    protected ?array $finalOperatorTagList = null;

    /**
     * 违规素材ids，最多支持100个
     * @var int[]
     */
    protected ?array $illegalMaterialIds = null;

    /**
     * 本地推计划状态
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringLocalAdStatusList[]
     */
    protected ?array $localAdStatusList = null;

    /**
     * 广告ID，最多支持100个
     * @var int[]
     */
    protected ?array $promotionIds = null;

    /**
     * 广告名称，模糊搜索，长度不能超过30
     * @var string
     */
    protected ?string $promotionName = null;

    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringPromotionStatus
     */
    protected ?string $promotionStatus = null;

    /**
     * 投放单元状态；如果同时设置promotion_status和本字段，将以本字段为准
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringPromotionStatusList[]
     */
    protected ?array $promotionStatusList = null;

    /**
     * 千川计划状态
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList[]
     */
    protected ?array $qianchuanAdStatusList = null;

    /**
     * 广告主账户ID，最多支持100个
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 广告主账户ID，最多支持100个
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 广告主账户名称，模糊搜索，长度不能超过30
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 广告主账户名称，模糊搜索，长度不能超过30
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * 客户公司ID，最多支持100个
     * @return int[]
     */
    public function getCompanyIds(): ?array
    {
        return $this->companyIds;
    }

    /**
     * 客户公司ID，最多支持100个
     * @param int[] $companyIds
     * @return self
     */
    public function setCompanyIds(?array $companyIds): self
    {
        $this->companyIds = $companyIds;
        return $this;
    }

    /**
     * 客户公司名称，模糊搜索，长度不能超过30
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * 客户公司名称，模糊搜索，长度不能超过30
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringFinalOperatorTag
     */
    public function getFinalOperatorTag(): ?string
    {
        return $this->finalOperatorTag;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringFinalOperatorTag $finalOperatorTag
     * @return self
     */
    public function setFinalOperatorTag(?string $finalOperatorTag): self
    {
        $this->finalOperatorTag = $finalOperatorTag;
        return $this;
    }

    /**
     * 预结算标签；如果同时设置final_operator_tag和本字段，将以本字段为准
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList[]
     */
    public function getFinalOperatorTagList(): ?array
    {
        return $this->finalOperatorTagList;
    }

    /**
     * 预结算标签；如果同时设置final_operator_tag和本字段，将以本字段为准
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList[] $finalOperatorTagList
     * @return self
     */
    public function setFinalOperatorTagList(?array $finalOperatorTagList): self
    {
        $this->finalOperatorTagList = $finalOperatorTagList;
        return $this;
    }

    /**
     * 违规素材ids，最多支持100个
     * @return int[]
     */
    public function getIllegalMaterialIds(): ?array
    {
        return $this->illegalMaterialIds;
    }

    /**
     * 违规素材ids，最多支持100个
     * @param int[] $illegalMaterialIds
     * @return self
     */
    public function setIllegalMaterialIds(?array $illegalMaterialIds): self
    {
        $this->illegalMaterialIds = $illegalMaterialIds;
        return $this;
    }

    /**
     * 本地推计划状态
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringLocalAdStatusList[]
     */
    public function getLocalAdStatusList(): ?array
    {
        return $this->localAdStatusList;
    }

    /**
     * 本地推计划状态
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringLocalAdStatusList[] $localAdStatusList
     * @return self
     */
    public function setLocalAdStatusList(?array $localAdStatusList): self
    {
        $this->localAdStatusList = $localAdStatusList;
        return $this;
    }

    /**
     * 广告ID，最多支持100个
     * @return int[]
     */
    public function getPromotionIds(): ?array
    {
        return $this->promotionIds;
    }

    /**
     * 广告ID，最多支持100个
     * @param int[] $promotionIds
     * @return self
     */
    public function setPromotionIds(?array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
        return $this;
    }

    /**
     * 广告名称，模糊搜索，长度不能超过30
     * @return string
     */
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    /**
     * 广告名称，模糊搜索，长度不能超过30
     * @param string $promotionName
     * @return self
     */
    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringPromotionStatus
     */
    public function getPromotionStatus(): ?string
    {
        return $this->promotionStatus;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringPromotionStatus $promotionStatus
     * @return self
     */
    public function setPromotionStatus(?string $promotionStatus): self
    {
        $this->promotionStatus = $promotionStatus;
        return $this;
    }

    /**
     * 投放单元状态；如果同时设置promotion_status和本字段，将以本字段为准
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringPromotionStatusList[]
     */
    public function getPromotionStatusList(): ?array
    {
        return $this->promotionStatusList;
    }

    /**
     * 投放单元状态；如果同时设置promotion_status和本字段，将以本字段为准
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringPromotionStatusList[] $promotionStatusList
     * @return self
     */
    public function setPromotionStatusList(?array $promotionStatusList): self
    {
        $this->promotionStatusList = $promotionStatusList;
        return $this;
    }

    /**
     * 千川计划状态
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList[]
     */
    public function getQianchuanAdStatusList(): ?array
    {
        return $this->qianchuanAdStatusList;
    }

    /**
     * 千川计划状态
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList[] $qianchuanAdStatusList
     * @return self
     */
    public function setQianchuanAdStatusList(?array $qianchuanAdStatusList): self
    {
        $this->qianchuanAdStatusList = $qianchuanAdStatusList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->companyIds !== null) {
            $result['company_ids'] = $this->companyIds;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->finalOperatorTag !== null) {
            $result['final_operator_tag'] = $this->finalOperatorTag;
        }
        if ($this->finalOperatorTagList !== null) {
            $result['final_operator_tag_list'] = $this->finalOperatorTagList;
        }
        if ($this->illegalMaterialIds !== null) {
            $result['illegal_material_ids'] = $this->illegalMaterialIds;
        }
        if ($this->localAdStatusList !== null) {
            $result['local_ad_status_list'] = $this->localAdStatusList;
        }
        if ($this->promotionIds !== null) {
            $result['promotion_ids'] = $this->promotionIds;
        }
        if ($this->promotionName !== null) {
            $result['promotion_name'] = $this->promotionName;
        }
        if ($this->promotionStatus !== null) {
            $result['promotion_status'] = $this->promotionStatus;
        }
        if ($this->promotionStatusList !== null) {
            $result['promotion_status_list'] = $this->promotionStatusList;
        }
        if ($this->qianchuanAdStatusList !== null) {
            $result['qianchuan_ad_status_list'] = $this->qianchuanAdStatusList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['company_ids'] ?? null) !== null && is_array($v)) {
            $obj->companyIds = $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['final_operator_tag'] ?? null) !== null) {
            $obj->finalOperatorTag = (string) $v;
        }
        if (($v = $data['final_operator_tag_list'] ?? null) !== null && is_array($v)) {
            $obj->finalOperatorTagList = $v;
        }
        if (($v = $data['illegal_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->illegalMaterialIds = $v;
        }
        if (($v = $data['local_ad_status_list'] ?? null) !== null && is_array($v)) {
            $obj->localAdStatusList = $v;
        }
        if (($v = $data['promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionIds = $v;
        }
        if (($v = $data['promotion_name'] ?? null) !== null) {
            $obj->promotionName = (string) $v;
        }
        if (($v = $data['promotion_status'] ?? null) !== null) {
            $obj->promotionStatus = (string) $v;
        }
        if (($v = $data['promotion_status_list'] ?? null) !== null && is_array($v)) {
            $obj->promotionStatusList = $v;
        }
        if (($v = $data['qianchuan_ad_status_list'] ?? null) !== null && is_array($v)) {
            $obj->qianchuanAdStatusList = $v;
        }
        return $obj;
    }
}
