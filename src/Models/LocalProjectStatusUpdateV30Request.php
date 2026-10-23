<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectStatusUpdateV30Request implements \JsonSerializable
{
    /**
     * 一次性最多处理50个项目
     * @var \Oceanengine\Models\LocalProjectStatusUpdateV30RequestDataInner[]
     */
    protected ?array $data = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 一次性最多处理50个项目
     * @return \Oceanengine\Models\LocalProjectStatusUpdateV30RequestDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 一次性最多处理50个项目
     * @param \Oceanengine\Models\LocalProjectStatusUpdateV30RequestDataInner[] $data
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
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\LocalProjectStatusUpdateV30RequestDataInner::fromArray($vv), $v);
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        return $obj;
    }
}
