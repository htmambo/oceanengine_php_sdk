<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicVideoMixcutCreateV30RequestProductInfo implements \JsonSerializable
{
    /**
     * 利益点，总字数上限：100，示例：[七夕全场包邮，满300立减50] 字数14
     * @var string[]
     */
    protected ?array $benefitPoints = null;

    /**
     * 商品名，尽量简练，且需要包括商品主体，比如插座、空调等，字数上限：20 推荐输入：立白洗衣凝珠 不推荐输入：88rising龙年限定双龙刺绣麂皮绒摇粒绒
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 商品卖点，总字数上限：100，示例：[加大加厚，吸油锁水] 字数8
     * @var string[]
     */
    protected ?array $productSellingPoints = null;

    /**
     * 利益点，总字数上限：100，示例：[七夕全场包邮，满300立减50] 字数14
     * @return string[]
     */
    public function getBenefitPoints(): ?array
    {
        return $this->benefitPoints;
    }

    /**
     * 利益点，总字数上限：100，示例：[七夕全场包邮，满300立减50] 字数14
     * @param string[] $benefitPoints
     * @return self
     */
    public function setBenefitPoints(?array $benefitPoints): self
    {
        $this->benefitPoints = $benefitPoints;
        return $this;
    }

    /**
     * 商品名，尽量简练，且需要包括商品主体，比如插座、空调等，字数上限：20 推荐输入：立白洗衣凝珠 不推荐输入：88rising龙年限定双龙刺绣麂皮绒摇粒绒
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 商品名，尽量简练，且需要包括商品主体，比如插座、空调等，字数上限：20 推荐输入：立白洗衣凝珠 不推荐输入：88rising龙年限定双龙刺绣麂皮绒摇粒绒
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 商品卖点，总字数上限：100，示例：[加大加厚，吸油锁水] 字数8
     * @return string[]
     */
    public function getProductSellingPoints(): ?array
    {
        return $this->productSellingPoints;
    }

    /**
     * 商品卖点，总字数上限：100，示例：[加大加厚，吸油锁水] 字数8
     * @param string[] $productSellingPoints
     * @return self
     */
    public function setProductSellingPoints(?array $productSellingPoints): self
    {
        $this->productSellingPoints = $productSellingPoints;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->benefitPoints !== null) {
            $result['benefit_points'] = $this->benefitPoints;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->productSellingPoints !== null) {
            $result['product_selling_points'] = $this->productSellingPoints;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['benefit_points'] ?? null) !== null && is_array($v)) {
            $obj->benefitPoints = $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_selling_points'] ?? null) !== null && is_array($v)) {
            $obj->productSellingPoints = $v;
        }
        return $obj;
    }
}
