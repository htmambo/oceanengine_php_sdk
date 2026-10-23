<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarItemAuthorGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarItemAuthorGetV2ResponseDataItemInfosInner[]
     */
    protected ?array $itemInfos = null;

    /**
     * @return \Oceanengine\Models\StarItemAuthorGetV2ResponseDataItemInfosInner[]
     */
    public function getItemInfos(): ?array
    {
        return $this->itemInfos;
    }

    /**
     * @param \Oceanengine\Models\StarItemAuthorGetV2ResponseDataItemInfosInner[] $itemInfos
     * @return self
     */
    public function setItemInfos(?array $itemInfos): self
    {
        $this->itemInfos = $itemInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->itemInfos !== null) {
            $result['item_infos'] = $this->itemInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_infos'] ?? null) !== null && is_array($v)) {
            $obj->itemInfos = array_map(fn ($vv) => \Oceanengine\Models\StarItemAuthorGetV2ResponseDataItemInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
