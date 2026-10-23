<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductDeleteV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaEbpClueProductDeleteV30ResponseDataData
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductDeleteV30ResponseDataData $data = null;

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductDeleteV30ResponseDataData
     */
    public function getData(): ?\Oceanengine\Models\DpaEbpClueProductDeleteV30ResponseDataData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductDeleteV30ResponseDataData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\DpaEbpClueProductDeleteV30ResponseDataData $data): self
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
            $obj->data = \Oceanengine\Models\DpaEbpClueProductDeleteV30ResponseDataData::fromArray($v);
        }
        return $obj;
    }
}
