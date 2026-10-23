<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInnerShowTimeDetails implements \JsonSerializable
{
    /**
     * 开始时间
     * @var int
     */
    protected ?int $beginTime = null;

    /**
     * 结束时间
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * 开始展示红色倒计时的时间，飞鱼SDK前端所需字段，传入即可
     * @var int
     */
    protected ?int $redLineTime = null;

    /**
     * 开始时间
     * @return int
     */
    public function getBeginTime(): ?int
    {
        return $this->beginTime;
    }

    /**
     * 开始时间
     * @param int $beginTime
     * @return self
     */
    public function setBeginTime(?int $beginTime): self
    {
        $this->beginTime = $beginTime;
        return $this;
    }

    /**
     * 结束时间
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * 结束时间
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 开始展示红色倒计时的时间，飞鱼SDK前端所需字段，传入即可
     * @return int
     */
    public function getRedLineTime(): ?int
    {
        return $this->redLineTime;
    }

    /**
     * 开始展示红色倒计时的时间，飞鱼SDK前端所需字段，传入即可
     * @param int $redLineTime
     * @return self
     */
    public function setRedLineTime(?int $redLineTime): self
    {
        $this->redLineTime = $redLineTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->beginTime !== null) {
            $result['begin_time'] = $this->beginTime;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->redLineTime !== null) {
            $result['red_line_time'] = $this->redLineTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['begin_time'] ?? null) !== null) {
            $obj->beginTime = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        if (($v = $data['red_line_time'] ?? null) !== null) {
            $obj->redLineTime = (int) $v;
        }
        return $obj;
    }
}
