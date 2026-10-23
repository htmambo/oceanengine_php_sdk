<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewGetV2ResponseDataCostEffectiveness implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $cpm = null;

    /**
     * @var int
     */
    protected ?int $play = null;

    /**
     * @var int
     */
    protected ?int $price = null;

    /**
     * @return int
     */
    public function getCpm(): ?int
    {
        return $this->cpm;
    }

    /**
     * @param int $cpm
     * @return self
     */
    public function setCpm(?int $cpm): self
    {
        $this->cpm = $cpm;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlay(): ?int
    {
        return $this->play;
    }

    /**
     * @param int $play
     * @return self
     */
    public function setPlay(?int $play): self
    {
        $this->play = $play;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return self
     */
    public function setPrice(?int $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cpm !== null) {
            $result['cpm'] = $this->cpm;
        }
        if ($this->play !== null) {
            $result['play'] = $this->play;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cpm'] ?? null) !== null) {
            $obj->cpm = (int) $v;
        }
        if (($v = $data['play'] ?? null) !== null) {
            $obj->play = (int) $v;
        }
        if (($v = $data['price'] ?? null) !== null) {
            $obj->price = (int) $v;
        }
        return $obj;
    }
}
