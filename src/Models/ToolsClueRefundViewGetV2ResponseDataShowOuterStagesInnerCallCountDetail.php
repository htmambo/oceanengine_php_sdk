<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerCallCountDetail implements \JsonSerializable
{
    /**
     * 已接通话单数
     * @var int
     */
    protected ?int $answered = null;

    /**
     * 不满足要求话单数
     * @var int
     */
    protected ?int $invalid = null;

    /**
     * 话单总数
     * @var int
     */
    protected ?int $total = null;

    /**
     * 满足要求话单数
     * @var int
     */
    protected ?int $valid = null;

    /**
     * 已接通话单数
     * @return int
     */
    public function getAnswered(): ?int
    {
        return $this->answered;
    }

    /**
     * 已接通话单数
     * @param int $answered
     * @return self
     */
    public function setAnswered(?int $answered): self
    {
        $this->answered = $answered;
        return $this;
    }

    /**
     * 不满足要求话单数
     * @return int
     */
    public function getInvalid(): ?int
    {
        return $this->invalid;
    }

    /**
     * 不满足要求话单数
     * @param int $invalid
     * @return self
     */
    public function setInvalid(?int $invalid): self
    {
        $this->invalid = $invalid;
        return $this;
    }

    /**
     * 话单总数
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * 话单总数
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * 满足要求话单数
     * @return int
     */
    public function getValid(): ?int
    {
        return $this->valid;
    }

    /**
     * 满足要求话单数
     * @param int $valid
     * @return self
     */
    public function setValid(?int $valid): self
    {
        $this->valid = $valid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->answered !== null) {
            $result['answered'] = $this->answered;
        }
        if ($this->invalid !== null) {
            $result['invalid'] = $this->invalid;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->valid !== null) {
            $result['valid'] = $this->valid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['answered'] ?? null) !== null) {
            $obj->answered = (int) $v;
        }
        if (($v = $data['invalid'] ?? null) !== null) {
            $obj->invalid = (int) $v;
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        if (($v = $data['valid'] ?? null) !== null) {
            $obj->valid = (int) $v;
        }
        return $obj;
    }
}
