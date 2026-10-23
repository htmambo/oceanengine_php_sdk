<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AvailablePaymentsListV30ResponseData implements \JsonSerializable
{
    /**
     * adv关联的可用款项
     * @var \Oceanengine\Models\AvailablePaymentsListV30ResponseDataPaymentListInner[]
     */
    protected ?array $paymentList = null;

    /**
     * 总条数
     * @var int
     */
    protected ?int $total = null;

    /**
     * adv关联的可用款项
     * @return \Oceanengine\Models\AvailablePaymentsListV30ResponseDataPaymentListInner[]
     */
    public function getPaymentList(): ?array
    {
        return $this->paymentList;
    }

    /**
     * adv关联的可用款项
     * @param \Oceanengine\Models\AvailablePaymentsListV30ResponseDataPaymentListInner[] $paymentList
     * @return self
     */
    public function setPaymentList(?array $paymentList): self
    {
        $this->paymentList = $paymentList;
        return $this;
    }

    /**
     * 总条数
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * 总条数
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->paymentList !== null) {
            $result['payment_list'] = $this->paymentList;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['payment_list'] ?? null) !== null && is_array($v)) {
            $obj->paymentList = array_map(fn ($vv) => \Oceanengine\Models\AvailablePaymentsListV30ResponseDataPaymentListInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
