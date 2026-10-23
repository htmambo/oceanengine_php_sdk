<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAdvBindGroupGetV30ResponseDataGroupInfosInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $grooupName = null;

    /**
     * @var int
     */
    protected ?int $groupId = null;

    /**
     * @return string
     */
    public function getGrooupName(): ?string
    {
        return $this->grooupName;
    }

    /**
     * @param string $grooupName
     * @return self
     */
    public function setGrooupName(?string $grooupName): self
    {
        $this->grooupName = $grooupName;
        return $this;
    }

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
        if ($this->grooupName !== null) {
            $result['grooup_name'] = $this->grooupName;
        }
        if ($this->groupId !== null) {
            $result['group_id'] = $this->groupId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['grooup_name'] ?? null) !== null) {
            $obj->grooupName = (string) $v;
        }
        if (($v = $data['group_id'] ?? null) !== null) {
            $obj->groupId = (int) $v;
        }
        return $obj;
    }
}
