<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectWeekScheduleUpdateV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30RequestDataInner[]
     */
    protected ?array $data = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @return \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30RequestDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30RequestDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30RequestDataInner::fromArray($vv), $v);
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        return $obj;
    }
}
