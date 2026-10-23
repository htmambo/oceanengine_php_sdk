<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsMaterialRaiseCreateV30Request implements \JsonSerializable
{
    /**
     * 客户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 素材ID，当materials_type=SPECIFY_MATERIALS时有效且必填，最多支持传入50个
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30MaterialsType
     */
    protected ?string $materialsType = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RequestRaiseInfo
     */
    protected ?\Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RequestRaiseInfo $raiseInfo = null;

    /**
     * 客户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 客户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 素材ID，当materials_type=SPECIFY_MATERIALS时有效且必填，最多支持传入50个
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 素材ID，当materials_type=SPECIFY_MATERIALS时有效且必填，最多支持传入50个
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30MaterialsType
     */
    public function getMaterialsType(): ?string
    {
        return $this->materialsType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30MaterialsType $materialsType
     * @return self
     */
    public function setMaterialsType(?string $materialsType): self
    {
        $this->materialsType = $materialsType;
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
     * @return \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RequestRaiseInfo
     */
    public function getRaiseInfo(): ?\Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RequestRaiseInfo
    {
        return $this->raiseInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RequestRaiseInfo $raiseInfo
     * @return self
     */
    public function setRaiseInfo(?\Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RequestRaiseInfo $raiseInfo): self
    {
        $this->raiseInfo = $raiseInfo;
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
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->materialsType !== null) {
            $result['materials_type'] = $this->materialsType;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->raiseInfo !== null) {
            $result['raise_info'] = $this->raiseInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['materials_type'] ?? null) !== null) {
            $obj->materialsType = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['raise_info'] ?? null) !== null && is_array($v)) {
            $obj->raiseInfo = \Oceanengine\Models\OcProjectToolsMaterialRaiseCreateV30RequestRaiseInfo::fromArray($v);
        }
        return $obj;
    }
}
