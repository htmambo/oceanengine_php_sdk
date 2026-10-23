<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FundSharedWalletBalanceGetV2ResponseDataListInnerBalanceDetailInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $balance = null;

    /**
     * @var string
     */
    protected ?string $billingInventory = null;

    /**
     * @return float
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return self
     */
    public function setBalance(?float $balance): self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingInventory(): ?string
    {
        return $this->billingInventory;
    }

    /**
     * @param string $billingInventory
     * @return self
     */
    public function setBillingInventory(?string $billingInventory): self
    {
        $this->billingInventory = $billingInventory;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->balance !== null) {
            $result['balance'] = $this->balance;
        }
        if ($this->billingInventory !== null) {
            $result['billing_inventory'] = $this->billingInventory;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['balance'] ?? null) !== null) {
            $obj->balance = (float) $v;
        }
        if (($v = $data['billing_inventory'] ?? null) !== null) {
            $obj->billingInventory = (string) $v;
        }
        return $obj;
    }
}
