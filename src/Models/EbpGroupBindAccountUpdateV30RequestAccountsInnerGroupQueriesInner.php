<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountUpdateV30RequestAccountsInnerGroupQueriesInner implements \JsonSerializable
{
    /**
     * 全选的组织ID
     * @var int
     */
    protected ?int $groupId = null;

    /**
     * @var \Oceanengine\Models\EbpGroupBindAccountUpdateV30AccountsGroupQueriesQueryType
     */
    protected ?string $queryType = null;

    /**
     * 全选的组织ID
     * @return int
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * 全选的组织ID
     * @param int $groupId
     * @return self
     */
    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpGroupBindAccountUpdateV30AccountsGroupQueriesQueryType
     */
    public function getQueryType(): ?string
    {
        return $this->queryType;
    }

    /**
     * @param \Oceanengine\Models\EbpGroupBindAccountUpdateV30AccountsGroupQueriesQueryType $queryType
     * @return self
     */
    public function setQueryType(?string $queryType): self
    {
        $this->queryType = $queryType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->groupId !== null) {
            $result['group_id'] = $this->groupId;
        }
        if ($this->queryType !== null) {
            $result['query_type'] = $this->queryType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['group_id'] ?? null) !== null) {
            $obj->groupId = (int) $v;
        }
        if (($v = $data['query_type'] ?? null) !== null) {
            $obj->queryType = (string) $v;
        }
        return $obj;
    }
}
