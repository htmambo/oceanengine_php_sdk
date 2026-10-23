<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorUpdateV30RequestAnchorInfoGameAnchorGamePackageListInner implements \JsonSerializable
{
    /**
     * 安卓礼包码，字符限制0～20
     * @var string
     */
    protected ?string $androidPackageCode = null;

    /**
     * 游戏礼包名称，字符限制0～14
     * @var string
     */
    protected ?string $gamePackageName = null;

    /**
     * 礼包内的礼品配置，数量限制0～8
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorGamePackageListInnerGiftInner[]
     */
    protected ?array $gift = null;

    /**
     * 礼包使用结束期限，格式 yyyy.MM.dd
     * @var string
     */
    protected ?string $giftEndDate = null;

    /**
     * 礼包使用规则，字符限制0～30
     * @var string
     */
    protected ?string $giftRegulation = null;

    /**
     * 礼包使用开始期限，格式 yyyy.MM.dd
     * @var string
     */
    protected ?string $giftStartDate = null;

    /**
     * ios礼包码，字符限制0～20
     * @var string
     */
    protected ?string $iosPackageCode = null;

    /**
     * 安卓礼包码，字符限制0～20
     * @return string
     */
    public function getAndroidPackageCode(): ?string
    {
        return $this->androidPackageCode;
    }

    /**
     * 安卓礼包码，字符限制0～20
     * @param string $androidPackageCode
     * @return self
     */
    public function setAndroidPackageCode(?string $androidPackageCode): self
    {
        $this->androidPackageCode = $androidPackageCode;
        return $this;
    }

    /**
     * 游戏礼包名称，字符限制0～14
     * @return string
     */
    public function getGamePackageName(): ?string
    {
        return $this->gamePackageName;
    }

    /**
     * 游戏礼包名称，字符限制0～14
     * @param string $gamePackageName
     * @return self
     */
    public function setGamePackageName(?string $gamePackageName): self
    {
        $this->gamePackageName = $gamePackageName;
        return $this;
    }

    /**
     * 礼包内的礼品配置，数量限制0～8
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorGamePackageListInnerGiftInner[]
     */
    public function getGift(): ?array
    {
        return $this->gift;
    }

    /**
     * 礼包内的礼品配置，数量限制0～8
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorGamePackageListInnerGiftInner[] $gift
     * @return self
     */
    public function setGift(?array $gift): self
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * 礼包使用结束期限，格式 yyyy.MM.dd
     * @return string
     */
    public function getGiftEndDate(): ?string
    {
        return $this->giftEndDate;
    }

    /**
     * 礼包使用结束期限，格式 yyyy.MM.dd
     * @param string $giftEndDate
     * @return self
     */
    public function setGiftEndDate(?string $giftEndDate): self
    {
        $this->giftEndDate = $giftEndDate;
        return $this;
    }

    /**
     * 礼包使用规则，字符限制0～30
     * @return string
     */
    public function getGiftRegulation(): ?string
    {
        return $this->giftRegulation;
    }

    /**
     * 礼包使用规则，字符限制0～30
     * @param string $giftRegulation
     * @return self
     */
    public function setGiftRegulation(?string $giftRegulation): self
    {
        $this->giftRegulation = $giftRegulation;
        return $this;
    }

    /**
     * 礼包使用开始期限，格式 yyyy.MM.dd
     * @return string
     */
    public function getGiftStartDate(): ?string
    {
        return $this->giftStartDate;
    }

    /**
     * 礼包使用开始期限，格式 yyyy.MM.dd
     * @param string $giftStartDate
     * @return self
     */
    public function setGiftStartDate(?string $giftStartDate): self
    {
        $this->giftStartDate = $giftStartDate;
        return $this;
    }

    /**
     * ios礼包码，字符限制0～20
     * @return string
     */
    public function getIosPackageCode(): ?string
    {
        return $this->iosPackageCode;
    }

    /**
     * ios礼包码，字符限制0～20
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
        if ($this->gamePackageName !== null) {
            $result['game_package_name'] = $this->gamePackageName;
        }
        if ($this->gift !== null) {
            $result['gift'] = $this->gift;
        }
        if ($this->giftEndDate !== null) {
            $result['gift_end_date'] = $this->giftEndDate;
        }
        if ($this->giftRegulation !== null) {
            $result['gift_regulation'] = $this->giftRegulation;
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
        if (($v = $data['game_package_name'] ?? null) !== null) {
            $obj->gamePackageName = (string) $v;
        }
        if (($v = $data['gift'] ?? null) !== null && is_array($v)) {
            $obj->gift = array_map(fn ($vv) => \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchorGamePackageListInnerGiftInner::fromArray($vv), $v);
        }
        if (($v = $data['gift_end_date'] ?? null) !== null) {
            $obj->giftEndDate = (string) $v;
        }
        if (($v = $data['gift_regulation'] ?? null) !== null) {
            $obj->giftRegulation = (string) $v;
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
