<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionSuggestV10ResponseData implements \JsonSerializable
{
    /**
     * 参考金额
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionSuggestV10ResponseDataAmountListInner[]
     */
    protected ?array $amountList = null;

    /**
     * 建议投放金额，单位元
     * @var int
     */
    protected ?int $defaultAmount = null;

    /**
     * @var int
     */
    protected ?int $deliveryTime = null;

    /**
     * 参考金额
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionSuggestV10ResponseDataAmountListInner[]
     */
    public function getAmountList(): ?array
    {
        return $this->amountList;
    }

    /**
     * 参考金额
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionSuggestV10ResponseDataAmountListInner[] $amountList
     * @return self
     */
    public function setAmountList(?array $amountList): self
    {
        $this->amountList = $amountList;
        return $this;
    }

    /**
     * 建议投放金额，单位元
     * @return int
     */
    public function getDefaultAmount(): ?int
    {
        return $this->defaultAmount;
    }

    /**
     * 建议投放金额，单位元
     * @param int $defaultAmount
     * @return self
     */
    public function setDefaultAmount(?int $defaultAmount): self
    {
        $this->defaultAmount = $defaultAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryTime(): ?int
    {
        return $this->deliveryTime;
    }

    /**
     * @param int $deliveryTime
     * @return self
     */
    public function setDeliveryTime(?int $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amountList !== null) {
            $result['amount_list'] = $this->amountList;
        }
        if ($this->defaultAmount !== null) {
            $result['default_amount'] = $this->defaultAmount;
        }
        if ($this->deliveryTime !== null) {
            $result['delivery_time'] = $this->deliveryTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount_list'] ?? null) !== null && is_array($v)) {
            $obj->amountList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAwemeUniPromotionSuggestV10ResponseDataAmountListInner::fromArray($vv), $v);
        }
        if (($v = $data['default_amount'] ?? null) !== null) {
            $obj->defaultAmount = (int) $v;
        }
        if (($v = $data['delivery_time'] ?? null) !== null) {
            $obj->deliveryTime = (int) $v;
        }
        return $obj;
    }
}
