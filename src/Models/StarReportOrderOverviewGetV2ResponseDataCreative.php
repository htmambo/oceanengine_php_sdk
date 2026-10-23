<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewGetV2ResponseDataCreative implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $finishRate = null;

    /**
     * @var int
     */
    protected ?int $fiveSPlayRate = null;

    /**
     * @var int
     */
    protected ?int $playRate = null;

    /**
     * @return int
     */
    public function getFinishRate(): ?int
    {
        return $this->finishRate;
    }

    /**
     * @param int $finishRate
     * @return self
     */
    public function setFinishRate(?int $finishRate): self
    {
        $this->finishRate = $finishRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getFiveSPlayRate(): ?int
    {
        return $this->fiveSPlayRate;
    }

    /**
     * @param int $fiveSPlayRate
     * @return self
     */
    public function setFiveSPlayRate(?int $fiveSPlayRate): self
    {
        $this->fiveSPlayRate = $fiveSPlayRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayRate(): ?int
    {
        return $this->playRate;
    }

    /**
     * @param int $playRate
     * @return self
     */
    public function setPlayRate(?int $playRate): self
    {
        $this->playRate = $playRate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->finishRate !== null) {
            $result['finish_rate'] = $this->finishRate;
        }
        if ($this->fiveSPlayRate !== null) {
            $result['five_s_play_rate'] = $this->fiveSPlayRate;
        }
        if ($this->playRate !== null) {
            $result['play_rate'] = $this->playRate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['finish_rate'] ?? null) !== null) {
            $obj->finishRate = (int) $v;
        }
        if (($v = $data['five_s_play_rate'] ?? null) !== null) {
            $obj->fiveSPlayRate = (int) $v;
        }
        if (($v = $data['play_rate'] ?? null) !== null) {
            $obj->playRate = (int) $v;
        }
        return $obj;
    }
}
