<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdDetailV10ResponseDataAwemeInfosInner implements \JsonSerializable
{
    /**
     * 抖音号名称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * 抖音号ID
     * @var int
     */
    protected ?int $awemeUid = null;

    /**
     * 抖音号 UniqueId
     * @var string
     */
    protected ?string $uniqueId = null;

    /**
     * 抖音号名称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音号名称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * 抖音号ID
     * @return int
     */
    public function getAwemeUid(): ?int
    {
        return $this->awemeUid;
    }

    /**
     * 抖音号ID
     * @param int $awemeUid
     * @return self
     */
    public function setAwemeUid(?int $awemeUid): self
    {
        $this->awemeUid = $awemeUid;
        return $this;
    }

    /**
     * 抖音号 UniqueId
     * @return string
     */
    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    /**
     * 抖音号 UniqueId
     * @param string $uniqueId
     * @return self
     */
    public function setUniqueId(?string $uniqueId): self
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->awemeUid !== null) {
            $result['aweme_uid'] = $this->awemeUid;
        }
        if ($this->uniqueId !== null) {
            $result['unique_id'] = $this->uniqueId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['aweme_uid'] ?? null) !== null) {
            $obj->awemeUid = (int) $v;
        }
        if (($v = $data['unique_id'] ?? null) !== null) {
            $obj->uniqueId = (string) $v;
        }
        return $obj;
    }
}
