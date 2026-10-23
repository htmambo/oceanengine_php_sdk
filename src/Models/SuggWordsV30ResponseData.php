<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SuggWordsV30ResponseData implements \JsonSerializable
{
    /**
     * 错误
     * @var array<string,mixed>
     */
    protected ?array $err = null;

    /**
     * @var \Oceanengine\Models\SuggWordsV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * 错误
     * @return array<string,mixed>
     */
    public function getErr(): ?array
    {
        return $this->err;
    }

    /**
     * 错误
     * @param array<string,mixed> $err
     * @return self
     */
    public function setErr(?array $err): self
    {
        $this->err = $err;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SuggWordsV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\SuggWordsV30ResponseDataListInner[] $list
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
        if ($this->err !== null) {
            $result['err'] = $this->err;
        }
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['err'] ?? null) !== null && is_array($v)) {
            $obj->err = $v;
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\SuggWordsV30ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
