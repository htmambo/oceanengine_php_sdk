<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanFinanceWalletGetV10ResponseDataShareExpiringDetailListInner implements \JsonSerializable
{
    /**
     * 金额
     * @var int
     */
    protected ?int $amount = null;

    /**
     * @var \Oceanengine\Models\QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory
     */
    protected ?string $category = null;

    /**
     * 到期时间
     * @var int
     */
    protected ?int $expireTime = null;

    /**
     * 金额
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 金额
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param \Oceanengine\Models\QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory $category
     * @return self
     */
    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * 到期时间
     * @return int
     */
    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }

    /**
     * 到期时间
     * @param int $expireTime
     * @return self
     */
    public function setExpireTime(?int $expireTime): self
    {
        $this->expireTime = $expireTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->category !== null) {
            $result['category'] = $this->category;
        }
        if ($this->expireTime !== null) {
            $result['expire_time'] = $this->expireTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (int) $v;
        }
        if (($v = $data['category'] ?? null) !== null) {
            $obj->category = (string) $v;
        }
        if (($v = $data['expire_time'] ?? null) !== null) {
            $obj->expireTime = (int) $v;
        }
        return $obj;
    }
}
