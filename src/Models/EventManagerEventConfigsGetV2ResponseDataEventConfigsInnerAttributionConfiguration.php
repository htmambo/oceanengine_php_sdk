<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerEventConfigsGetV2ResponseDataEventConfigsInnerAttributionConfiguration implements \JsonSerializable
{
    /**
     * 归因窗口
     * @var int
     */
    protected ?int $attributionWindow = null;

    /**
     * 归因窗口
     * @return int
     */
    public function getAttributionWindow(): ?int
    {
        return $this->attributionWindow;
    }

    /**
     * 归因窗口
     * @param int $attributionWindow
     * @return self
     */
    public function setAttributionWindow(?int $attributionWindow): self
    {
        $this->attributionWindow = $attributionWindow;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attributionWindow !== null) {
            $result['attribution_window'] = $this->attributionWindow;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attribution_window'] ?? null) !== null) {
            $obj->attributionWindow = (int) $v;
        }
        return $obj;
    }
}
