<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppGameBookListV30FilteringScheduledPublishTime implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $end = null;

    /**
     * @var string
     */
    protected ?string $start = null;

    /**
     * @return string
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }

    /**
     * @param string $end
     * @return self
     */
    public function setEnd(?string $end): self
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return string
     */
    public function getStart(): ?string
    {
        return $this->start;
    }

    /**
     * @param string $start
     * @return self
     */
    public function setStart(?string $start): self
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->end !== null) {
            $result['end'] = $this->end;
        }
        if ($this->start !== null) {
            $result['start'] = $this->start;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['end'] ?? null) !== null) {
            $obj->end = (string) $v;
        }
        if (($v = $data['start'] ?? null) !== null) {
            $obj->start = (string) $v;
        }
        return $obj;
    }
}
