<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfoAuthorListInnerMktApiAuthorOrderCustomizedItem implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $customCategory = null;

    /**
     * @var int
     */
    protected ?int $customSubCategory = null;

    /**
     * @var string
     */
    protected ?string $customUserDefinedSubCategoryName = null;

    /**
     * @return int
     */
    public function getCustomCategory(): ?int
    {
        return $this->customCategory;
    }

    /**
     * @param int $customCategory
     * @return self
     */
    public function setCustomCategory(?int $customCategory): self
    {
        $this->customCategory = $customCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomSubCategory(): ?int
    {
        return $this->customSubCategory;
    }

    /**
     * @param int $customSubCategory
     * @return self
     */
    public function setCustomSubCategory(?int $customSubCategory): self
    {
        $this->customSubCategory = $customSubCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomUserDefinedSubCategoryName(): ?string
    {
        return $this->customUserDefinedSubCategoryName;
    }

    /**
     * @param string $customUserDefinedSubCategoryName
     * @return self
     */
    public function setCustomUserDefinedSubCategoryName(?string $customUserDefinedSubCategoryName): self
    {
        $this->customUserDefinedSubCategoryName = $customUserDefinedSubCategoryName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->customCategory !== null) {
            $result['custom_category'] = $this->customCategory;
        }
        if ($this->customSubCategory !== null) {
            $result['custom_sub_category'] = $this->customSubCategory;
        }
        if ($this->customUserDefinedSubCategoryName !== null) {
            $result['custom_user_defined_sub_category_name'] = $this->customUserDefinedSubCategoryName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['custom_category'] ?? null) !== null) {
            $obj->customCategory = (int) $v;
        }
        if (($v = $data['custom_sub_category'] ?? null) !== null) {
            $obj->customSubCategory = (int) $v;
        }
        if (($v = $data['custom_user_defined_sub_category_name'] ?? null) !== null) {
            $obj->customUserDefinedSubCategoryName = (string) $v;
        }
        return $obj;
    }
}
