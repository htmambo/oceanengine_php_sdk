<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionUpdateV30Request implements \JsonSerializable
{
    /**
     * 抖音号id，仅交易广告可传
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 交易广告素材入参，仅交易广告可传
     * @var \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInner[]
     */
    protected ?array $customerMaterialList = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterial
     */
    protected ?\Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterial $proceduralMaterial = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionUpdateV30RequestPromotionCardInfo
     */
    protected ?\Oceanengine\Models\LocalPromotionUpdateV30RequestPromotionCardInfo $promotionCardInfo = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionUpdateV30VideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * 抖音号id，仅交易广告可传
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id，仅交易广告可传
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 交易广告素材入参，仅交易广告可传
     * @return \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInner[]
     */
    public function getCustomerMaterialList(): ?array
    {
        return $this->customerMaterialList;
    }

    /**
     * 交易广告素材入参，仅交易广告可传
     * @param \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInner[] $customerMaterialList
     * @return self
     */
    public function setCustomerMaterialList(?array $customerMaterialList): self
    {
        $this->customerMaterialList = $customerMaterialList;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterial
     */
    public function getProceduralMaterial(): ?\Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterial
    {
        return $this->proceduralMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterial $proceduralMaterial
     * @return self
     */
    public function setProceduralMaterial(?\Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterial $proceduralMaterial): self
    {
        $this->proceduralMaterial = $proceduralMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionUpdateV30RequestPromotionCardInfo
     */
    public function getPromotionCardInfo(): ?\Oceanengine\Models\LocalPromotionUpdateV30RequestPromotionCardInfo
    {
        return $this->promotionCardInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionUpdateV30RequestPromotionCardInfo $promotionCardInfo
     * @return self
     */
    public function setPromotionCardInfo(?\Oceanengine\Models\LocalPromotionUpdateV30RequestPromotionCardInfo $promotionCardInfo): self
    {
        $this->promotionCardInfo = $promotionCardInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionUpdateV30VideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionUpdateV30VideoHpVisibility $videoHpVisibility
     * @return self
     */
    public function setVideoHpVisibility(?string $videoHpVisibility): self
    {
        $this->videoHpVisibility = $videoHpVisibility;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->customerMaterialList !== null) {
            $result['customer_material_list'] = $this->customerMaterialList;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->proceduralMaterial !== null) {
            $result['procedural_material'] = $this->proceduralMaterial;
        }
        if ($this->promotionCardInfo !== null) {
            $result['promotion_card_info'] = $this->promotionCardInfo;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->videoHpVisibility !== null) {
            $result['video_hp_visibility'] = $this->videoHpVisibility;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['customer_material_list'] ?? null) !== null && is_array($v)) {
            $obj->customerMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['procedural_material'] ?? null) !== null && is_array($v)) {
            $obj->proceduralMaterial = \Oceanengine\Models\LocalPromotionUpdateV30RequestProceduralMaterial::fromArray($v);
        }
        if (($v = $data['promotion_card_info'] ?? null) !== null && is_array($v)) {
            $obj->promotionCardInfo = \Oceanengine\Models\LocalPromotionUpdateV30RequestPromotionCardInfo::fromArray($v);
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        return $obj;
    }
}
