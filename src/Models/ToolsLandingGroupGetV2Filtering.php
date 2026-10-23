<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupGetV2Filtering implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $groupId = null;

    /**
     * @return int
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     * @return self
     */
    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['group_id'] ?? null) !== null) {
            $obj->groupId = (int) $v;
        }
        return $obj;
    }
}
