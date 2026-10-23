<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAuthGetPublicKeyV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerAuthGetPublicKeyV2ResponseDataPubkey
     */
    protected ?\Oceanengine\Models\EventManagerAuthGetPublicKeyV2ResponseDataPubkey $pubkey = null;

    /**
     * @return \Oceanengine\Models\EventManagerAuthGetPublicKeyV2ResponseDataPubkey
     */
    public function getPubkey(): ?\Oceanengine\Models\EventManagerAuthGetPublicKeyV2ResponseDataPubkey
    {
        return $this->pubkey;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAuthGetPublicKeyV2ResponseDataPubkey $pubkey
     * @return self
     */
    public function setPubkey(?\Oceanengine\Models\EventManagerAuthGetPublicKeyV2ResponseDataPubkey $pubkey): self
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
            $obj->pubkey = \Oceanengine\Models\EventManagerAuthGetPublicKeyV2ResponseDataPubkey::fromArray($v);
        }
        return $obj;
    }
}
