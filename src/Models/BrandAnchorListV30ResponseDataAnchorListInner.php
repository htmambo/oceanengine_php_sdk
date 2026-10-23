<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAnchorListV30ResponseDataAnchorListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var \Oceanengine\Models\BrandAnchorListV30DataAnchorListAnchorStatus
     */
    protected ?string $anchorStatus = null;

    /**
     * @var string
     */
    protected ?string $anchorTitle = null;

    /**
     * @var \Oceanengine\Models\BrandAnchorListV30DataAnchorListAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAnchorListV30DataAnchorListAnchorStatus
     */
    public function getAnchorStatus(): ?string
    {
        return $this->anchorStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandAnchorListV30DataAnchorListAnchorStatus $anchorStatus
     * @return self
     */
    public function setAnchorStatus(?string $anchorStatus): self
    {
        $this->anchorStatus = $anchorStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorTitle(): ?string
    {
        return $this->anchorTitle;
    }

    /**
     * @param string $anchorTitle
     * @return self
     */
    public function setAnchorTitle(?string $anchorTitle): self
    {
        $this->anchorTitle = $anchorTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAnchorListV30DataAnchorListAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\BrandAnchorListV30DataAnchorListAnchorType $anchorType
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
        if ($this->anchorStatus !== null) {
            $result['anchor_status'] = $this->anchorStatus;
        }
        if ($this->anchorTitle !== null) {
            $result['anchor_title'] = $this->anchorTitle;
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
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['anchor_status'] ?? null) !== null) {
            $obj->anchorStatus = (string) $v;
        }
        if (($v = $data['anchor_title'] ?? null) !== null) {
            $obj->anchorTitle = (string) $v;
        }
        if (($v = $data['anchor_type'] ?? null) !== null) {
            $obj->anchorType = (string) $v;
        }
        return $obj;
    }
}
