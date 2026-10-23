<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInner implements \JsonSerializable
{
    /**
     * 素材ID（落地页站点ID）
     * @var int
     */
    protected ?int $id = null;

    /**
     * 同代理商账户下的其他关联广告ID（废弃，使用ref_promotion_list字段替代）
     * @var int[]
     */
    protected ?array $refPromotionIds = null;

    /**
     * 同代理商账户下的其他关联广告信息
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInnerRefPromotionListInner[]
     */
    protected ?array $refPromotionList = null;

    /**
     * 素材违规原因，比如：[\"违规内容1\", \"违规内容2\"]
     * @var string[]
     */
    protected ?array $riskContent = null;

    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataMaterialListType
     */
    protected ?string $type = null;

    /**
     * 素材ID（落地页站点ID）
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 素材ID（落地页站点ID）
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 同代理商账户下的其他关联广告ID（废弃，使用ref_promotion_list字段替代）
     * @return int[]
     */
    public function getRefPromotionIds(): ?array
    {
        return $this->refPromotionIds;
    }

    /**
     * 同代理商账户下的其他关联广告ID（废弃，使用ref_promotion_list字段替代）
     * @param int[] $refPromotionIds
     * @return self
     */
    public function setRefPromotionIds(?array $refPromotionIds): self
    {
        $this->refPromotionIds = $refPromotionIds;
        return $this;
    }

    /**
     * 同代理商账户下的其他关联广告信息
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInnerRefPromotionListInner[]
     */
    public function getRefPromotionList(): ?array
    {
        return $this->refPromotionList;
    }

    /**
     * 同代理商账户下的其他关联广告信息
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInnerRefPromotionListInner[] $refPromotionList
     * @return self
     */
    public function setRefPromotionList(?array $refPromotionList): self
    {
        $this->refPromotionList = $refPromotionList;
        return $this;
    }

    /**
     * 素材违规原因，比如：[\"违规内容1\", \"违规内容2\"]
     * @return string[]
     */
    public function getRiskContent(): ?array
    {
        return $this->riskContent;
    }

    /**
     * 素材违规原因，比如：[\"违规内容1\", \"违规内容2\"]
     * @param string[] $riskContent
     * @return self
     */
    public function setRiskContent(?array $riskContent): self
    {
        $this->riskContent = $riskContent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataMaterialListType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2DataDataMaterialListType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->refPromotionIds !== null) {
            $result['ref_promotion_ids'] = $this->refPromotionIds;
        }
        if ($this->refPromotionList !== null) {
            $result['ref_promotion_list'] = $this->refPromotionList;
        }
        if ($this->riskContent !== null) {
            $result['risk_content'] = $this->riskContent;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['ref_promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->refPromotionIds = $v;
        }
        if (($v = $data['ref_promotion_list'] ?? null) !== null && is_array($v)) {
            $obj->refPromotionList = array_map(fn ($vv) => \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInnerMaterialListInnerRefPromotionListInner::fromArray($vv), $v);
        }
        if (($v = $data['risk_content'] ?? null) !== null && is_array($v)) {
            $obj->riskContent = $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
