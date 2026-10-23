<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmCreateChallengeV2RequestChallengeInfoCommissionInfo implements \JsonSerializable
{
    /**
     * IAA分佣比例
     * @var int
     */
    protected ?int $adCommissionRate = null;

    /**
     * IAP分佣比例
     * @var int
     */
    protected ?int $payCommissionRate = null;

    /**
     * IAA分佣比例
     * @return int
     */
    public function getAdCommissionRate(): ?int
    {
        return $this->adCommissionRate;
    }

    /**
     * IAA分佣比例
     * @param int $adCommissionRate
     * @return self
     */
    public function setAdCommissionRate(?int $adCommissionRate): self
    {
        $this->adCommissionRate = $adCommissionRate;
        return $this;
    }

    /**
     * IAP分佣比例
     * @return int
     */
    public function getPayCommissionRate(): ?int
    {
        return $this->payCommissionRate;
    }

    /**
     * IAP分佣比例
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
