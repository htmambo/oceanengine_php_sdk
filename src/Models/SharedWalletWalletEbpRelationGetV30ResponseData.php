<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletEbpRelationGetV30ResponseData implements \JsonSerializable
{
    /**
     * 每个组织对应的钱包集合
     * @var \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * 每个组织对应的钱包集合
     * @return \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 每个组织对应的钱包集合
     * @param \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWalletEbpRelationGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
