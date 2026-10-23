<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsEstimateAudienceV10ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $crowdCoverTotal = null;

    /**
     * @var int
     */
    protected ?int $showCntTotal = null;

    /**
     * @return int
     */
    public function getCrowdCoverTotal(): ?int
    {
        return $this->crowdCoverTotal;
    }

    /**
     * @param int $crowdCoverTotal
     * @return self
     */
    public function setCrowdCoverTotal(?int $crowdCoverTotal): self
    {
        $this->crowdCoverTotal = $crowdCoverTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getShowCntTotal(): ?int
    {
        return $this->showCntTotal;
    }

    /**
     * @param int $showCntTotal
     * @return self
     */
    public function setShowCntTotal(?int $showCntTotal): self
    {
        $this->showCntTotal = $showCntTotal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->crowdCoverTotal !== null) {
            $result['crowd_cover_total'] = $this->crowdCoverTotal;
        }
        if ($this->showCntTotal !== null) {
            $result['show_cnt_total'] = $this->showCntTotal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['crowd_cover_total'] ?? null) !== null) {
            $obj->crowdCoverTotal = (int) $v;
        }
        if (($v = $data['show_cnt_total'] ?? null) !== null) {
            $obj->showCntTotal = (int) $v;
        }
        return $obj;
    }
}
