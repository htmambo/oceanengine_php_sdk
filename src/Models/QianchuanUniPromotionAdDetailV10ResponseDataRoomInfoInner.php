<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdDetailV10ResponseDataRoomInfoInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $anchorAvatar = null;

    /**
     * @var int
     */
    protected ?int $anchorId = null;

    /**
     * @var string
     */
    protected ?string $anchorName = null;

    /**
     * @return string
     */
    public function getAnchorAvatar(): ?string
    {
        return $this->anchorAvatar;
    }

    /**
     * @param string $anchorAvatar
     * @return self
     */
    public function setAnchorAvatar(?string $anchorAvatar): self
    {
        $this->anchorAvatar = $anchorAvatar;
        return $this;
    }

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
     * @return string
     */
    public function getAnchorName(): ?string
    {
        return $this->anchorName;
    }

    /**
     * @param string $anchorName
     * @return self
     */
    public function setAnchorName(?string $anchorName): self
    {
        $this->anchorName = $anchorName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorAvatar !== null) {
            $result['anchor_avatar'] = $this->anchorAvatar;
        }
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorName !== null) {
            $result['anchor_name'] = $this->anchorName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_avatar'] ?? null) !== null) {
            $obj->anchorAvatar = (string) $v;
        }
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (int) $v;
        }
        if (($v = $data['anchor_name'] ?? null) !== null) {
            $obj->anchorName = (string) $v;
        }
        return $obj;
    }
}
