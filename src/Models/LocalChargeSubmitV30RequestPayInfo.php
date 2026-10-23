<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalChargeSubmitV30RequestPayInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalChargeSubmitV30PayInfoPaymentChannel
     */
    protected ?string $paymentChannel = null;

    /**
     * @return \Oceanengine\Models\LocalChargeSubmitV30PayInfoPaymentChannel
     */
    public function getPaymentChannel(): ?string
    {
        return $this->paymentChannel;
    }

    /**
     * @param \Oceanengine\Models\LocalChargeSubmitV30PayInfoPaymentChannel $paymentChannel
     * @return self
     */
    public function setPaymentChannel(?string $paymentChannel): self
    {
        $this->paymentChannel = $paymentChannel;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->paymentChannel !== null) {
            $result['payment_channel'] = $this->paymentChannel;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['payment_channel'] ?? null) !== null) {
            $obj->paymentChannel = (string) $v;
        }
        return $obj;
    }
}
