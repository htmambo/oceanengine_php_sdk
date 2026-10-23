<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAdvertiserAllListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EbpAdvertiserAllListV30ResponseDataAccountsInner[]
     */
    protected ?array $accounts = null;

    /**
     * 下批次的游标信息，如果该值不为空，说明还有值，该值为空，说明已经查完数据
     * @var string
     */
    protected ?string $cursor = null;

    /**
     * @return \Oceanengine\Models\EbpAdvertiserAllListV30ResponseDataAccountsInner[]
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * @param \Oceanengine\Models\EbpAdvertiserAllListV30ResponseDataAccountsInner[] $accounts
     * @return self
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;
        return $this;
    }

    /**
     * 下批次的游标信息，如果该值不为空，说明还有值，该值为空，说明已经查完数据
     * @return string
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * 下批次的游标信息，如果该值不为空，说明还有值，该值为空，说明已经查完数据
     * @param string $cursor
     * @return self
     */
    public function setCursor(?string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accounts !== null) {
            $result['accounts'] = $this->accounts;
        }
        if ($this->cursor !== null) {
            $result['cursor'] = $this->cursor;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['accounts'] ?? null) !== null && is_array($v)) {
            $obj->accounts = array_map(fn ($vv) => \Oceanengine\Models\EbpAdvertiserAllListV30ResponseDataAccountsInner::fromArray($vv), $v);
        }
        if (($v = $data['cursor'] ?? null) !== null) {
            $obj->cursor = (string) $v;
        }
        return $obj;
    }
}
