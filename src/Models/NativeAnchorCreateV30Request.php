<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfo
     */
    protected ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfo $anchorInfo = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfo
     */
    public function getAnchorInfo(): ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfo
    {
        return $this->anchorInfo;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfo $anchorInfo
     * @return self
     */
    public function setAnchorInfo(?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfo $anchorInfo): self
    {
        $this->anchorInfo = $anchorInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->anchorInfo !== null) {
            $result['anchor_info'] = $this->anchorInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['anchor_info'] ?? null) !== null && is_array($v)) {
            $obj->anchorInfo = \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfo::fromArray($v);
        }
        return $obj;
    }
}
