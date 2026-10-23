<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanTodayLiveRoomUserGetV10ResponseDataAgeInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $ageType = null;

    /**
     * @var int
     */
    protected ?int $value = null;

    /**
     * @return string
     */
    public function getAgeType(): ?string
    {
        return $this->ageType;
    }

    /**
     * @param string $ageType
     * @return self
     */
    public function setAgeType(?string $ageType): self
    {
        $this->ageType = $ageType;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return self
     */
    public function setValue(?int $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ageType !== null) {
            $result['age_type'] = $this->ageType;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age_type'] ?? null) !== null) {
            $obj->ageType = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (int) $v;
        }
        return $obj;
    }
}
