<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewGetV2ResponseDataConvert implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $click = null;

    /**
     * @var int
     */
    protected ?int $ctr = null;

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
    public function getCtr(): ?int
    {
        return $this->ctr;
    }

    /**
     * @param int $ctr
     * @return self
     */
    public function setCtr(?int $ctr): self
    {
        $this->ctr = $ctr;
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
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
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
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (int) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        return $obj;
    }
}
