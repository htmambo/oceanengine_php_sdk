<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetCancelAmountV2ResponseData implements \JsonSerializable
{
    /**
     * 赔付金额（元）
     * @var int
     */
    protected ?int $cost = null;

    /**
     * 赔付描述
     * @var string
     */
    protected ?string $desc = null;

    /**
     * 精确赔付金额（元）
     * @var float
     */
    protected ?float $preciseCost = null;

    /**
     * 赔付金额（元）
     * @return int
     */
    public function getCost(): ?int
    {
        return $this->cost;
    }

    /**
     * 赔付金额（元）
     * @param int $cost
     * @return self
     */
    public function setCost(?int $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * 赔付描述
     * @return string
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * 赔付描述
     * @param string $desc
     * @return self
     */
    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * 精确赔付金额（元）
     * @return float
     */
    public function getPreciseCost(): ?float
    {
        return $this->preciseCost;
    }

    /**
     * 精确赔付金额（元）
     * @param float $preciseCost
     * @return self
     */
    public function setPreciseCost(?float $preciseCost): self
    {
        $this->preciseCost = $preciseCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->desc !== null) {
            $result['desc'] = $this->desc;
        }
        if ($this->preciseCost !== null) {
            $result['precise_cost'] = $this->preciseCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (int) $v;
        }
        if (($v = $data['desc'] ?? null) !== null) {
            $obj->desc = (string) $v;
        }
        if (($v = $data['precise_cost'] ?? null) !== null) {
            $obj->preciseCost = (float) $v;
        }
        return $obj;
    }
}
