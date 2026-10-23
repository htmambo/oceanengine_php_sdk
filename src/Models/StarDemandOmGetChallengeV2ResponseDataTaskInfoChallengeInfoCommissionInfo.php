<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoCommissionInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adCommissionRate = null;

    /**
     * @var int
     */
    protected ?int $payCommissionRate = null;

    /**
     * @return int
     */
    public function getAdCommissionRate(): ?int
    {
        return $this->adCommissionRate;
    }

    /**
     * @param int $adCommissionRate
     * @return self
     */
    public function setAdCommissionRate(?int $adCommissionRate): self
    {
        $this->adCommissionRate = $adCommissionRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayCommissionRate(): ?int
    {
        return $this->payCommissionRate;
    }

    /**
     * @param int $payCommissionRate
     * @return self
     */
    public function setPayCommissionRate(?int $payCommissionRate): self
    {
        $this->payCommissionRate = $payCommissionRate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adCommissionRate !== null) {
            $result['ad_commission_rate'] = $this->adCommissionRate;
        }
        if ($this->payCommissionRate !== null) {
            $result['pay_commission_rate'] = $this->payCommissionRate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_commission_rate'] ?? null) !== null) {
            $obj->adCommissionRate = (int) $v;
        }
        if (($v = $data['pay_commission_rate'] ?? null) !== null) {
            $obj->payCommissionRate = (int) $v;
        }
        return $obj;
    }
}
