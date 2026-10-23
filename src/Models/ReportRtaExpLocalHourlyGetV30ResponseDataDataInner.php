<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRtaExpLocalHourlyGetV30ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $click = null;

    /**
     * @var int
     */
    protected ?int $convert = null;

    /**
     * @var float
     */
    protected ?float $cost = null;

    /**
     * @var int
     */
    protected ?int $cusVid = null;

    /**
     * @var string
     */
    protected ?string $date = null;

    /**
     * @var int
     */
    protected ?int $show = null;

    /**
     * @var int
     */
    protected ?int $vid = null;

    /**
     * @return int
     */
    public function getClick(): ?int
    {
        return $this->click;
    }

    /**
     * @param int $click
     * @return self
     */
    public function setClick(?int $click): self
    {
        $this->click = $click;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvert(): ?int
    {
        return $this->convert;
    }

    /**
     * @param int $convert
     * @return self
     */
    public function setConvert(?int $convert): self
    {
        $this->convert = $convert;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return int
     */
    public function getCusVid(): ?int
    {
        return $this->cusVid;
    }

    /**
     * @param int $cusVid
     * @return self
     */
    public function setCusVid(?int $cusVid): self
    {
        $this->cusVid = $cusVid;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return int
     */
    public function getShow(): ?int
    {
        return $this->show;
    }

    /**
     * @param int $show
     * @return self
     */
    public function setShow(?int $show): self
    {
        $this->show = $show;
        return $this;
    }

    /**
     * @return int
     */
    public function getVid(): ?int
    {
        return $this->vid;
    }

    /**
     * @param int $vid
     * @return self
     */
    public function setVid(?int $vid): self
    {
        $this->vid = $vid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->click !== null) {
            $result['click'] = $this->click;
        }
        if ($this->convert !== null) {
            $result['convert'] = $this->convert;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->cusVid !== null) {
            $result['cus_vid'] = $this->cusVid;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->show !== null) {
            $result['show'] = $this->show;
        }
        if ($this->vid !== null) {
            $result['vid'] = $this->vid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['click'] ?? null) !== null) {
            $obj->click = (int) $v;
        }
        if (($v = $data['convert'] ?? null) !== null) {
            $obj->convert = (int) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['cus_vid'] ?? null) !== null) {
            $obj->cusVid = (int) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        if (($v = $data['vid'] ?? null) !== null) {
            $obj->vid = (int) $v;
        }
        return $obj;
    }
}
