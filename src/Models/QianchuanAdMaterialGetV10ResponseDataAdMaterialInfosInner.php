<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var int[]
     */
    protected ?array $creativeIds = null;

    /**
     * 是否派生
     * @var int
     */
    protected ?int $isAutoGenerate = null;

    /**
     * 是否删除
     * @var bool
     */
    protected ?bool $isDel = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialDeliveryType
     */
    protected ?string $materialDeliveryType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo
     */
    protected ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo $materialInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCreativeIds(): ?array
    {
        return $this->creativeIds;
    }

    /**
     * @param int[] $creativeIds
     * @return self
     */
    public function setCreativeIds(?array $creativeIds): self
    {
        $this->creativeIds = $creativeIds;
        return $this;
    }

    /**
     * 是否派生
     * @return int
     */
    public function getIsAutoGenerate(): ?int
    {
        return $this->isAutoGenerate;
    }

    /**
     * 是否派生
     * @param int $isAutoGenerate
     * @return self
     */
    public function setIsAutoGenerate(?int $isAutoGenerate): self
    {
        $this->isAutoGenerate = $isAutoGenerate;
        return $this;
    }

    /**
     * 是否删除
     * @return bool
     */
    public function getIsDel(): ?bool
    {
        return $this->isDel;
    }

    /**
     * 是否删除
     * @param bool $isDel
     * @return self
     */
    public function setIsDel(?bool $isDel): self
    {
        $this->isDel = $isDel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialDeliveryType
     */
    public function getMaterialDeliveryType(): ?string
    {
        return $this->materialDeliveryType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialDeliveryType $materialDeliveryType
     * @return self
     */
    public function setMaterialDeliveryType(?string $materialDeliveryType): self
    {
        $this->materialDeliveryType = $materialDeliveryType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo
     */
    public function getMaterialInfo(): ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo
    {
        return $this->materialInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo $materialInfo
     * @return self
     */
    public function setMaterialInfo(?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo $materialInfo): self
    {
        $this->materialInfo = $materialInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->creativeIds !== null) {
            $result['creative_ids'] = $this->creativeIds;
        }
        if ($this->isAutoGenerate !== null) {
            $result['is_auto_generate'] = $this->isAutoGenerate;
        }
        if ($this->isDel !== null) {
            $result['is_del'] = $this->isDel;
        }
        if ($this->materialDeliveryType !== null) {
            $result['material_delivery_type'] = $this->materialDeliveryType;
        }
        if ($this->materialInfo !== null) {
            $result['material_info'] = $this->materialInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['creative_ids'] ?? null) !== null && is_array($v)) {
            $obj->creativeIds = $v;
        }
        if (($v = $data['is_auto_generate'] ?? null) !== null) {
            $obj->isAutoGenerate = (int) $v;
        }
        if (($v = $data['is_del'] ?? null) !== null) {
            $obj->isDel = (bool) $v;
        }
        if (($v = $data['material_delivery_type'] ?? null) !== null) {
            $obj->materialDeliveryType = (string) $v;
        }
        if (($v = $data['material_info'] ?? null) !== null && is_array($v)) {
            $obj->materialInfo = \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo::fromArray($v);
        }
        return $obj;
    }
}
