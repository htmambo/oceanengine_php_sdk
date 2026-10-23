<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMicroGameConvertWindowGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsMicroGameConvertWindowGetV30DataConvertWindow
     */
    protected ?string $convertWindow = null;

    /**
     * @return \Oceanengine\Models\ToolsMicroGameConvertWindowGetV30DataConvertWindow
     */
    public function getConvertWindow(): ?string
    {
        return $this->convertWindow;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameConvertWindowGetV30DataConvertWindow $convertWindow
     * @return self
     */
    public function setConvertWindow(?string $convertWindow): self
    {
        $this->convertWindow = $convertWindow;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->convertWindow !== null) {
            $result['convert_window'] = $this->convertWindow;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['convert_window'] ?? null) !== null) {
            $obj->convertWindow = (string) $v;
        }
        return $obj;
    }
}
