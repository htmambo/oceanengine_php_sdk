<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarInfoV2ResponseDataInfoListInnerSecondInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $industryId = null;

    /**
     * @var string
     */
    protected ?string $industryName = null;

    /**
     * @return int
     */
    public function getIndustryId(): ?int
    {
        return $this->industryId;
    }

    /**
     * @param int $industryId
     * @return self
     */
    public function setIndustryId(?int $industryId): self
    {
        $this->industryId = $industryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndustryName(): ?string
    {
        return $this->industryName;
    }

    /**
     * @param string $industryName
     * @return self
     */
    public function setIndustryName(?string $industryName): self
    {
        $this->industryName = $industryName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->industryId !== null) {
            $result['industry_id'] = $this->industryId;
        }
        if ($this->industryName !== null) {
            $result['industry_name'] = $this->industryName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['industry_id'] ?? null) !== null) {
            $obj->industryId = (int) $v;
        }
        if (($v = $data['industry_name'] ?? null) !== null) {
            $obj->industryName = (string) $v;
        }
        return $obj;
    }
}
