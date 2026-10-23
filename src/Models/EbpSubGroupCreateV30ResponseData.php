<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpSubGroupCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 创建成功则有groupId返回
     * @var int
     */
    protected ?int $groupId = null;

    /**
     * 创建成功则有groupId返回
     * @return int
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * 创建成功则有groupId返回
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
