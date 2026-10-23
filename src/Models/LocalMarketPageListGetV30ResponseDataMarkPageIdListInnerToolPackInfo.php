<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalMarketPageListGetV30ResponseDataMarkPageIdListInnerToolPackInfo implements \JsonSerializable
{
    /**
     * 关联留资组件id
     * @var int
     */
    protected ?int $toolPackId = null;

    /**
     * 留资方式
     * @var \Oceanengine\Models\LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes[]
     */
    protected ?array $toolPackTypes = null;

    /**
     * 关联留资组件id
     * @return int
     */
    public function getToolPackId(): ?int
    {
        return $this->toolPackId;
    }

    /**
     * 关联留资组件id
     * @param int $toolPackId
     * @return self
     */
    public function setToolPackId(?int $toolPackId): self
    {
        $this->toolPackId = $toolPackId;
        return $this;
    }

    /**
     * 留资方式
     * @return \Oceanengine\Models\LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes[]
     */
    public function getToolPackTypes(): ?array
    {
        return $this->toolPackTypes;
    }

    /**
     * 留资方式
     * @param \Oceanengine\Models\LocalMarketPageListGetV30DataMarkPageIdListToolPackInfoToolPackTypes[] $toolPackTypes
     * @return self
     */
    public function setToolPackTypes(?array $toolPackTypes): self
    {
        $this->toolPackTypes = $toolPackTypes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->toolPackId !== null) {
            $result['tool_pack_id'] = $this->toolPackId;
        }
        if ($this->toolPackTypes !== null) {
            $result['tool_pack_types'] = $this->toolPackTypes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['tool_pack_id'] ?? null) !== null) {
            $obj->toolPackId = (int) $v;
        }
        if (($v = $data['tool_pack_types'] ?? null) !== null && is_array($v)) {
            $obj->toolPackTypes = $v;
        }
        return $obj;
    }
}
