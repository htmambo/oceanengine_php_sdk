<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsKeywordsBidRatioCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30ResponseDataConflictInner[]
     */
    protected ?array $conflict = null;

    /**
     * @return \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30ResponseDataConflictInner[]
     */
    public function getConflict(): ?array
    {
        return $this->conflict;
    }

    /**
     * @param \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30ResponseDataConflictInner[] $conflict
     * @return self
     */
    public function setConflict(?array $conflict): self
    {
        $this->conflict = $conflict;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->conflict !== null) {
            $result['conflict'] = $this->conflict;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['conflict'] ?? null) !== null && is_array($v)) {
            $obj->conflict = array_map(fn ($vv) => \Oceanengine\Models\ToolsKeywordsBidRatioCreateV30ResponseDataConflictInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
