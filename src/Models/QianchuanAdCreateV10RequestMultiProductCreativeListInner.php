<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCreateV10RequestMultiProductCreativeListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10MultiProductCreativeListCreativeMaterialMode
     */
    protected ?string $creativeMaterialMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerCreativeSetting
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerCreativeSetting $creativeSetting = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreative
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreative $programmaticCreative = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10MultiProductCreativeListCreativeMaterialMode
     */
    public function getCreativeMaterialMode(): ?string
    {
        return $this->creativeMaterialMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10MultiProductCreativeListCreativeMaterialMode $creativeMaterialMode
     * @return self
     */
    public function setCreativeMaterialMode(?string $creativeMaterialMode): self
    {
        $this->creativeMaterialMode = $creativeMaterialMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerCreativeSetting
     */
    public function getCreativeSetting(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerCreativeSetting
    {
        return $this->creativeSetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerCreativeSetting $creativeSetting
     * @return self
     */
    public function setCreativeSetting(?\Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerCreativeSetting $creativeSetting): self
    {
        $this->creativeSetting = $creativeSetting;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreative
     */
    public function getProgrammaticCreative(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreative
    {
        return $this->programmaticCreative;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreative $programmaticCreative
     * @return self
     */
    public function setProgrammaticCreative(?\Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreative $programmaticCreative): self
    {
        $this->programmaticCreative = $programmaticCreative;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeMaterialMode !== null) {
            $result['creative_material_mode'] = $this->creativeMaterialMode;
        }
        if ($this->creativeSetting !== null) {
            $result['creative_setting'] = $this->creativeSetting;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->programmaticCreative !== null) {
            $result['programmatic_creative'] = $this->programmaticCreative;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_material_mode'] ?? null) !== null) {
            $obj->creativeMaterialMode = (string) $v;
        }
        if (($v = $data['creative_setting'] ?? null) !== null && is_array($v)) {
            $obj->creativeSetting = \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerCreativeSetting::fromArray($v);
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['programmatic_creative'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreative = \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreative::fromArray($v);
        }
        return $obj;
    }
}
