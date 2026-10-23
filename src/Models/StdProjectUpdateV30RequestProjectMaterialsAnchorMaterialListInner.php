<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectUpdateV30RequestProjectMaterialsAnchorMaterialListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $anchorId = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * @return int
     */
    public function getAnchorId(): ?int
    {
        return $this->anchorId;
    }

    /**
     * @param int $anchorId
     * @return self
     */
    public function setAnchorId(?int $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType $anchorType
     * @return self
     */
    public function setAnchorType(?string $anchorType): self
    {
        $this->anchorType = $anchorType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorType !== null) {
            $result['anchor_type'] = $this->anchorType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (int) $v;
        }
        if (($v = $data['anchor_type'] ?? null) !== null) {
            $obj->anchorType = (string) $v;
        }
        return $obj;
    }
}
