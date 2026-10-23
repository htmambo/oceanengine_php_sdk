<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseDataBaseStatsInnerConvertStat implements \JsonSerializable
{
    /**
     * 组件点击量
     * @var int
     */
    protected ?int $click = null;

    /**
     * 转化量
     * @var int
     */
    protected ?int $convertCnt = null;

    /**
     * 转化目标
     * @var int
     */
    protected ?int $convertType = null;

    /**
     * 点击率
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * 转化率
     * @var float
     */
    protected ?float $cvr = null;

    /**
     * 展现转化率
     * @var float
     */
    protected ?float $pvr = null;

    /**
     * 组件曝光
     * @var int
     */
    protected ?int $show = null;

    /**
     * 组件点击量
     * @return int
     */
    public function getClick(): ?int
    {
        return $this->click;
    }

    /**
     * 组件点击量
     * @param int $click
     * @return self
     */
    public function setClick(?int $click): self
    {
        $this->click = $click;
        return $this;
    }

    /**
     * 转化量
     * @return int
     */
    public function getConvertCnt(): ?int
    {
        return $this->convertCnt;
    }

    /**
     * 转化量
     * @param int $convertCnt
     * @return self
     */
    public function setConvertCnt(?int $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * 转化目标
     * @return int
     */
    public function getConvertType(): ?int
    {
        return $this->convertType;
    }

    /**
     * 转化目标
     * @param int $convertType
     * @return self
     */
    public function setConvertType(?int $convertType): self
    {
        $this->convertType = $convertType;
        return $this;
    }

    /**
     * 点击率
     * @return float
     */
    public function getCtr(): ?float
    {
        return $this->ctr;
    }

    /**
     * 点击率
     * @param float $ctr
     * @return self
     */
    public function setCtr(?float $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * 转化率
     * @return float
     */
    public function getCvr(): ?float
    {
        return $this->cvr;
    }

    /**
     * 转化率
     * @param float $cvr
     * @return self
     */
    public function setCvr(?float $cvr): self
    {
        $this->cvr = $cvr;
        return $this;
    }

    /**
     * 展现转化率
     * @return float
     */
    public function getPvr(): ?float
    {
        return $this->pvr;
    }

    /**
     * 展现转化率
     * @param float $pvr
     * @return self
     */
    public function setPvr(?float $pvr): self
    {
        $this->pvr = $pvr;
        return $this;
    }

    /**
     * 组件曝光
     * @return int
     */
    public function getShow(): ?int
    {
        return $this->show;
    }

    /**
     * 组件曝光
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
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->convertType !== null) {
            $result['convert_type'] = $this->convertType;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
        }
        if ($this->cvr !== null) {
            $result['cvr'] = $this->cvr;
        }
        if ($this->pvr !== null) {
            $result['pvr'] = $this->pvr;
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
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (int) $v;
        }
        if (($v = $data['convert_type'] ?? null) !== null) {
            $obj->convertType = (int) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['cvr'] ?? null) !== null) {
            $obj->cvr = (float) $v;
        }
        if (($v = $data['pvr'] ?? null) !== null) {
            $obj->pvr = (float) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        return $obj;
    }
}
