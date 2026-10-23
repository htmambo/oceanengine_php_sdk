<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAddAmountInfo implements \JsonSerializable
{
    /**
     * 续费订单金额之和，单位元
     * @var int
     */
    protected ?int $addAmount = null;

    /**
     * 续费次数
     * @var int
     */
    protected ?int $addAmountCnt = null;

    /**
     * 续费订单时长之和，单位小时
     * @var float
     */
    protected ?float $addDeliveryTime = null;

    /**
     * 续费订单金额之和，单位元
     * @return int
     */
    public function getAddAmount(): ?int
    {
        return $this->addAmount;
    }

    /**
     * 续费订单金额之和，单位元
     * @param int $addAmount
     * @return self
     */
    public function setAddAmount(?int $addAmount): self
    {
        $this->addAmount = $addAmount;
        return $this;
    }

    /**
     * 续费次数
     * @return int
     */
    public function getAddAmountCnt(): ?int
    {
        return $this->addAmountCnt;
    }

    /**
     * 续费次数
     * @param int $addAmountCnt
     * @return self
     */
    public function setAddAmountCnt(?int $addAmountCnt): self
    {
        $this->addAmountCnt = $addAmountCnt;
        return $this;
    }

    /**
     * 续费订单时长之和，单位小时
     * @return float
     */
    public function getAddDeliveryTime(): ?float
    {
        return $this->addDeliveryTime;
    }

    /**
     * 续费订单时长之和，单位小时
     * @param float $addDeliveryTime
     * @return self
     */
    public function setAddDeliveryTime(?float $addDeliveryTime): self
    {
        $this->addDeliveryTime = $addDeliveryTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->addAmount !== null) {
            $result['add_amount'] = $this->addAmount;
        }
        if ($this->addAmountCnt !== null) {
            $result['add_amount_cnt'] = $this->addAmountCnt;
        }
        if ($this->addDeliveryTime !== null) {
            $result['add_delivery_time'] = $this->addDeliveryTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['add_amount'] ?? null) !== null) {
            $obj->addAmount = (int) $v;
        }
        if (($v = $data['add_amount_cnt'] ?? null) !== null) {
            $obj->addAmountCnt = (int) $v;
        }
        if (($v = $data['add_delivery_time'] ?? null) !== null) {
            $obj->addDeliveryTime = (float) $v;
        }
        return $obj;
    }
}
