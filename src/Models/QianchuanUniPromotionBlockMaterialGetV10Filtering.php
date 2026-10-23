<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionBlockMaterialGetV10Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType[]
     */
    protected ?array $analysisType = null;

    /**
     * @var string
     */
    protected ?string $awemeItemUrl = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType[]
     */
    public function getAnalysisType(): ?array
    {
        return $this->analysisType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionBlockMaterialGetV10FilteringAnalysisType[] $analysisType
     * @return self
     */
    public function setAnalysisType(?array $analysisType): self
    {
        $this->analysisType = $analysisType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeItemUrl(): ?string
    {
        return $this->awemeItemUrl;
    }

    /**
     * @param string $awemeItemUrl
     * @return self
     */
    public function setAwemeItemUrl(?string $awemeItemUrl): self
    {
        $this->awemeItemUrl = $awemeItemUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->analysisType !== null) {
            $result['analysis_type'] = $this->analysisType;
        }
        if ($this->awemeItemUrl !== null) {
            $result['aweme_item_url'] = $this->awemeItemUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['analysis_type'] ?? null) !== null && is_array($v)) {
            $obj->analysisType = $v;
        }
        if (($v = $data['aweme_item_url'] ?? null) !== null) {
            $obj->awemeItemUrl = (string) $v;
        }
        return $obj;
    }
}
