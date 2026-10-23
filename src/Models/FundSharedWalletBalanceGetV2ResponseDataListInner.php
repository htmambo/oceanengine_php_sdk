<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FundSharedWalletBalanceGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\FundSharedWalletBalanceGetV2ResponseDataListInnerBalanceDetailInner[]
     */
    protected ?array $balanceDetail = null;

    /**
     * @var string
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $statusMessage = null;

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
     * @return \Oceanengine\Models\FundSharedWalletBalanceGetV2ResponseDataListInnerBalanceDetailInner[]
     */
    public function getBalanceDetail(): ?array
    {
        return $this->balanceDetail;
    }

    /**
     * @param \Oceanengine\Models\FundSharedWalletBalanceGetV2ResponseDataListInnerBalanceDetailInner[] $balanceDetail
     * @return self
     */
    public function setBalanceDetail(?array $balanceDetail): self
    {
        $this->balanceDetail = $balanceDetail;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage(): ?string
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return self
     */
    public function setStatusMessage(?string $statusMessage): self
    {
        $this->statusMessage = $statusMessage;
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
        if ($this->balanceDetail !== null) {
            $result['balance_detail'] = $this->balanceDetail;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->statusMessage !== null) {
            $result['status_message'] = $this->statusMessage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['balance_detail'] ?? null) !== null && is_array($v)) {
            $obj->balanceDetail = array_map(fn ($vv) => \Oceanengine\Models\FundSharedWalletBalanceGetV2ResponseDataListInnerBalanceDetailInner::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['status_message'] ?? null) !== null) {
            $obj->statusMessage = (string) $v;
        }
        return $obj;
    }
}
