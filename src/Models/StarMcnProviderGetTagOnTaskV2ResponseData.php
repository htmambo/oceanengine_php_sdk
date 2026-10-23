<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTagOnTaskV2ResponseData implements \JsonSerializable
{
    /**
     * 按照类型返回任务上的Tag
     * @var array<string,\Oceanengine\Models\StarMcnProviderGetTagOnTaskV2ResponseDataTagMapValueInner[]>
     */
    protected ?array $tagMap = null;

    /**
     * 按照类型返回任务上的Tag
     * @return array<string,\Oceanengine\Models\StarMcnProviderGetTagOnTaskV2ResponseDataTagMapValueInner[]>
     */
    public function getTagMap(): ?array
    {
        return $this->tagMap;
    }

    /**
     * 按照类型返回任务上的Tag
     * @param array<string,\Oceanengine\Models\StarMcnProviderGetTagOnTaskV2ResponseDataTagMapValueInner[]> $tagMap
     * @return self
     */
    public function setTagMap(?array $tagMap): self
    {
        $this->tagMap = $tagMap;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->tagMap !== null) {
            $result['tag_map'] = $this->tagMap;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['tag_map'] ?? null) !== null && is_array($v)) {
            $obj->tagMap = $v;
        }
        return $obj;
    }
}
