<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarStarAdUniteTaskDetailV2ResponseDataStatInfoInner implements \JsonSerializable
{
    /**
     * 安卓转化数
     * @var int
     */
    protected ?int $androidConvert = null;

    /**
     * 安卓最新出价，单位：元*1000，建议获取后除以1000展示为元单位
     * @var int
     */
    protected ?int $androidConvertUnitAmount = null;

    /**
     * 安卓消耗，单位：元*100000，建议获取后除以100000展示为元单位
     * @var int
     */
    protected ?int $androidCost = null;

    /**
     * 安卓深度转化数
     * @var int
     */
    protected ?int $androidDeepConvert = null;

    /**
     * iOS转化数
     * @var int
     */
    protected ?int $iosConvert = null;

    /**
     * iOS最新出价，单位：元*1000，建议获取后除以1000展示为元单位
     * @var int
     */
    protected ?int $iosConvertUnitAmount = null;

    /**
     * iOS消耗，单位：元*100000，建议获取后除以100000展示为元单位
     * @var int
     */
    protected ?int $iosCost = null;

    /**
     * iOS深度转化数
     * @var int
     */
    protected ?int $iosDeepConvert = null;

    /**
     * 数据日期，只和安卓/iOS消耗、转化数、深度转化数相关
     * @var string
     */
    protected ?string $statDate = null;

    /**
     * 安卓转化数
     * @return int
     */
    public function getAndroidConvert(): ?int
    {
        return $this->androidConvert;
    }

    /**
     * 安卓转化数
     * @param int $androidConvert
     * @return self
     */
    public function setAndroidConvert(?int $androidConvert): self
    {
        $this->androidConvert = $androidConvert;
        return $this;
    }

    /**
     * 安卓最新出价，单位：元*1000，建议获取后除以1000展示为元单位
     * @return int
     */
    public function getAndroidConvertUnitAmount(): ?int
    {
        return $this->androidConvertUnitAmount;
    }

    /**
     * 安卓最新出价，单位：元*1000，建议获取后除以1000展示为元单位
     * @param int $androidConvertUnitAmount
     * @return self
     */
    public function setAndroidConvertUnitAmount(?int $androidConvertUnitAmount): self
    {
        $this->androidConvertUnitAmount = $androidConvertUnitAmount;
        return $this;
    }

    /**
     * 安卓消耗，单位：元*100000，建议获取后除以100000展示为元单位
     * @return int
     */
    public function getAndroidCost(): ?int
    {
        return $this->androidCost;
    }

    /**
     * 安卓消耗，单位：元*100000，建议获取后除以100000展示为元单位
     * @param int $androidCost
     * @return self
     */
    public function setAndroidCost(?int $androidCost): self
    {
        $this->androidCost = $androidCost;
        return $this;
    }

    /**
     * 安卓深度转化数
     * @return int
     */
    public function getAndroidDeepConvert(): ?int
    {
        return $this->androidDeepConvert;
    }

    /**
     * 安卓深度转化数
     * @param int $androidDeepConvert
     * @return self
     */
    public function setAndroidDeepConvert(?int $androidDeepConvert): self
    {
        $this->androidDeepConvert = $androidDeepConvert;
        return $this;
    }

    /**
     * iOS转化数
     * @return int
     */
    public function getIosConvert(): ?int
    {
        return $this->iosConvert;
    }

    /**
     * iOS转化数
     * @param int $iosConvert
     * @return self
     */
    public function setIosConvert(?int $iosConvert): self
    {
        $this->iosConvert = $iosConvert;
        return $this;
    }

    /**
     * iOS最新出价，单位：元*1000，建议获取后除以1000展示为元单位
     * @return int
     */
    public function getIosConvertUnitAmount(): ?int
    {
        return $this->iosConvertUnitAmount;
    }

    /**
     * iOS最新出价，单位：元*1000，建议获取后除以1000展示为元单位
     * @param int $iosConvertUnitAmount
     * @return self
     */
    public function setIosConvertUnitAmount(?int $iosConvertUnitAmount): self
    {
        $this->iosConvertUnitAmount = $iosConvertUnitAmount;
        return $this;
    }

    /**
     * iOS消耗，单位：元*100000，建议获取后除以100000展示为元单位
     * @return int
     */
    public function getIosCost(): ?int
    {
        return $this->iosCost;
    }

    /**
     * iOS消耗，单位：元*100000，建议获取后除以100000展示为元单位
     * @param int $iosCost
     * @return self
     */
    public function setIosCost(?int $iosCost): self
    {
        $this->iosCost = $iosCost;
        return $this;
    }

    /**
     * iOS深度转化数
     * @return int
     */
    public function getIosDeepConvert(): ?int
    {
        return $this->iosDeepConvert;
    }

    /**
     * iOS深度转化数
     * @param int $iosDeepConvert
     * @return self
     */
    public function setIosDeepConvert(?int $iosDeepConvert): self
    {
        $this->iosDeepConvert = $iosDeepConvert;
        return $this;
    }

    /**
     * 数据日期，只和安卓/iOS消耗、转化数、深度转化数相关
     * @return string
     */
    public function getStatDate(): ?string
    {
        return $this->statDate;
    }

    /**
     * 数据日期，只和安卓/iOS消耗、转化数、深度转化数相关
     * @param string $statDate
     * @return self
     */
    public function setStatDate(?string $statDate): self
    {
        $this->statDate = $statDate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidConvert !== null) {
            $result['android_convert'] = $this->androidConvert;
        }
        if ($this->androidConvertUnitAmount !== null) {
            $result['android_convert_unit_amount'] = $this->androidConvertUnitAmount;
        }
        if ($this->androidCost !== null) {
            $result['android_cost'] = $this->androidCost;
        }
        if ($this->androidDeepConvert !== null) {
            $result['android_deep_convert'] = $this->androidDeepConvert;
        }
        if ($this->iosConvert !== null) {
            $result['ios_convert'] = $this->iosConvert;
        }
        if ($this->iosConvertUnitAmount !== null) {
            $result['ios_convert_unit_amount'] = $this->iosConvertUnitAmount;
        }
        if ($this->iosCost !== null) {
            $result['ios_cost'] = $this->iosCost;
        }
        if ($this->iosDeepConvert !== null) {
            $result['ios_deep_convert'] = $this->iosDeepConvert;
        }
        if ($this->statDate !== null) {
            $result['stat_date'] = $this->statDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_convert'] ?? null) !== null) {
            $obj->androidConvert = (int) $v;
        }
        if (($v = $data['android_convert_unit_amount'] ?? null) !== null) {
            $obj->androidConvertUnitAmount = (int) $v;
        }
        if (($v = $data['android_cost'] ?? null) !== null) {
            $obj->androidCost = (int) $v;
        }
        if (($v = $data['android_deep_convert'] ?? null) !== null) {
            $obj->androidDeepConvert = (int) $v;
        }
        if (($v = $data['ios_convert'] ?? null) !== null) {
            $obj->iosConvert = (int) $v;
        }
        if (($v = $data['ios_convert_unit_amount'] ?? null) !== null) {
            $obj->iosConvertUnitAmount = (int) $v;
        }
        if (($v = $data['ios_cost'] ?? null) !== null) {
            $obj->iosCost = (int) $v;
        }
        if (($v = $data['ios_deep_convert'] ?? null) !== null) {
            $obj->iosDeepConvert = (int) $v;
        }
        if (($v = $data['stat_date'] ?? null) !== null) {
            $obj->statDate = (string) $v;
        }
        return $obj;
    }
}
