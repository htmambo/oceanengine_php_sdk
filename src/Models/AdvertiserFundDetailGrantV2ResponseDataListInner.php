<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserFundDetailGrantV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $addedValueGrantCost = null;

    /**
     * @var float
     */
    protected ?float $cashCost = null;

    /**
     * @var float
     */
    protected ?float $cost = null;

    /**
     * @var string
     */
    protected ?string $date = null;

    /**
     * @var float
     */
    protected ?float $grantCost = null;

    /**
     * @var float
     */
    protected ?float $refundGrantCost = null;

    /**
     * @var float
     */
    protected ?float $sharedWalletCost = null;

    /**
     * @return float
     */
    public function getAddedValueGrantCost(): ?float
    {
        return $this->addedValueGrantCost;
    }

    /**
     * @param float $addedValueGrantCost
     * @return self
     */
    public function setAddedValueGrantCost(?float $addedValueGrantCost): self
    {
        $this->addedValueGrantCost = $addedValueGrantCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashCost(): ?float
    {
        return $this->cashCost;
    }

    /**
     * @param float $cashCost
     * @return self
     */
    public function setCashCost(?float $cashCost): self
    {
        $this->cashCost = $cashCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrantCost(): ?float
    {
        return $this->grantCost;
    }

    /**
     * @param float $grantCost
     * @return self
     */
    public function setGrantCost(?float $grantCost): self
    {
        $this->grantCost = $grantCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getRefundGrantCost(): ?float
    {
        return $this->refundGrantCost;
    }

    /**
     * @param float $refundGrantCost
     * @return self
     */
    public function setRefundGrantCost(?float $refundGrantCost): self
    {
        $this->refundGrantCost = $refundGrantCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getSharedWalletCost(): ?float
    {
        return $this->sharedWalletCost;
    }

    /**
     * @param float $sharedWalletCost
     * @return self
     */
    public function setSharedWalletCost(?float $sharedWalletCost): self
    {
        $this->sharedWalletCost = $sharedWalletCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->addedValueGrantCost !== null) {
            $result['added_value_grant_cost'] = $this->addedValueGrantCost;
        }
        if ($this->cashCost !== null) {
            $result['cash_cost'] = $this->cashCost;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->grantCost !== null) {
            $result['grant_cost'] = $this->grantCost;
        }
        if ($this->refundGrantCost !== null) {
            $result['refund_grant_cost'] = $this->refundGrantCost;
        }
        if ($this->sharedWalletCost !== null) {
            $result['shared_wallet_cost'] = $this->sharedWalletCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['added_value_grant_cost'] ?? null) !== null) {
            $obj->addedValueGrantCost = (float) $v;
        }
        if (($v = $data['cash_cost'] ?? null) !== null) {
            $obj->cashCost = (float) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['grant_cost'] ?? null) !== null) {
            $obj->grantCost = (float) $v;
        }
        if (($v = $data['refund_grant_cost'] ?? null) !== null) {
            $obj->refundGrantCost = (float) $v;
        }
        if (($v = $data['shared_wallet_cost'] ?? null) !== null) {
            $obj->sharedWalletCost = (float) $v;
        }
        return $obj;
    }
}
