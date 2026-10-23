<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileImageAdGetV2ResponseData implements \JsonSerializable
{
    /**
     * json返回值
     * @var \Oceanengine\Models\FileImageAdGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * json返回值
     * @return \Oceanengine\Models\FileImageAdGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * json返回值
     * @param \Oceanengine\Models\FileImageAdGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\FileImageAdGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
