<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestLbs implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30LbsLbsType
     */
    protected ?string $lbsType = null;

    /**
     * 来客账号ID
     * @var string
     */
    protected ?string $lifeAccountId = null;

    /**
     * 门店ID列表
     * @var string[]
     */
    protected ?array $lifePoiIdList = null;

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30LbsLbsType
     */
    public function getLbsType(): ?string
    {
        return $this->lbsType;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30LbsLbsType $lbsType
     * @return self
     */
    public function setLbsType(?string $lbsType): self
    {
        $this->lbsType = $lbsType;
        return $this;
    }

    /**
     * 来客账号ID
     * @return string
     */
    public function getLifeAccountId(): ?string
    {
        return $this->lifeAccountId;
    }

    /**
     * 来客账号ID
     * @param string $lifeAccountId
     * @return self
     */
    public function setLifeAccountId(?string $lifeAccountId): self
    {
        $this->lifeAccountId = $lifeAccountId;
        return $this;
    }

    /**
     * 门店ID列表
     * @return string[]
     */
    public function getLifePoiIdList(): ?array
    {
        return $this->lifePoiIdList;
    }

    /**
     * 门店ID列表
     * @param string[] $lifePoiIdList
     * @return self
     */
    public function setLifePoiIdList(?array $lifePoiIdList): self
    {
        $this->lifePoiIdList = $lifePoiIdList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->lbsType !== null) {
            $result['lbs_type'] = $this->lbsType;
        }
        if ($this->lifeAccountId !== null) {
            $result['life_account_id'] = $this->lifeAccountId;
        }
        if ($this->lifePoiIdList !== null) {
            $result['life_poi_id_list'] = $this->lifePoiIdList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['lbs_type'] ?? null) !== null) {
            $obj->lbsType = (string) $v;
        }
        if (($v = $data['life_account_id'] ?? null) !== null) {
            $obj->lifeAccountId = (string) $v;
        }
        if (($v = $data['life_poi_id_list'] ?? null) !== null && is_array($v)) {
            $obj->lifePoiIdList = $v;
        }
        return $obj;
    }
}
