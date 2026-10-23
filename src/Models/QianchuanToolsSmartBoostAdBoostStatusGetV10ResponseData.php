<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsSmartBoostAdBoostStatusGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostStatusGetV10ResponseDataRaiseDetailsInner[]
     */
    protected ?array $raiseDetails = null;

    /**
     * @return \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostStatusGetV10ResponseDataRaiseDetailsInner[]
     */
    public function getRaiseDetails(): ?array
    {
        return $this->raiseDetails;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostStatusGetV10ResponseDataRaiseDetailsInner[] $raiseDetails
     * @return self
     */
    public function setRaiseDetails(?array $raiseDetails): self
    {
        $this->raiseDetails = $raiseDetails;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->raiseDetails !== null) {
            $result['raise_details'] = $this->raiseDetails;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['raise_details'] ?? null) !== null && is_array($v)) {
            $obj->raiseDetails = array_map(fn ($vv) => \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostStatusGetV10ResponseDataRaiseDetailsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
