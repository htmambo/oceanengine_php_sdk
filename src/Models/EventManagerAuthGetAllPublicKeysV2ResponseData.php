<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAuthGetAllPublicKeysV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerAuthGetAllPublicKeysV2ResponseDataPubkeysInner[]
     */
    protected ?array $pubkeys = null;

    /**
     * @return \Oceanengine\Models\EventManagerAuthGetAllPublicKeysV2ResponseDataPubkeysInner[]
     */
    public function getPubkeys(): ?array
    {
        return $this->pubkeys;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAuthGetAllPublicKeysV2ResponseDataPubkeysInner[] $pubkeys
     * @return self
     */
    public function setPubkeys(?array $pubkeys): self
    {
        $this->pubkeys = $pubkeys;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pubkeys !== null) {
            $result['pubkeys'] = $this->pubkeys;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['pubkeys'] ?? null) !== null && is_array($v)) {
            $obj->pubkeys = array_map(fn ($vv) => \Oceanengine\Models\EventManagerAuthGetAllPublicKeysV2ResponseDataPubkeysInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
