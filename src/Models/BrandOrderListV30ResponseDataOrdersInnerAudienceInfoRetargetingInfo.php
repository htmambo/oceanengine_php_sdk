<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInnerAudienceInfoRetargetingInfo implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $retargetingTags = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType
     */
    protected ?string $retargetingType = null;

    /**
     * @return int[]
     */
    public function getRetargetingTags(): ?array
    {
        return $this->retargetingTags;
    }

    /**
     * @param int[] $retargetingTags
     * @return self
     */
    public function setRetargetingTags(?array $retargetingTags): self
    {
        $this->retargetingTags = $retargetingTags;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType
     */
    public function getRetargetingType(): ?string
    {
        return $this->retargetingType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoRetargetingInfoRetargetingType $retargetingType
     * @return self
     */
    public function setRetargetingType(?string $retargetingType): self
    {
        $this->retargetingType = $retargetingType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->retargetingTags !== null) {
            $result['retargeting_tags'] = $this->retargetingTags;
        }
        if ($this->retargetingType !== null) {
            $result['retargeting_type'] = $this->retargetingType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['retargeting_tags'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTags = $v;
        }
        if (($v = $data['retargeting_type'] ?? null) !== null) {
            $obj->retargetingType = (string) $v;
        }
        return $obj;
    }
}
