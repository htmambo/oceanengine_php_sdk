<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserPublicInfoV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $company = null;

    /**
     * @var string
     */
    protected ?string $firstIndustryName = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $secondIndustryName = null;

    /**
     * @return string
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return self
     */
    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstIndustryName(): ?string
    {
        return $this->firstIndustryName;
    }

    /**
     * @param string $firstIndustryName
     * @return self
     */
    public function setFirstIndustryName(?string $firstIndustryName): self
    {
        $this->firstIndustryName = $firstIndustryName;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondIndustryName(): ?string
    {
        return $this->secondIndustryName;
    }

    /**
     * @param string $secondIndustryName
     * @return self
     */
    public function setSecondIndustryName(?string $secondIndustryName): self
    {
        $this->secondIndustryName = $secondIndustryName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->company !== null) {
            $result['company'] = $this->company;
        }
        if ($this->firstIndustryName !== null) {
            $result['first_industry_name'] = $this->firstIndustryName;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->secondIndustryName !== null) {
            $result['second_industry_name'] = $this->secondIndustryName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['company'] ?? null) !== null) {
            $obj->company = (string) $v;
        }
        if (($v = $data['first_industry_name'] ?? null) !== null) {
            $obj->firstIndustryName = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['second_industry_name'] ?? null) !== null) {
            $obj->secondIndustryName = (string) $v;
        }
        return $obj;
    }
}
