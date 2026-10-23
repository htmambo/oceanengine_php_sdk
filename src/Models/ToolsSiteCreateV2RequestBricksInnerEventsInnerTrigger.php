<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerEventsInnerTrigger implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $touchSeconds = null;

    /**
     * @var string
     */
    protected ?string $type = null;

    /**
     * @return int
     */
    public function getTouchSeconds(): ?int
    {
        return $this->touchSeconds;
    }

    /**
     * @param int $touchSeconds
     * @return self
     */
    public function setTouchSeconds(?int $touchSeconds): self
    {
        $this->touchSeconds = $touchSeconds;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->touchSeconds !== null) {
            $result['touch_seconds'] = $this->touchSeconds;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['touch_seconds'] ?? null) !== null) {
            $obj->touchSeconds = (int) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
