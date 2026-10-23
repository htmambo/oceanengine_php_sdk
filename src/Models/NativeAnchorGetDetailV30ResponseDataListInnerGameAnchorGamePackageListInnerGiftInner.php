<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInnerGiftInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $giftAmount = null;

    /**
     * @var string
     */
    protected ?string $giftImageUrl = null;

    /**
     * @var string
     */
    protected ?string $giftName = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30DataListGameAnchorGamePackageListGiftGiftUnit
     */
    protected ?string $giftUnit = null;

    /**
     * @return int
     */
    public function getGiftAmount(): ?int
    {
        return $this->giftAmount;
    }

    /**
     * @param int $giftAmount
     * @return self
     */
    public function setGiftAmount(?int $giftAmount): self
    {
        $this->giftAmount = $giftAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftImageUrl(): ?string
    {
        return $this->giftImageUrl;
    }

    /**
     * @param string $giftImageUrl
     * @return self
     */
    public function setGiftImageUrl(?string $giftImageUrl): self
    {
        $this->giftImageUrl = $giftImageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftName(): ?string
    {
        return $this->giftName;
    }

    /**
     * @param string $giftName
     * @return self
     */
    public function setGiftName(?string $giftName): self
    {
        $this->giftName = $giftName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30DataListGameAnchorGamePackageListGiftGiftUnit
     */
    public function getGiftUnit(): ?string
    {
        return $this->giftUnit;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30DataListGameAnchorGamePackageListGiftGiftUnit $giftUnit
     * @return self
     */
    public function setGiftUnit(?string $giftUnit): self
    {
        $this->giftUnit = $giftUnit;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->giftAmount !== null) {
            $result['gift_amount'] = $this->giftAmount;
        }
        if ($this->giftImageUrl !== null) {
            $result['gift_image_url'] = $this->giftImageUrl;
        }
        if ($this->giftName !== null) {
            $result['gift_name'] = $this->giftName;
        }
        if ($this->giftUnit !== null) {
            $result['gift_unit'] = $this->giftUnit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['gift_amount'] ?? null) !== null) {
            $obj->giftAmount = (int) $v;
        }
        if (($v = $data['gift_image_url'] ?? null) !== null) {
            $obj->giftImageUrl = (string) $v;
        }
        if (($v = $data['gift_name'] ?? null) !== null) {
            $obj->giftName = (string) $v;
        }
        if (($v = $data['gift_unit'] ?? null) !== null) {
            $obj->giftUnit = (string) $v;
        }
        return $obj;
    }
}
