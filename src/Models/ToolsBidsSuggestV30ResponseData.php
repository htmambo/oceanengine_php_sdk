<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBidsSuggestV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsBidsSuggestV30ResponseDataData
     */
    protected ?\Oceanengine\Models\ToolsBidsSuggestV30ResponseDataData $data = null;

    /**
     * @return \Oceanengine\Models\ToolsBidsSuggestV30ResponseDataData
     */
    public function getData(): ?\Oceanengine\Models\ToolsBidsSuggestV30ResponseDataData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ToolsBidsSuggestV30ResponseDataData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\ToolsBidsSuggestV30ResponseDataData $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = \Oceanengine\Models\ToolsBidsSuggestV30ResponseDataData::fromArray($v);
        }
        return $obj;
    }
}
