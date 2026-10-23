<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRtaScopeGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var array<string,mixed>[]
     */
    protected ?array $list = null;

    /**
     * @return array<string,mixed>[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param array<string,mixed>[] $list
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
            $obj->list = $v;
        }
        return $obj;
    }
}
