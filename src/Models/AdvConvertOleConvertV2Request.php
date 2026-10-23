<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvConvertOleConvertV2Request implements \JsonSerializable
{
    /**
     * adv_id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 订单所在自然日范围 结束时间，格式 yyyy-MM-dd。假设获取8.16数据，则填写2023-08-16。获取8.16-8.17数据，则填写2023-08-17。
     * @var string
     */
    protected ?string $dateEndTime = null;

    /**
     * 订单所在自然日范围 开始时间，格式 yyyy-MM-dd。假设获取8.16数据，则填写2023-08-16。获取8.16-8.17数据，则填写2023-08-16。
     * @var string
     */
    protected ?string $dateStartTime = null;

    /**
     * 下单时间范围 结束时间，可精确到分钟。格式 yyyy-MM-dd HH:mm:ss，示例 2023-08-16 13:00:00
     * @var string
     */
    protected ?string $orderEndTime = null;

    /**
     * 下单时间范围 开始时间，可精确到分钟。格式 yyyy-MM-dd HH:mm:ss，示例 2023-08-16 12:00:00
     * @var string
     */
    protected ?string $orderStartTime = null;

    /**
     * adv_id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * adv_id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 订单所在自然日范围 结束时间，格式 yyyy-MM-dd。假设获取8.16数据，则填写2023-08-16。获取8.16-8.17数据，则填写2023-08-17。
     * @return string
     */
    public function getDateEndTime(): ?string
    {
        return $this->dateEndTime;
    }

    /**
     * 订单所在自然日范围 结束时间，格式 yyyy-MM-dd。假设获取8.16数据，则填写2023-08-16。获取8.16-8.17数据，则填写2023-08-17。
     * @param string $dateEndTime
     * @return self
     */
    public function setDateEndTime(?string $dateEndTime): self
    {
        $this->dateEndTime = $dateEndTime;
        return $this;
    }

    /**
     * 订单所在自然日范围 开始时间，格式 yyyy-MM-dd。假设获取8.16数据，则填写2023-08-16。获取8.16-8.17数据，则填写2023-08-16。
     * @return string
     */
    public function getDateStartTime(): ?string
    {
        return $this->dateStartTime;
    }

    /**
     * 订单所在自然日范围 开始时间，格式 yyyy-MM-dd。假设获取8.16数据，则填写2023-08-16。获取8.16-8.17数据，则填写2023-08-16。
     * @param string $dateStartTime
     * @return self
     */
    public function setDateStartTime(?string $dateStartTime): self
    {
        $this->dateStartTime = $dateStartTime;
        return $this;
    }

    /**
     * 下单时间范围 结束时间，可精确到分钟。格式 yyyy-MM-dd HH:mm:ss，示例 2023-08-16 13:00:00
     * @return string
     */
    public function getOrderEndTime(): ?string
    {
        return $this->orderEndTime;
    }

    /**
     * 下单时间范围 结束时间，可精确到分钟。格式 yyyy-MM-dd HH:mm:ss，示例 2023-08-16 13:00:00
     * @param string $orderEndTime
     * @return self
     */
    public function setOrderEndTime(?string $orderEndTime): self
    {
        $this->orderEndTime = $orderEndTime;
        return $this;
    }

    /**
     * 下单时间范围 开始时间，可精确到分钟。格式 yyyy-MM-dd HH:mm:ss，示例 2023-08-16 12:00:00
     * @return string
     */
    public function getOrderStartTime(): ?string
    {
        return $this->orderStartTime;
    }

    /**
     * 下单时间范围 开始时间，可精确到分钟。格式 yyyy-MM-dd HH:mm:ss，示例 2023-08-16 12:00:00
     * @param string $orderStartTime
     * @return self
     */
    public function setOrderStartTime(?string $orderStartTime): self
    {
        $this->orderStartTime = $orderStartTime;
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
        if ($this->dateEndTime !== null) {
            $result['date_end_time'] = $this->dateEndTime;
        }
        if ($this->dateStartTime !== null) {
            $result['date_start_time'] = $this->dateStartTime;
        }
        if ($this->orderEndTime !== null) {
            $result['order_end_time'] = $this->orderEndTime;
        }
        if ($this->orderStartTime !== null) {
            $result['order_start_time'] = $this->orderStartTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['date_end_time'] ?? null) !== null) {
            $obj->dateEndTime = (string) $v;
        }
        if (($v = $data['date_start_time'] ?? null) !== null) {
            $obj->dateStartTime = (string) $v;
        }
        if (($v = $data['order_end_time'] ?? null) !== null) {
            $obj->orderEndTime = (string) $v;
        }
        if (($v = $data['order_start_time'] ?? null) !== null) {
            $obj->orderStartTime = (string) $v;
        }
        return $obj;
    }
}
