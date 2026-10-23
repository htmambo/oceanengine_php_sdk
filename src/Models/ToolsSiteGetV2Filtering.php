<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteGetV2Filtering implements \JsonSerializable
{
    /**
     * 搜索字段，按照建站id和建站name进行模糊匹配，范围：1 <= 长度 <= 50
     * @var string
     */
    protected ?string $search = null;

    /**
     * 搜索字段，按照建站id和建站name进行模糊匹配，范围：1 <= 长度 <= 50
     * @return string
     */
    public function getSearch(): ?string
    {
        return $this->search;
    }

    /**
     * 搜索字段，按照建站id和建站name进行模糊匹配，范围：1 <= 长度 <= 50
     * @param string $search
     * @return self
     */
    public function setSearch(?string $search): self
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->search !== null) {
            $result['search'] = $this->search;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['search'] ?? null) !== null) {
            $obj->search = (string) $v;
        }
        return $obj;
    }
}
