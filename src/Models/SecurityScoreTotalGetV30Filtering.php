<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityScoreTotalGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SecurityScoreTotalGetV30FilteringIllegalType
     */
    protected ?string $illegalType = null;

    /**
     * 积分年度
     * @var string
     */
    protected ?string $year = null;

    /**
     * @return \Oceanengine\Models\SecurityScoreTotalGetV30FilteringIllegalType
     */
    public function getIllegalType(): ?string
    {
        return $this->illegalType;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreTotalGetV30FilteringIllegalType $illegalType
     * @return self
     */
    public function setIllegalType(?string $illegalType): self
    {
        $this->illegalType = $illegalType;
        return $this;
    }

    /**
     * 积分年度
     * @return string
     */
    public function getYear(): ?string
    {
        return $this->year;
    }

    /**
     * 积分年度
     * @param string $year
     * @return self
     */
    public function setYear(?string $year): self
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->illegalType !== null) {
            $result['illegal_type'] = $this->illegalType;
        }
        if ($this->year !== null) {
            $result['year'] = $this->year;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['illegal_type'] ?? null) !== null) {
            $obj->illegalType = (string) $v;
        }
        if (($v = $data['year'] ?? null) !== null) {
            $obj->year = (string) $v;
        }
        return $obj;
    }
}
