<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsVideoCheckAvailableAnchorV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 抖音视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 是否支持双库存
     * @var bool
     */
    protected ?bool $valid = null;

    /**
     * 抖音视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 抖音视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 是否支持双库存
     * @return bool
     */
    public function getValid(): ?bool
    {
        return $this->valid;
    }

    /**
     * 是否支持双库存
     * @param bool $valid
     * @return self
     */
    public function setValid(?bool $valid): self
    {
        $this->valid = $valid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->valid !== null) {
            $result['valid'] = $this->valid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['valid'] ?? null) !== null) {
            $obj->valid = (bool) $v;
        }
        return $obj;
    }
}
