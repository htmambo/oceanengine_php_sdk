<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderUpdateV30RequestAudienceInfoRetargetingInfo implements \JsonSerializable
{
    /**
     * 人群包ID列表
     * @var int[]
     */
    protected ?array $retargetingTags = null;

    /**
     * @var \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType
     */
    protected ?string $retargetingType = null;

    /**
     * 人群包ID列表
     * @return int[]
     */
    public function getRetargetingTags(): ?array
    {
        return $this->retargetingTags;
    }

    /**
     * 人群包ID列表
     * @param int[] $retargetingTags
     * @return self
     */
    public function setRetargetingTags(?array $retargetingTags): self
    {
        $this->retargetingTags = $retargetingTags;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType
     */
    public function getRetargetingType(): ?string
    {
        return $this->retargetingType;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderUpdateV30AudienceInfoRetargetingInfoRetargetingType $retargetingType
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
