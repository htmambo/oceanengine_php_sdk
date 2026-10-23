<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeMaterialMode
     */
    protected ?string $creativeMaterialMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerCreativeSetting
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerCreativeSetting $creativeSetting = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreative
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreative $programmaticCreative = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeMaterialMode
     */
    public function getCreativeMaterialMode(): ?string
    {
        return $this->creativeMaterialMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataMultiProductCreativeListCreativeMaterialMode $creativeMaterialMode
     * @return self
     */
    public function setCreativeMaterialMode(?string $creativeMaterialMode): self
    {
        $this->creativeMaterialMode = $creativeMaterialMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerCreativeSetting
     */
    public function getCreativeSetting(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerCreativeSetting
    {
        return $this->creativeSetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerCreativeSetting $creativeSetting
     * @return self
     */
    public function setCreativeSetting(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerCreativeSetting $creativeSetting): self
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreative
     */
    public function getProgrammaticCreative(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreative
    {
        return $this->programmaticCreative;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreative $programmaticCreative
     * @return self
     */
    public function setProgrammaticCreative(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreative $programmaticCreative): self
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
            $obj->creativeSetting = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerCreativeSetting::fromArray($v);
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['programmatic_creative'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreative = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreative::fromArray($v);
        }
        return $obj;
    }
}
