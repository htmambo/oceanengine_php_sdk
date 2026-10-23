<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatDataGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueWechatDataGetV2ResponseDataData
     */
    protected ?\Oceanengine\Models\ClueWechatDataGetV2ResponseDataData $data = null;

    /**
     * @return \Oceanengine\Models\ClueWechatDataGetV2ResponseDataData
     */
    public function getData(): ?\Oceanengine\Models\ClueWechatDataGetV2ResponseDataData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatDataGetV2ResponseDataData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\ClueWechatDataGetV2ResponseDataData $data): self
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
            $obj->data = \Oceanengine\Models\ClueWechatDataGetV2ResponseDataData::fromArray($v);
        }
        return $obj;
    }
}
