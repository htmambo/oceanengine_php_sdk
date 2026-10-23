<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionCreateV30Request implements \JsonSerializable
{
    /**
     * 抖音号 说明：当选择素材库和上传视频投广时，该字段必填
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 交易广告素材入参，仅交易广告可传
     * @var \Oceanengine\Models\LocalPromotionCreateV30RequestCustomerMaterialListInner[]
     */
    protected ?array $customerMaterialList = null;

    /**
     * 是否开启团购卡，仅交易广告可传
     * @var bool
     */
    protected ?bool $enableGraphicDelivery = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionCreateV30LiveMaterialType
     */
    protected ?string $liveMaterialType = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 广告名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionCreateV30RequestProceduralMaterial
     */
    protected ?\Oceanengine\Models\LocalPromotionCreateV30RequestProceduralMaterial $proceduralMaterial = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfo
     */
    protected ?\Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfo $promotionCardInfo = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionCreateV30VideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * 抖音号 说明：当选择素材库和上传视频投广时，该字段必填
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号 说明：当选择素材库和上传视频投广时，该字段必填
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
     * @return \Oceanengine\Models\LocalPromotionCreateV30RequestCustomerMaterialListInner[]
     */
    public function getCustomerMaterialList(): ?array
    {
        return $this->customerMaterialList;
    }

    /**
     * 交易广告素材入参，仅交易广告可传
     * @param \Oceanengine\Models\LocalPromotionCreateV30RequestCustomerMaterialListInner[] $customerMaterialList
     * @return self
     */
    public function setCustomerMaterialList(?array $customerMaterialList): self
    {
        $this->customerMaterialList = $customerMaterialList;
        return $this;
    }

    /**
     * 是否开启团购卡，仅交易广告可传
     * @return bool
     */
    public function getEnableGraphicDelivery(): ?bool
    {
        return $this->enableGraphicDelivery;
    }

    /**
     * 是否开启团购卡，仅交易广告可传
     * @param bool $enableGraphicDelivery
     * @return self
     */
    public function setEnableGraphicDelivery(?bool $enableGraphicDelivery): self
    {
        $this->enableGraphicDelivery = $enableGraphicDelivery;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionCreateV30LiveMaterialType
     */
    public function getLiveMaterialType(): ?string
    {
        return $this->liveMaterialType;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionCreateV30LiveMaterialType $liveMaterialType
     * @return self
     */
    public function setLiveMaterialType(?string $liveMaterialType): self
    {
        $this->liveMaterialType = $liveMaterialType;
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
     * 广告名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 广告名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionCreateV30RequestProceduralMaterial
     */
    public function getProceduralMaterial(): ?\Oceanengine\Models\LocalPromotionCreateV30RequestProceduralMaterial
    {
        return $this->proceduralMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionCreateV30RequestProceduralMaterial $proceduralMaterial
     * @return self
     */
    public function setProceduralMaterial(?\Oceanengine\Models\LocalPromotionCreateV30RequestProceduralMaterial $proceduralMaterial): self
    {
        $this->proceduralMaterial = $proceduralMaterial;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfo
     */
    public function getPromotionCardInfo(): ?\Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfo
    {
        return $this->promotionCardInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfo $promotionCardInfo
     * @return self
     */
    public function setPromotionCardInfo(?\Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfo $promotionCardInfo): self
    {
        $this->promotionCardInfo = $promotionCardInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionCreateV30VideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionCreateV30VideoHpVisibility $videoHpVisibility
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
        if ($this->enableGraphicDelivery !== null) {
            $result['enable_graphic_delivery'] = $this->enableGraphicDelivery;
        }
        if ($this->liveMaterialType !== null) {
            $result['live_material_type'] = $this->liveMaterialType;
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
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionCardInfo !== null) {
            $result['promotion_card_info'] = $this->promotionCardInfo;
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
            $obj->customerMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionCreateV30RequestCustomerMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['enable_graphic_delivery'] ?? null) !== null) {
            $obj->enableGraphicDelivery = (bool) $v;
        }
        if (($v = $data['live_material_type'] ?? null) !== null) {
            $obj->liveMaterialType = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['procedural_material'] ?? null) !== null && is_array($v)) {
            $obj->proceduralMaterial = \Oceanengine\Models\LocalPromotionCreateV30RequestProceduralMaterial::fromArray($v);
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_card_info'] ?? null) !== null && is_array($v)) {
            $obj->promotionCardInfo = \Oceanengine\Models\LocalPromotionCreateV30RequestPromotionCardInfo::fromArray($v);
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        return $obj;
    }
}
