<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdPreviewQrcodeGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAdPreviewQrcodeGetV30ResponseDataData
     */
    protected ?\Oceanengine\Models\ToolsAdPreviewQrcodeGetV30ResponseDataData $data = null;

    /**
     * @return \Oceanengine\Models\ToolsAdPreviewQrcodeGetV30ResponseDataData
     */
    public function getData(): ?\Oceanengine\Models\ToolsAdPreviewQrcodeGetV30ResponseDataData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdPreviewQrcodeGetV30ResponseDataData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\ToolsAdPreviewQrcodeGetV30ResponseDataData $data): self
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
            $obj->data = \Oceanengine\Models\ToolsAdPreviewQrcodeGetV30ResponseDataData::fromArray($v);
        }
        return $obj;
    }
}
