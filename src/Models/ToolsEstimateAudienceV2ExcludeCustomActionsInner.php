<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEstimateAudienceV2ExcludeCustomActionsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $code = null;

    /**
     * @var int
     */
    protected ?int $days = null;

    /**
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getDays(): ?int
    {
        return $this->days;
    }

    /**
     * @param int $days
     * @return self
     */
    public function setDays(?int $days): self
    {
        $this->days = $days;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->days !== null) {
            $result['days'] = $this->days;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (int) $v;
        }
        if (($v = $data['days'] ?? null) !== null) {
            $obj->days = (int) $v;
        }
        return $obj;
    }
}
