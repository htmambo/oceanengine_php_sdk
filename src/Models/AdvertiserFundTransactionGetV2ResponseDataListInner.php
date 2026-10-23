<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserFundTransactionGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var float
     */
    protected ?float $amount = null;

    /**
     * @var float
     */
    protected ?float $cash = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var float
     */
    protected ?float $dealbase = null;

    /**
     * @var float
     */
    protected ?float $frozen = null;

    /**
     * @var float
     */
    protected ?float $grant = null;

    /**
     * @var int
     */
    protected ?int $payee = null;

    /**
     * @var int
     */
    protected ?int $remitter = null;

    /**
     * @var float
     */
    protected ?float $returnGoods = null;

    /**
     * @var int
     */
    protected ?int $transactionSeq = null;

    /**
     * @var \Oceanengine\Models\AdvertiserFundTransactionGetV2DataListTransactionType
     */
    protected ?string $transactionType = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCash(): ?float
    {
        return $this->cash;
    }

    /**
     * @param float $cash
     * @return self
     */
    public function setCash(?float $cash): self
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getDealbase(): ?float
    {
        return $this->dealbase;
    }

    /**
     * @param float $dealbase
     * @return self
     */
    public function setDealbase(?float $dealbase): self
    {
        $this->dealbase = $dealbase;
        return $this;
    }

    /**
     * @return float
     */
    public function getFrozen(): ?float
    {
        return $this->frozen;
    }

    /**
     * @param float $frozen
     * @return self
     */
    public function setFrozen(?float $frozen): self
    {
        $this->frozen = $frozen;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrant(): ?float
    {
        return $this->grant;
    }

    /**
     * @param float $grant
     * @return self
     */
    public function setGrant(?float $grant): self
    {
        $this->grant = $grant;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayee(): ?int
    {
        return $this->payee;
    }

    /**
     * @param int $payee
     * @return self
     */
    public function setPayee(?int $payee): self
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * @return int
     */
    public function getRemitter(): ?int
    {
        return $this->remitter;
    }

    /**
     * @param int $remitter
     * @return self
     */
    public function setRemitter(?int $remitter): self
    {
        $this->remitter = $remitter;
        return $this;
    }

    /**
     * @return float
     */
    public function getReturnGoods(): ?float
    {
        return $this->returnGoods;
    }

    /**
     * @param float $returnGoods
     * @return self
     */
    public function setReturnGoods(?float $returnGoods): self
    {
        $this->returnGoods = $returnGoods;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionSeq(): ?int
    {
        return $this->transactionSeq;
    }

    /**
     * @param int $transactionSeq
     * @return self
     */
    public function setTransactionSeq(?int $transactionSeq): self
    {
        $this->transactionSeq = $transactionSeq;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserFundTransactionGetV2DataListTransactionType
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserFundTransactionGetV2DataListTransactionType $transactionType
     * @return self
     */
    public function setTransactionType(?string $transactionType): self
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->cash !== null) {
            $result['cash'] = $this->cash;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->dealbase !== null) {
            $result['dealbase'] = $this->dealbase;
        }
        if ($this->frozen !== null) {
            $result['frozen'] = $this->frozen;
        }
        if ($this->grant !== null) {
            $result['grant'] = $this->grant;
        }
        if ($this->payee !== null) {
            $result['payee'] = $this->payee;
        }
        if ($this->remitter !== null) {
            $result['remitter'] = $this->remitter;
        }
        if ($this->returnGoods !== null) {
            $result['return_goods'] = $this->returnGoods;
        }
        if ($this->transactionSeq !== null) {
            $result['transaction_seq'] = $this->transactionSeq;
        }
        if ($this->transactionType !== null) {
            $result['transaction_type'] = $this->transactionType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (float) $v;
        }
        if (($v = $data['cash'] ?? null) !== null) {
            $obj->cash = (float) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['dealbase'] ?? null) !== null) {
            $obj->dealbase = (float) $v;
        }
        if (($v = $data['frozen'] ?? null) !== null) {
            $obj->frozen = (float) $v;
        }
        if (($v = $data['grant'] ?? null) !== null) {
            $obj->grant = (float) $v;
        }
        if (($v = $data['payee'] ?? null) !== null) {
            $obj->payee = (int) $v;
        }
        if (($v = $data['remitter'] ?? null) !== null) {
            $obj->remitter = (int) $v;
        }
        if (($v = $data['return_goods'] ?? null) !== null) {
            $obj->returnGoods = (float) $v;
        }
        if (($v = $data['transaction_seq'] ?? null) !== null) {
            $obj->transactionSeq = (int) $v;
        }
        if (($v = $data['transaction_type'] ?? null) !== null) {
            $obj->transactionType = (string) $v;
        }
        return $obj;
    }
}
