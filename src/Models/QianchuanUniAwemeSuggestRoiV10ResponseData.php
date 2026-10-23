<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeSuggestRoiV10ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $ecpRoi2Goal = null;

    /**
     * @return float
     */
    public function getEcpRoi2Goal(): ?float
    {
        return $this->ecpRoi2Goal;
    }

    /**
     * @param float $ecpRoi2Goal
     * @return self
     */
    public function setEcpRoi2Goal(?float $ecpRoi2Goal): self
    {
        $this->ecpRoi2Goal = $ecpRoi2Goal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ecpRoi2Goal !== null) {
            $result['ecp_roi2_goal'] = $this->ecpRoi2Goal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ecp_roi2_goal'] ?? null) !== null) {
            $obj->ecpRoi2Goal = (float) $v;
        }
        return $obj;
    }
}
