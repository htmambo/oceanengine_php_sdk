<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEstimateAudienceV2ResponseDataToutiao implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $num = null;

    /**
     * @var int
     */
    protected ?int $show = null;

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     * @return self
     */
    public function setNum(?int $num): self
    {
        $this->num = $num;
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
        if ($this->num !== null) {
            $result['num'] = $this->num;
        }
        if ($this->show !== null) {
            $result['show'] = $this->show;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['num'] ?? null) !== null) {
            $obj->num = (int) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        return $obj;
    }
}
