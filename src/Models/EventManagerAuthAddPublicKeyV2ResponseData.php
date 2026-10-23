<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAuthAddPublicKeyV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerAuthAddPublicKeyV2ResponseDataPubkey
     */
    protected ?\Oceanengine\Models\EventManagerAuthAddPublicKeyV2ResponseDataPubkey $pubkey = null;

    /**
     * @return \Oceanengine\Models\EventManagerAuthAddPublicKeyV2ResponseDataPubkey
     */
    public function getPubkey(): ?\Oceanengine\Models\EventManagerAuthAddPublicKeyV2ResponseDataPubkey
    {
        return $this->pubkey;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAuthAddPublicKeyV2ResponseDataPubkey $pubkey
     * @return self
     */
    public function setPubkey(?\Oceanengine\Models\EventManagerAuthAddPublicKeyV2ResponseDataPubkey $pubkey): self
    {
        $this->pubkey = $pubkey;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pubkey !== null) {
            $result['pubkey'] = $this->pubkey;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['pubkey'] ?? null) !== null && is_array($v)) {
            $obj->pubkey = \Oceanengine\Models\EventManagerAuthAddPublicKeyV2ResponseDataPubkey::fromArray($v);
        }
        return $obj;
    }
}
