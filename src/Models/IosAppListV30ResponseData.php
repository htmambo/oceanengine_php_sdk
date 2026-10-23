<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class IosAppListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\IosAppListV30ResponseDataAppListInner[]
     */
    protected ?array $appList = null;

    /**
     * @var int
     */
    protected ?int $total = null;

    /**
     * @return \Oceanengine\Models\IosAppListV30ResponseDataAppListInner[]
     */
    public function getAppList(): ?array
    {
        return $this->appList;
    }

    /**
     * @param \Oceanengine\Models\IosAppListV30ResponseDataAppListInner[] $appList
     * @return self
     */
    public function setAppList(?array $appList): self
    {
        $this->appList = $appList;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appList !== null) {
            $result['app_list'] = $this->appList;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_list'] ?? null) !== null && is_array($v)) {
            $obj->appList = array_map(fn ($vv) => \Oceanengine\Models\IosAppListV30ResponseDataAppListInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
