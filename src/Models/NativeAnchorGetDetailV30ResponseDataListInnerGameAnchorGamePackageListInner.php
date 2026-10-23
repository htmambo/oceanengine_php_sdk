<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $androidPackageCode = null;

    /**
     * @var string
     */
    protected ?string $gameGiftRegulation = null;

    /**
     * @var string
     */
    protected ?string $gamePackageName = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInnerGiftInner[]
     */
    protected ?array $gift = null;

    /**
     * @var string
     */
    protected ?string $giftEndDate = null;

    /**
     * @var string
     */
    protected ?string $giftStartDate = null;

    /**
     * @var string
     */
    protected ?string $iosPackageCode = null;

    /**
     * @return string
     */
    public function getAndroidPackageCode(): ?string
    {
        return $this->androidPackageCode;
    }

    /**
     * @param string $androidPackageCode
     * @return self
     */
    public function setAndroidPackageCode(?string $androidPackageCode): self
    {
        $this->androidPackageCode = $androidPackageCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameGiftRegulation(): ?string
    {
        return $this->gameGiftRegulation;
    }

    /**
     * @param string $gameGiftRegulation
     * @return self
     */
    public function setGameGiftRegulation(?string $gameGiftRegulation): self
    {
        $this->gameGiftRegulation = $gameGiftRegulation;
        return $this;
    }

    /**
     * @return string
     */
    public function getGamePackageName(): ?string
    {
        return $this->gamePackageName;
    }

    /**
     * @param string $gamePackageName
     * @return self
     */
    public function setGamePackageName(?string $gamePackageName): self
    {
        $this->gamePackageName = $gamePackageName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInnerGiftInner[]
     */
    public function getGift(): ?array
    {
        return $this->gift;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInnerGiftInner[] $gift
     * @return self
     */
    public function setGift(?array $gift): self
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftEndDate(): ?string
    {
        return $this->giftEndDate;
    }

    /**
     * @param string $giftEndDate
     * @return self
     */
    public function setGiftEndDate(?string $giftEndDate): self
    {
        $this->giftEndDate = $giftEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftStartDate(): ?string
    {
        return $this->giftStartDate;
    }

    /**
     * @param string $giftStartDate
     * @return self
     */
    public function setGiftStartDate(?string $giftStartDate): self
    {
        $this->giftStartDate = $giftStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getIosPackageCode(): ?string
    {
        return $this->iosPackageCode;
    }

    /**
     * @param string $iosPackageCode
     * @return self
     */
    public function setIosPackageCode(?string $iosPackageCode): self
    {
        $this->iosPackageCode = $iosPackageCode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidPackageCode !== null) {
            $result['android_package_code'] = $this->androidPackageCode;
        }
        if ($this->gameGiftRegulation !== null) {
            $result['game_gift_regulation'] = $this->gameGiftRegulation;
        }
        if ($this->gamePackageName !== null) {
            $result['game_package_name'] = $this->gamePackageName;
        }
        if ($this->gift !== null) {
            $result['gift'] = $this->gift;
        }
        if ($this->giftEndDate !== null) {
            $result['gift_end_date'] = $this->giftEndDate;
        }
        if ($this->giftStartDate !== null) {
            $result['gift_start_date'] = $this->giftStartDate;
        }
        if ($this->iosPackageCode !== null) {
            $result['ios_package_code'] = $this->iosPackageCode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_package_code'] ?? null) !== null) {
            $obj->androidPackageCode = (string) $v;
        }
        if (($v = $data['game_gift_regulation'] ?? null) !== null) {
            $obj->gameGiftRegulation = (string) $v;
        }
        if (($v = $data['game_package_name'] ?? null) !== null) {
            $obj->gamePackageName = (string) $v;
        }
        if (($v = $data['gift'] ?? null) !== null && is_array($v)) {
            $obj->gift = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchorGamePackageListInnerGiftInner::fromArray($vv), $v);
        }
        if (($v = $data['gift_end_date'] ?? null) !== null) {
            $obj->giftEndDate = (string) $v;
        }
        if (($v = $data['gift_start_date'] ?? null) !== null) {
            $obj->giftStartDate = (string) $v;
        }
        if (($v = $data['ios_package_code'] ?? null) !== null) {
            $obj->iosPackageCode = (string) $v;
        }
        return $obj;
    }
}
