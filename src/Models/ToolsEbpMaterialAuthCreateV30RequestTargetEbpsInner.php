<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialAuthCreateV30RequestTargetEbpsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $targetEbpId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30TargetEbpsTargetEbpRange
     */
    protected ?string $targetEbpRange = null;

    /**
     * @return int
     */
    public function getTargetEbpId(): ?int
    {
        return $this->targetEbpId;
    }

    /**
     * @param int $targetEbpId
     * @return self
     */
    public function setTargetEbpId(?int $targetEbpId): self
    {
        $this->targetEbpId = $targetEbpId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30TargetEbpsTargetEbpRange
     */
    public function getTargetEbpRange(): ?string
    {
        return $this->targetEbpRange;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30TargetEbpsTargetEbpRange $targetEbpRange
     * @return self
     */
    public function setTargetEbpRange(?string $targetEbpRange): self
    {
        $this->targetEbpRange = $targetEbpRange;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->targetEbpId !== null) {
            $result['target_ebp_id'] = $this->targetEbpId;
        }
        if ($this->targetEbpRange !== null) {
            $result['target_ebp_range'] = $this->targetEbpRange;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['target_ebp_id'] ?? null) !== null) {
            $obj->targetEbpId = (int) $v;
        }
        if (($v = $data['target_ebp_range'] ?? null) !== null) {
            $obj->targetEbpRange = (string) $v;
        }
        return $obj;
    }
}
