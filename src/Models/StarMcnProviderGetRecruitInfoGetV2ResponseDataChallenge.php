<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetRecruitInfoGetV2ResponseDataChallenge implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $supplySample = null;

    /**
     * @return int
     */
    public function getSupplySample(): ?int
    {
        return $this->supplySample;
    }

    /**
     * @param int $supplySample
     * @return self
     */
    public function setSupplySample(?int $supplySample): self
    {
        $this->supplySample = $supplySample;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->supplySample !== null) {
            $result['supply_sample'] = $this->supplySample;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['supply_sample'] ?? null) !== null) {
            $obj->supplySample = (int) $v;
        }
        return $obj;
    }
}
