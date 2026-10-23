<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreateStatementInvoiceV2RequestRebateItemListInner implements \JsonSerializable
{
    /**
     * 返点申请金额
     * @var float
     */
    protected ?float $applyAmount = null;

    /**
     * 返点编号
     * @var string
     */
    protected ?string $rebateSerial = null;

    /**
     * 返点申请金额
     * @return float
     */
    public function getApplyAmount(): ?float
    {
        return $this->applyAmount;
    }

    /**
     * 返点申请金额
     * @param float $applyAmount
     * @return self
     */
    public function setApplyAmount(?float $applyAmount): self
    {
        $this->applyAmount = $applyAmount;
        return $this;
    }

    /**
     * 返点编号
     * @return string
     */
    public function getRebateSerial(): ?string
    {
        return $this->rebateSerial;
    }

    /**
     * 返点编号
     * @param string $rebateSerial
     * @return self
     */
    public function setRebateSerial(?string $rebateSerial): self
    {
        $this->rebateSerial = $rebateSerial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyAmount !== null) {
            $result['apply_amount'] = $this->applyAmount;
        }
        if ($this->rebateSerial !== null) {
            $result['rebate_serial'] = $this->rebateSerial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_amount'] ?? null) !== null) {
            $obj->applyAmount = (float) $v;
        }
        if (($v = $data['rebate_serial'] ?? null) !== null) {
            $obj->rebateSerial = (string) $v;
        }
        return $obj;
    }
}
