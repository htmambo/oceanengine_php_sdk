<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanTodayLiveRoomUserGetV10ResponseDataGenderInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $genderType = null;

    /**
     * @var int
     */
    protected ?int $value = null;

    /**
     * @return string
     */
    public function getGenderType(): ?string
    {
        return $this->genderType;
    }

    /**
     * @param string $genderType
     * @return self
     */
    public function setGenderType(?string $genderType): self
    {
        $this->genderType = $genderType;
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
        if ($this->genderType !== null) {
            $result['gender_type'] = $this->genderType;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['gender_type'] ?? null) !== null) {
            $obj->genderType = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (int) $v;
        }
        return $obj;
    }
}
