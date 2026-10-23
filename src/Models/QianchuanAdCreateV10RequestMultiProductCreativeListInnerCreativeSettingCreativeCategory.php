<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCreateV10RequestMultiProductCreativeListInnerCreativeSettingCreativeCategory implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $firstCategoryId = null;

    /**
     * @var int
     */
    protected ?int $secondIndustryId = null;

    /**
     * @var int
     */
    protected ?int $thirdIndustryId = null;

    /**
     * @return int
     */
    public function getFirstCategoryId(): ?int
    {
        return $this->firstCategoryId;
    }

    /**
     * @param int $firstCategoryId
     * @return self
     */
    public function setFirstCategoryId(?int $firstCategoryId): self
    {
        $this->firstCategoryId = $firstCategoryId;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->firstCategoryId !== null) {
            $result['first_category_id'] = $this->firstCategoryId;
        }
        if ($this->secondIndustryId !== null) {
            $result['second_industry_id'] = $this->secondIndustryId;
        }
        if ($this->thirdIndustryId !== null) {
            $result['third_industry_id'] = $this->thirdIndustryId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['first_category_id'] ?? null) !== null) {
            $obj->firstCategoryId = (int) $v;
        }
        if (($v = $data['second_industry_id'] ?? null) !== null) {
            $obj->secondIndustryId = (int) $v;
        }
        if (($v = $data['third_industry_id'] ?? null) !== null) {
            $obj->thirdIndustryId = (int) $v;
        }
        return $obj;
    }
}
