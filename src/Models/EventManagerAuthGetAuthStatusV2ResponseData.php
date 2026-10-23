<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAuthGetAuthStatusV2ResponseData implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $enabled = null;

    /**
     * @return bool
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->enabled !== null) {
            $result['enabled'] = $this->enabled;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['enabled'] ?? null) !== null) {
            $obj->enabled = (bool) $v;
        }
        return $obj;
    }
}
