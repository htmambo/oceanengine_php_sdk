<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalDeliveryQualificationListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalDeliveryQualificationListV30ResponseDataQualificationsInner[]
     */
    protected ?array $qualifications = null;

    /**
     * @var int
     */
    protected ?int $total = null;

    /**
     * @return \Oceanengine\Models\LocalDeliveryQualificationListV30ResponseDataQualificationsInner[]
     */
    public function getQualifications(): ?array
    {
        return $this->qualifications;
    }

    /**
     * @param \Oceanengine\Models\LocalDeliveryQualificationListV30ResponseDataQualificationsInner[] $qualifications
     * @return self
     */
    public function setQualifications(?array $qualifications): self
    {
        $this->qualifications = $qualifications;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->qualifications !== null) {
            $result['qualifications'] = $this->qualifications;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['qualifications'] ?? null) !== null && is_array($v)) {
            $obj->qualifications = array_map(fn ($vv) => \Oceanengine\Models\LocalDeliveryQualificationListV30ResponseDataQualificationsInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
