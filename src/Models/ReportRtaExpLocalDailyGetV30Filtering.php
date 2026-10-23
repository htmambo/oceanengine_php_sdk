<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRtaExpLocalDailyGetV30Filtering implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $bidCoef = null;

    /**
     * @return string[]
     */
    public function getBidCoef(): ?array
    {
        return $this->bidCoef;
    }

    /**
     * @param string[] $bidCoef
     * @return self
     */
    public function setBidCoef(?array $bidCoef): self
    {
        $this->bidCoef = $bidCoef;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bidCoef !== null) {
            $result['bid_coef'] = $this->bidCoef;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid_coef'] ?? null) !== null && is_array($v)) {
            $obj->bidCoef = $v;
        }
        return $obj;
    }
}
