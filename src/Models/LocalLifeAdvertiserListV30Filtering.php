<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalLifeAdvertiserListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalLifeAdvertiserListV30FilteringLocalAccountRole
     */
    protected ?string $localAccountRole = null;

    /**
     * @return \Oceanengine\Models\LocalLifeAdvertiserListV30FilteringLocalAccountRole
     */
    public function getLocalAccountRole(): ?string
    {
        return $this->localAccountRole;
    }

    /**
     * @param \Oceanengine\Models\LocalLifeAdvertiserListV30FilteringLocalAccountRole $localAccountRole
     * @return self
     */
    public function setLocalAccountRole(?string $localAccountRole): self
    {
        $this->localAccountRole = $localAccountRole;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->localAccountRole !== null) {
            $result['local_account_role'] = $this->localAccountRole;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['local_account_role'] ?? null) !== null) {
            $obj->localAccountRole = (string) $v;
        }
        return $obj;
    }
}
