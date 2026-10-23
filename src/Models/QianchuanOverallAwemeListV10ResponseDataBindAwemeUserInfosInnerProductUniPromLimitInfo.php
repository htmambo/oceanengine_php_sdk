<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromLimitInfo implements \JsonSerializable
{
    /**
     * ROI2投放限制
     * @var bool
     */
    protected ?bool $isRoi2deliveryLimit = null;

    /**
     * 是否已有ROI2计划创建
     * @var bool
     */
    protected ?bool $isRoi2groupCreated = null;

    /**
     * ROI2投放限制
     * @return bool
     */
    public function getIsRoi2deliveryLimit(): ?bool
    {
        return $this->isRoi2deliveryLimit;
    }

    /**
     * ROI2投放限制
     * @param bool $isRoi2deliveryLimit
     * @return self
     */
    public function setIsRoi2deliveryLimit(?bool $isRoi2deliveryLimit): self
    {
        $this->isRoi2deliveryLimit = $isRoi2deliveryLimit;
        return $this;
    }

    /**
     * 是否已有ROI2计划创建
     * @return bool
     */
    public function getIsRoi2groupCreated(): ?bool
    {
        return $this->isRoi2groupCreated;
    }

    /**
     * 是否已有ROI2计划创建
     * @param bool $isRoi2groupCreated
     * @return self
     */
    public function setIsRoi2groupCreated(?bool $isRoi2groupCreated): self
    {
        $this->isRoi2groupCreated = $isRoi2groupCreated;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isRoi2deliveryLimit !== null) {
            $result['is_roi2delivery_limit'] = $this->isRoi2deliveryLimit;
        }
        if ($this->isRoi2groupCreated !== null) {
            $result['is_roi2group_created'] = $this->isRoi2groupCreated;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_roi2delivery_limit'] ?? null) !== null) {
            $obj->isRoi2deliveryLimit = (bool) $v;
        }
        if (($v = $data['is_roi2group_created'] ?? null) !== null) {
            $obj->isRoi2groupCreated = (bool) $v;
        }
        return $obj;
    }
}
