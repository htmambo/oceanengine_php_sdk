<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdQuotaGetV10ResponseDataQuotaSearchStageInfo implements \JsonSerializable
{
    /**
     * 投放初期截止日期
     * @var string
     */
    protected ?string $endDay = null;

    /**
     * 是否在投放初期,0：否,1：是
     * @var int
     */
    protected ?int $isPrimary = null;

    /**
     * 投放初期起始日期
     * @var string
     */
    protected ?string $startDay = null;

    /**
     * 投放初期截止日期
     * @return string
     */
    public function getEndDay(): ?string
    {
        return $this->endDay;
    }

    /**
     * 投放初期截止日期
     * @param string $endDay
     * @return self
     */
    public function setEndDay(?string $endDay): self
    {
        $this->endDay = $endDay;
        return $this;
    }

    /**
     * 是否在投放初期,0：否,1：是
     * @return int
     */
    public function getIsPrimary(): ?int
    {
        return $this->isPrimary;
    }

    /**
     * 是否在投放初期,0：否,1：是
     * @param int $isPrimary
     * @return self
     */
    public function setIsPrimary(?int $isPrimary): self
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * 投放初期起始日期
     * @return string
     */
    public function getStartDay(): ?string
    {
        return $this->startDay;
    }

    /**
     * 投放初期起始日期
     * @param string $startDay
     * @return self
     */
    public function setStartDay(?string $startDay): self
    {
        $this->startDay = $startDay;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->endDay !== null) {
            $result['end_day'] = $this->endDay;
        }
        if ($this->isPrimary !== null) {
            $result['is_primary'] = $this->isPrimary;
        }
        if ($this->startDay !== null) {
            $result['start_day'] = $this->startDay;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end_day'] ?? null) !== null) {
            $obj->endDay = (string) $v;
        }
        if (($v = $data['is_primary'] ?? null) !== null) {
            $obj->isPrimary = (int) $v;
        }
        if (($v = $data['start_day'] ?? null) !== null) {
            $obj->startDay = (string) $v;
        }
        return $obj;
    }
}
