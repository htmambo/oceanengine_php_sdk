<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DcdChargeSubmitV30RequestPayInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DcdChargeSubmitV30PayInfoPaymentChannel
     */
    protected ?string $paymentChannel = null;

    /**
     * 风控信息，至少需要包含device_id和ip的json字符串，例子：{\"ip\": xxx, \"device_id\": xxx}
     * @var string
     */
    protected ?string $riskInfo = null;

    /**
     * @return \Oceanengine\Models\DcdChargeSubmitV30PayInfoPaymentChannel
     */
    public function getPaymentChannel(): ?string
    {
        return $this->paymentChannel;
    }

    /**
     * @param \Oceanengine\Models\DcdChargeSubmitV30PayInfoPaymentChannel $paymentChannel
     * @return self
     */
    public function setPaymentChannel(?string $paymentChannel): self
    {
        $this->paymentChannel = $paymentChannel;
        return $this;
    }

    /**
     * 风控信息，至少需要包含device_id和ip的json字符串，例子：{\"ip\": xxx, \"device_id\": xxx}
     * @return string
     */
    public function getRiskInfo(): ?string
    {
        return $this->riskInfo;
    }

    /**
     * 风控信息，至少需要包含device_id和ip的json字符串，例子：{\"ip\": xxx, \"device_id\": xxx}
     * @param string $riskInfo
     * @return self
     */
    public function setRiskInfo(?string $riskInfo): self
    {
        $this->riskInfo = $riskInfo;
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
        if ($this->riskInfo !== null) {
            $result['risk_info'] = $this->riskInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['payment_channel'] ?? null) !== null) {
            $obj->paymentChannel = (string) $v;
        }
        if (($v = $data['risk_info'] ?? null) !== null) {
            $obj->riskInfo = (string) $v;
        }
        return $obj;
    }
}
