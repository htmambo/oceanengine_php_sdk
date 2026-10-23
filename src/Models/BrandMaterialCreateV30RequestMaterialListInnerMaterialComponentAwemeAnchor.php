<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeAnchor implements \JsonSerializable
{
    /**
     * 锚点id
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30MaterialListMaterialComponentAwemeAnchorAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * 1 使用锚点 0关闭
     * @var int
     */
    protected ?int $enableAnchor = null;

    /**
     * 锚点id
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * 锚点id
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30MaterialListMaterialComponentAwemeAnchorAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30MaterialListMaterialComponentAwemeAnchorAnchorType $anchorType
     * @return self
     */
    public function setAnchorType(?string $anchorType): self
    {
        $this->anchorType = $anchorType;
        return $this;
    }

    /**
     * 1 使用锚点 0关闭
     * @return int
     */
    public function getEnableAnchor(): ?int
    {
        return $this->enableAnchor;
    }

    /**
     * 1 使用锚点 0关闭
     * @param int $enableAnchor
     * @return self
     */
    public function setEnableAnchor(?int $enableAnchor): self
    {
        $this->enableAnchor = $enableAnchor;
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
        if ($this->enableAnchor !== null) {
            $result['enable_anchor'] = $this->enableAnchor;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['anchor_type'] ?? null) !== null) {
            $obj->anchorType = (string) $v;
        }
        if (($v = $data['enable_anchor'] ?? null) !== null) {
            $obj->enableAnchor = (int) $v;
        }
        return $obj;
    }
}
