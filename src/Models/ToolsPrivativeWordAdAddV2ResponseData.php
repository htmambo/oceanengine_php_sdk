<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordAdAddV2ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adErrorList = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInner[]
     */
    protected ?array $adList = null;

    /**
     * @return int[]
     */
    public function getAdErrorList(): ?array
    {
        return $this->adErrorList;
    }

    /**
     * @param int[] $adErrorList
     * @return self
     */
    public function setAdErrorList(?array $adErrorList): self
    {
        $this->adErrorList = $adErrorList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInner[]
     */
    public function getAdList(): ?array
    {
        return $this->adList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInner[] $adList
     * @return self
     */
    public function setAdList(?array $adList): self
    {
        $this->adList = $adList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adErrorList !== null) {
            $result['ad_error_list'] = $this->adErrorList;
        }
        if ($this->adList !== null) {
            $result['ad_list'] = $this->adList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_error_list'] ?? null) !== null && is_array($v)) {
            $obj->adErrorList = $v;
        }
        if (($v = $data['ad_list'] ?? null) !== null && is_array($v)) {
            $obj->adList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordAdAddV2ResponseDataAdListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
