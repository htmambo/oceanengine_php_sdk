<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsIndustryGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var int
     */
    protected ?int $firstIndustryId = null;

    /**
     * @var string
     */
    protected ?string $firstIndustryName = null;

    /**
     * @var int
     */
    protected ?int $industryId = null;

    /**
     * @var string
     */
    protected ?string $industryName = null;

    /**
     * @var int
     */
    protected ?int $level = null;

    /**
     * @var int
     */
    protected ?int $secondIndustryId = null;

    /**
     * @var string
     */
    protected ?string $secondIndustryName = null;

    /**
     * @var int
     */
    protected ?int $thirdIndustryId = null;

    /**
     * @var string
     */
    protected ?string $thirdIndustryName = null;

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstIndustryId(): ?int
    {
        return $this->firstIndustryId;
    }

    /**
     * @param int $firstIndustryId
     * @return self
     */
    public function setFirstIndustryId(?int $firstIndustryId): self
    {
        $this->firstIndustryId = $firstIndustryId;
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
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return self
     */
    public function setLevel(?int $level): self
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecondIndustryId(): ?int
    {
        return $this->secondIndustryId;
    }

    /**
     * @param int $secondIndustryId
     * @return self
     */
    public function setSecondIndustryId(?int $secondIndustryId): self
    {
        $this->secondIndustryId = $secondIndustryId;
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
     * @return int
     */
    public function getThirdIndustryId(): ?int
    {
        return $this->thirdIndustryId;
    }

    /**
     * @param int $thirdIndustryId
     * @return self
     */
    public function setThirdIndustryId(?int $thirdIndustryId): self
    {
        $this->thirdIndustryId = $thirdIndustryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdIndustryName(): ?string
    {
        return $this->thirdIndustryName;
    }

    /**
     * @param string $thirdIndustryName
     * @return self
     */
    public function setThirdIndustryName(?string $thirdIndustryName): self
    {
        $this->thirdIndustryName = $thirdIndustryName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->firstIndustryId !== null) {
            $result['first_industry_id'] = $this->firstIndustryId;
        }
        if ($this->firstIndustryName !== null) {
            $result['first_industry_name'] = $this->firstIndustryName;
        }
        if ($this->industryId !== null) {
            $result['industry_id'] = $this->industryId;
        }
        if ($this->industryName !== null) {
            $result['industry_name'] = $this->industryName;
        }
        if ($this->level !== null) {
            $result['level'] = $this->level;
        }
        if ($this->secondIndustryId !== null) {
            $result['second_industry_id'] = $this->secondIndustryId;
        }
        if ($this->secondIndustryName !== null) {
            $result['second_industry_name'] = $this->secondIndustryName;
        }
        if ($this->thirdIndustryId !== null) {
            $result['third_industry_id'] = $this->thirdIndustryId;
        }
        if ($this->thirdIndustryName !== null) {
            $result['third_industry_name'] = $this->thirdIndustryName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['first_industry_id'] ?? null) !== null) {
            $obj->firstIndustryId = (int) $v;
        }
        if (($v = $data['first_industry_name'] ?? null) !== null) {
            $obj->firstIndustryName = (string) $v;
        }
        if (($v = $data['industry_id'] ?? null) !== null) {
            $obj->industryId = (int) $v;
        }
        if (($v = $data['industry_name'] ?? null) !== null) {
            $obj->industryName = (string) $v;
        }
        if (($v = $data['level'] ?? null) !== null) {
            $obj->level = (int) $v;
        }
        if (($v = $data['second_industry_id'] ?? null) !== null) {
            $obj->secondIndustryId = (int) $v;
        }
        if (($v = $data['second_industry_name'] ?? null) !== null) {
            $obj->secondIndustryName = (string) $v;
        }
        if (($v = $data['third_industry_id'] ?? null) !== null) {
            $obj->thirdIndustryId = (int) $v;
        }
        if (($v = $data['third_industry_name'] ?? null) !== null) {
            $obj->thirdIndustryName = (string) $v;
        }
        return $obj;
    }
}
