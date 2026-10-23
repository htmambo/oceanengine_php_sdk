<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandQueryYuntu5aBrandCategoryV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfo
     */
    protected ?\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfo $yuntu5aBrandCategoryInfo = null;

    /**
     * @return \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfo
     */
    public function getYuntu5aBrandCategoryInfo(): ?\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfo
    {
        return $this->yuntu5aBrandCategoryInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfo $yuntu5aBrandCategoryInfo
     * @return self
     */
    public function setYuntu5aBrandCategoryInfo(?\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfo $yuntu5aBrandCategoryInfo): self
    {
        $this->yuntu5aBrandCategoryInfo = $yuntu5aBrandCategoryInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->yuntu5aBrandCategoryInfo !== null) {
            $result['yuntu5a_brand_category_info'] = $this->yuntu5aBrandCategoryInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['yuntu5a_brand_category_info'] ?? null) !== null && is_array($v)) {
            $obj->yuntu5aBrandCategoryInfo = \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfo::fromArray($v);
        }
        return $obj;
    }
}
