<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanShopAdvertiserListV10ResponseDataAdvIdListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advId = null;

    /**
     * @var string
     */
    protected ?string $advName = null;

    /**
     * @var string[]
     */
    protected ?array $extraPermission = null;

    /**
     * @return int
     */
    public function getAdvId(): ?int
    {
        return $this->advId;
    }

    /**
     * @param int $advId
     * @return self
     */
    public function setAdvId(?int $advId): self
    {
        $this->advId = $advId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvName(): ?string
    {
        return $this->advName;
    }

    /**
     * @param string $advName
     * @return self
     */
    public function setAdvName(?string $advName): self
    {
        $this->advName = $advName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getExtraPermission(): ?array
    {
        return $this->extraPermission;
    }

    /**
     * @param string[] $extraPermission
     * @return self
     */
    public function setExtraPermission(?array $extraPermission): self
    {
        $this->extraPermission = $extraPermission;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advId !== null) {
            $result['adv_id'] = $this->advId;
        }
        if ($this->advName !== null) {
            $result['adv_name'] = $this->advName;
        }
        if ($this->extraPermission !== null) {
            $result['extra_permission'] = $this->extraPermission;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_id'] ?? null) !== null) {
            $obj->advId = (int) $v;
        }
        if (($v = $data['adv_name'] ?? null) !== null) {
            $obj->advName = (string) $v;
        }
        if (($v = $data['extra_permission'] ?? null) !== null && is_array($v)) {
            $obj->extraPermission = $v;
        }
        return $obj;
    }
}
