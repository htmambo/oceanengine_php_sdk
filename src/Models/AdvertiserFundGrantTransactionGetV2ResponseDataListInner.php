<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserFundGrantTransactionGetV2ResponseDataListInner implements \JsonSerializable
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
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2DataListGrantType
     */
    protected ?string $grantType = null;

    /**
     * @var \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2DataListTransactionType
     */
    protected ?string $transactionType = null;

    /**
     * @var string
     */
    protected ?string $uniqId = null;

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
     * @return \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2DataListGrantType
     */
    public function getGrantType(): ?string
    {
        return $this->grantType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2DataListGrantType $grantType
     * @return self
     */
    public function setGrantType(?string $grantType): self
    {
        $this->grantType = $grantType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2DataListTransactionType
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2DataListTransactionType $transactionType
     * @return self
     */
    public function setTransactionType(?string $transactionType): self
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * @return string
     */
    public function getUniqId(): ?string
    {
        return $this->uniqId;
    }

    /**
     * @param string $uniqId
     * @return self
     */
    public function setUniqId(?string $uniqId): self
    {
        $this->uniqId = $uniqId;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->grantType !== null) {
            $result['grant_type'] = $this->grantType;
        }
        if ($this->transactionType !== null) {
            $result['transaction_type'] = $this->transactionType;
        }
        if ($this->uniqId !== null) {
            $result['uniq_id'] = $this->uniqId;
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
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['grant_type'] ?? null) !== null) {
            $obj->grantType = (string) $v;
        }
        if (($v = $data['transaction_type'] ?? null) !== null) {
            $obj->transactionType = (string) $v;
        }
        if (($v = $data['uniq_id'] ?? null) !== null) {
            $obj->uniqId = (string) $v;
        }
        return $obj;
    }
}
