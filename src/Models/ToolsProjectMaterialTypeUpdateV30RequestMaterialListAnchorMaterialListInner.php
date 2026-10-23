<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectMaterialTypeUpdateV30RequestMaterialListAnchorMaterialListInner implements \JsonSerializable
{
    /**
     * 原生锚点id，取值来源【获取账户下的原生锚点】，anchor_related_type=SELECT时必填
     * @var int
     */
    protected ?int $anchorId = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * 原生锚点id，取值来源【获取账户下的原生锚点】，anchor_related_type=SELECT时必填
     * @return int
     */
    public function getAnchorId(): ?int
    {
        return $this->anchorId;
    }

    /**
     * 原生锚点id，取值来源【获取账户下的原生锚点】，anchor_related_type=SELECT时必填
     * @param int $anchorId
     * @return self
     */
    public function setAnchorId(?int $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType $anchorType
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
