<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestChallengeInfoParticipateProviderRange implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $providerIds = null;

    /**
     * @return int[]
     */
    public function getProviderIds(): ?array
    {
        return $this->providerIds;
    }

    /**
     * @param int[] $providerIds
     * @return self
     */
    public function setProviderIds(?array $providerIds): self
    {
        $this->providerIds = $providerIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->providerIds !== null) {
            $result['provider_ids'] = $this->providerIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['provider_ids'] ?? null) !== null && is_array($v)) {
            $obj->providerIds = $v;
        }
        return $obj;
    }
}
