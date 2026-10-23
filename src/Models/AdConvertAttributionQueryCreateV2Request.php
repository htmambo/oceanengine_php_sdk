<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdConvertAttributionQueryCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * Android设备标识符。platform为android时，android_id与device_id至少传一个
     * @var string
     */
    protected ?string $androidId = null;

    /**
     * 客户侧激活时间，毫秒级时间戳；传入非0值时必须处于当前时间前后7天范围内
     * @var int
     */
    protected ?int $customerActiveTime = null;

    /**
     * iOS用户设备标识符，platform为ios时必传
     * @var string
     */
    protected ?string $idfv = null;

    /**
     * 鸿蒙设备标识符。platform为open_harmony时，odid与device_id至少传一个
     * @var string
     */
    protected ?string $odid = null;

    /**
     * 应用包名
     * @var string
     */
    protected ?string $packageName = null;

    /**
     * 系统类型： iOS：ios 安卓：android 鸿蒙：open_harmony
     * @var string
     */
    protected ?string $platform = null;

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
     * Android设备标识符。platform为android时，android_id与device_id至少传一个
     * @return string
     */
    public function getAndroidId(): ?string
    {
        return $this->androidId;
    }

    /**
     * Android设备标识符。platform为android时，android_id与device_id至少传一个
     * @param string $androidId
     * @return self
     */
    public function setAndroidId(?string $androidId): self
    {
        $this->androidId = $androidId;
        return $this;
    }

    /**
     * 客户侧激活时间，毫秒级时间戳；传入非0值时必须处于当前时间前后7天范围内
     * @return int
     */
    public function getCustomerActiveTime(): ?int
    {
        return $this->customerActiveTime;
    }

    /**
     * 客户侧激活时间，毫秒级时间戳；传入非0值时必须处于当前时间前后7天范围内
     * @param int $customerActiveTime
     * @return self
     */
    public function setCustomerActiveTime(?int $customerActiveTime): self
    {
        $this->customerActiveTime = $customerActiveTime;
        return $this;
    }

    /**
     * iOS用户设备标识符，platform为ios时必传
     * @return string
     */
    public function getIdfv(): ?string
    {
        return $this->idfv;
    }

    /**
     * iOS用户设备标识符，platform为ios时必传
     * @param string $idfv
     * @return self
     */
    public function setIdfv(?string $idfv): self
    {
        $this->idfv = $idfv;
        return $this;
    }

    /**
     * 鸿蒙设备标识符。platform为open_harmony时，odid与device_id至少传一个
     * @return string
     */
    public function getOdid(): ?string
    {
        return $this->odid;
    }

    /**
     * 鸿蒙设备标识符。platform为open_harmony时，odid与device_id至少传一个
     * @param string $odid
     * @return self
     */
    public function setOdid(?string $odid): self
    {
        $this->odid = $odid;
        return $this;
    }

    /**
     * 应用包名
     * @return string
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * 应用包名
     * @param string $packageName
     * @return self
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * 系统类型： iOS：ios 安卓：android 鸿蒙：open_harmony
     * @return string
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * 系统类型： iOS：ios 安卓：android 鸿蒙：open_harmony
     * @param string $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
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
        if ($this->androidId !== null) {
            $result['android_id'] = $this->androidId;
        }
        if ($this->customerActiveTime !== null) {
            $result['customer_active_time'] = $this->customerActiveTime;
        }
        if ($this->idfv !== null) {
            $result['idfv'] = $this->idfv;
        }
        if ($this->odid !== null) {
            $result['odid'] = $this->odid;
        }
        if ($this->packageName !== null) {
            $result['package_name'] = $this->packageName;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['android_id'] ?? null) !== null) {
            $obj->androidId = (string) $v;
        }
        if (($v = $data['customer_active_time'] ?? null) !== null) {
            $obj->customerActiveTime = (int) $v;
        }
        if (($v = $data['idfv'] ?? null) !== null) {
            $obj->idfv = (string) $v;
        }
        if (($v = $data['odid'] ?? null) !== null) {
            $obj->odid = (string) $v;
        }
        if (($v = $data['package_name'] ?? null) !== null) {
            $obj->packageName = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        return $obj;
    }
}
