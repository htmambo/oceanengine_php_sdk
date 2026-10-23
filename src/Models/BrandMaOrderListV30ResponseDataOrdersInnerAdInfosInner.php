<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaOrderListV30ResponseDataOrdersInnerAdInfosInner implements \JsonSerializable
{
    /**
     * 计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 计划投放日期
     * @var string
     */
    protected ?string $date = null;

    /**
     * 计划投放实际结束时间
     * @var string
     */
    protected ?string $realEndTime = null;

    /**
     * 计划投放实际开始时间
     * @var string
     */
    protected ?string $realStartTime = null;

    /**
     * 计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 计划投放日期
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 计划投放日期
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 计划投放实际结束时间
     * @return string
     */
    public function getRealEndTime(): ?string
    {
        return $this->realEndTime;
    }

    /**
     * 计划投放实际结束时间
     * @param string $realEndTime
     * @return self
     */
    public function setRealEndTime(?string $realEndTime): self
    {
        $this->realEndTime = $realEndTime;
        return $this;
    }

    /**
     * 计划投放实际开始时间
     * @return string
     */
    public function getRealStartTime(): ?string
    {
        return $this->realStartTime;
    }

    /**
     * 计划投放实际开始时间
     * @param string $realStartTime
     * @return self
     */
    public function setRealStartTime(?string $realStartTime): self
    {
        $this->realStartTime = $realStartTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->realEndTime !== null) {
            $result['real_end_time'] = $this->realEndTime;
        }
        if ($this->realStartTime !== null) {
            $result['real_start_time'] = $this->realStartTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['real_end_time'] ?? null) !== null) {
            $obj->realEndTime = (string) $v;
        }
        if (($v = $data['real_start_time'] ?? null) !== null) {
            $obj->realStartTime = (string) $v;
        }
        return $obj;
    }
}
