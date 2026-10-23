<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpPlayableUploadV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpPlayableUploadV30ResponseDataData
     */
    protected ?\Oceanengine\Models\ToolsEbpPlayableUploadV30ResponseDataData $data = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpPlayableUploadV30ResponseDataData
     */
    public function getData(): ?\Oceanengine\Models\ToolsEbpPlayableUploadV30ResponseDataData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpPlayableUploadV30ResponseDataData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\ToolsEbpPlayableUploadV30ResponseDataData $data): self
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
            $obj->data = \Oceanengine\Models\ToolsEbpPlayableUploadV30ResponseDataData::fromArray($v);
        }
        return $obj;
    }
}
