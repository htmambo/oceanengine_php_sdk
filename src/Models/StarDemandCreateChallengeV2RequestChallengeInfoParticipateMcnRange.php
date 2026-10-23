<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestChallengeInfoParticipateMcnRange implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $mcnIds = null;

    /**
     * @return int[]
     */
    public function getMcnIds(): ?array
    {
        return $this->mcnIds;
    }

    /**
     * @param int[] $mcnIds
     * @return self
     */
    public function setMcnIds(?array $mcnIds): self
    {
        $this->mcnIds = $mcnIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->mcnIds !== null) {
            $result['mcn_ids'] = $this->mcnIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['mcn_ids'] ?? null) !== null && is_array($v)) {
            $obj->mcnIds = $v;
        }
        return $obj;
    }
}
