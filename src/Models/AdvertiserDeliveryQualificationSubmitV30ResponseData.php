<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryQualificationSubmitV30ResponseData implements \JsonSerializable
{
    /**
     * 资质id
     * @var int[]
     */
    protected ?array $qualificationIds = null;

    /**
     * 资质id
     * @return int[]
     */
    public function getQualificationIds(): ?array
    {
        return $this->qualificationIds;
    }

    /**
     * 资质id
     * @param int[] $qualificationIds
     * @return self
     */
    public function setQualificationIds(?array $qualificationIds): self
    {
        $this->qualificationIds = $qualificationIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->qualificationIds !== null) {
            $result['qualification_ids'] = $this->qualificationIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['qualification_ids'] ?? null) !== null && is_array($v)) {
            $obj->qualificationIds = $v;
        }
        return $obj;
    }
}
