<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInnerFailInfoListInner implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $failDateList = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @return string[]
     */
    public function getFailDateList(): ?array
    {
        return $this->failDateList;
    }

    /**
     * @param string[] $failDateList
     * @return self
     */
    public function setFailDateList(?array $failDateList): self
    {
        $this->failDateList = $failDateList;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failDateList !== null) {
            $result['fail_date_list'] = $this->failDateList;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_date_list'] ?? null) !== null && is_array($v)) {
            $obj->failDateList = $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        return $obj;
    }
}
