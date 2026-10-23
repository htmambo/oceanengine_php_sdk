<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductListV2ResponseDataProductsInnerCategory implements \JsonSerializable
{
    /**
     * 一级类目ID
     * @var int
     */
    protected ?int $firstCategoryId = null;

    /**
     * 一级类目名称
     * @var string
     */
    protected ?string $firstCategoryName = null;

    /**
     * 四级类目ID
     * @var int
     */
    protected ?int $fourthCategoryId = null;

    /**
     * 四级类目名称
     * @var string
     */
    protected ?string $fourthCategoryName = null;

    /**
     * 二级类目ID
     * @var int
     */
    protected ?int $secondCategoryId = null;

    /**
     * 二级类目名称
     * @var string
     */
    protected ?string $secondCategoryName = null;

    /**
     * 三级类目ID
     * @var int
     */
    protected ?int $thirdCategoryId = null;

    /**
     * 三级类目名称
     * @var string
     */
    protected ?string $thirdCategoryName = null;

    /**
     * 一级类目ID
     * @return int
     */
    public function getFirstCategoryId(): ?int
    {
        return $this->firstCategoryId;
    }

    /**
     * 一级类目ID
     * @param int $firstCategoryId
     * @return self
     */
    public function setFirstCategoryId(?int $firstCategoryId): self
    {
        $this->firstCategoryId = $firstCategoryId;
        return $this;
    }

    /**
     * 一级类目名称
     * @return string
     */
    public function getFirstCategoryName(): ?string
    {
        return $this->firstCategoryName;
    }

    /**
     * 一级类目名称
     * @param string $firstCategoryName
     * @return self
     */
    public function setFirstCategoryName(?string $firstCategoryName): self
    {
        $this->firstCategoryName = $firstCategoryName;
        return $this;
    }

    /**
     * 四级类目ID
     * @return int
     */
    public function getFourthCategoryId(): ?int
    {
        return $this->fourthCategoryId;
    }

    /**
     * 四级类目ID
     * @param int $fourthCategoryId
     * @return self
     */
    public function setFourthCategoryId(?int $fourthCategoryId): self
    {
        $this->fourthCategoryId = $fourthCategoryId;
        return $this;
    }

    /**
     * 四级类目名称
     * @return string
     */
    public function getFourthCategoryName(): ?string
    {
        return $this->fourthCategoryName;
    }

    /**
     * 四级类目名称
     * @param string $fourthCategoryName
     * @return self
     */
    public function setFourthCategoryName(?string $fourthCategoryName): self
    {
        $this->fourthCategoryName = $fourthCategoryName;
        return $this;
    }

    /**
     * 二级类目ID
     * @return int
     */
    public function getSecondCategoryId(): ?int
    {
        return $this->secondCategoryId;
    }

    /**
     * 二级类目ID
     * @param int $secondCategoryId
     * @return self
     */
    public function setSecondCategoryId(?int $secondCategoryId): self
    {
        $this->secondCategoryId = $secondCategoryId;
        return $this;
    }

    /**
     * 二级类目名称
     * @return string
     */
    public function getSecondCategoryName(): ?string
    {
        return $this->secondCategoryName;
    }

    /**
     * 二级类目名称
     * @param string $secondCategoryName
     * @return self
     */
    public function setSecondCategoryName(?string $secondCategoryName): self
    {
        $this->secondCategoryName = $secondCategoryName;
        return $this;
    }

    /**
     * 三级类目ID
     * @return int
     */
    public function getThirdCategoryId(): ?int
    {
        return $this->thirdCategoryId;
    }

    /**
     * 三级类目ID
     * @param int $thirdCategoryId
     * @return self
     */
    public function setThirdCategoryId(?int $thirdCategoryId): self
    {
        $this->thirdCategoryId = $thirdCategoryId;
        return $this;
    }

    /**
     * 三级类目名称
     * @return string
     */
    public function getThirdCategoryName(): ?string
    {
        return $this->thirdCategoryName;
    }

    /**
     * 三级类目名称
     * @param string $thirdCategoryName
     * @return self
     */
    public function setThirdCategoryName(?string $thirdCategoryName): self
    {
        $this->thirdCategoryName = $thirdCategoryName;
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
        if ($this->firstCategoryName !== null) {
            $result['first_category_name'] = $this->firstCategoryName;
        }
        if ($this->fourthCategoryId !== null) {
            $result['fourth_category_id'] = $this->fourthCategoryId;
        }
        if ($this->fourthCategoryName !== null) {
            $result['fourth_category_name'] = $this->fourthCategoryName;
        }
        if ($this->secondCategoryId !== null) {
            $result['second_category_id'] = $this->secondCategoryId;
        }
        if ($this->secondCategoryName !== null) {
            $result['second_category_name'] = $this->secondCategoryName;
        }
        if ($this->thirdCategoryId !== null) {
            $result['third_category_id'] = $this->thirdCategoryId;
        }
        if ($this->thirdCategoryName !== null) {
            $result['third_category_name'] = $this->thirdCategoryName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['first_category_id'] ?? null) !== null) {
            $obj->firstCategoryId = (int) $v;
        }
        if (($v = $data['first_category_name'] ?? null) !== null) {
            $obj->firstCategoryName = (string) $v;
        }
        if (($v = $data['fourth_category_id'] ?? null) !== null) {
            $obj->fourthCategoryId = (int) $v;
        }
        if (($v = $data['fourth_category_name'] ?? null) !== null) {
            $obj->fourthCategoryName = (string) $v;
        }
        if (($v = $data['second_category_id'] ?? null) !== null) {
            $obj->secondCategoryId = (int) $v;
        }
        if (($v = $data['second_category_name'] ?? null) !== null) {
            $obj->secondCategoryName = (string) $v;
        }
        if (($v = $data['third_category_id'] ?? null) !== null) {
            $obj->thirdCategoryId = (int) $v;
        }
        if (($v = $data['third_category_name'] ?? null) !== null) {
            $obj->thirdCategoryName = (string) $v;
        }
        return $obj;
    }
}
