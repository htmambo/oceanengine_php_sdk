<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalToolPackDetailV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalToolPackDetailV30ResponseDataToolPackInfo
     */
    protected ?\Oceanengine\Models\LocalToolPackDetailV30ResponseDataToolPackInfo $toolPackInfo = null;

    /**
     * @return \Oceanengine\Models\LocalToolPackDetailV30ResponseDataToolPackInfo
     */
    public function getToolPackInfo(): ?\Oceanengine\Models\LocalToolPackDetailV30ResponseDataToolPackInfo
    {
        return $this->toolPackInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalToolPackDetailV30ResponseDataToolPackInfo $toolPackInfo
     * @return self
     */
    public function setToolPackInfo(?\Oceanengine\Models\LocalToolPackDetailV30ResponseDataToolPackInfo $toolPackInfo): self
    {
        $this->toolPackInfo = $toolPackInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->toolPackInfo !== null) {
            $result['tool_pack_info'] = $this->toolPackInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['tool_pack_info'] ?? null) !== null && is_array($v)) {
            $obj->toolPackInfo = \Oceanengine\Models\LocalToolPackDetailV30ResponseDataToolPackInfo::fromArray($v);
        }
        return $obj;
    }
}
