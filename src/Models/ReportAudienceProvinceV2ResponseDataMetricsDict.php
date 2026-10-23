<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAudienceProvinceV2ResponseDataMetricsDict implements \JsonSerializable
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
    protected ?int $downloadFinish = null;

    /**
     * @var int
     */
    protected ?int $show = null;

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
    public function getDownloadFinish(): ?int
    {
        return $this->downloadFinish;
    }

    /**
     * @param int $downloadFinish
     * @return self
     */
    public function setDownloadFinish(?int $downloadFinish): self
    {
        $this->downloadFinish = $downloadFinish;
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
        if ($this->downloadFinish !== null) {
            $result['download_finish'] = $this->downloadFinish;
        }
        if ($this->show !== null) {
            $result['show'] = $this->show;
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
        if (($v = $data['download_finish'] ?? null) !== null) {
            $obj->downloadFinish = (int) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        return $obj;
    }
}
