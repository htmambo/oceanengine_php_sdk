<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSearchBidRatioGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $ratio = null;

    /**
     * @return float
     */
    public function getRatio(): ?float
    {
        return $this->ratio;
    }

    /**
     * @param float $ratio
     * @return self
     */
    public function setRatio(?float $ratio): self
    {
        $this->ratio = $ratio;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ratio !== null) {
            $result['ratio'] = $this->ratio;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ratio'] ?? null) !== null) {
            $obj->ratio = (float) $v;
        }
        return $obj;
    }
}
