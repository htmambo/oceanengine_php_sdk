<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusRtaGetInfoV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataInterface
     */
    protected ?\Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataInterface $interface = null;

    /**
     * @var \Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataRtaListInner[]
     */
    protected ?array $rtaList = null;

    /**
     * @var int
     */
    protected ?int $total = null;

    /**
     * @return \Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataInterface
     */
    public function getInterface(): ?\Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataInterface
    {
        return $this->interface;
    }

    /**
     * @param \Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataInterface $interface
     * @return self
     */
    public function setInterface(?\Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataInterface $interface): self
    {
        $this->interface = $interface;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataRtaListInner[]
     */
    public function getRtaList(): ?array
    {
        return $this->rtaList;
    }

    /**
     * @param \Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataRtaListInner[] $rtaList
     * @return self
     */
    public function setRtaList(?array $rtaList): self
    {
        $this->rtaList = $rtaList;
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
        if ($this->interface !== null) {
            $result['interface'] = $this->interface;
        }
        if ($this->rtaList !== null) {
            $result['rta_list'] = $this->rtaList;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['interface'] ?? null) !== null && is_array($v)) {
            $obj->interface = \Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataInterface::fromArray($v);
        }
        if (($v = $data['rta_list'] ?? null) !== null && is_array($v)) {
            $obj->rtaList = array_map(fn ($vv) => \Oceanengine\Models\DouplusRtaGetInfoV30ResponseDataRtaListInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
