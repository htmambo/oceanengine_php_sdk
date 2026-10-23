<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsWechatGameCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsWechatGameCreateV30ResponseDataData
     */
    protected ?\Oceanengine\Models\ToolsWechatGameCreateV30ResponseDataData $data = null;

    /**
     * @return \Oceanengine\Models\ToolsWechatGameCreateV30ResponseDataData
     */
    public function getData(): ?\Oceanengine\Models\ToolsWechatGameCreateV30ResponseDataData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameCreateV30ResponseDataData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\ToolsWechatGameCreateV30ResponseDataData $data): self
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
            $obj->data = \Oceanengine\Models\ToolsWechatGameCreateV30ResponseDataData::fromArray($v);
        }
        return $obj;
    }
}
