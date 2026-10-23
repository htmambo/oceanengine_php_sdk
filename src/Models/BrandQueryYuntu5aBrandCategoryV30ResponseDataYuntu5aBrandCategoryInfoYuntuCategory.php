<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategory implements \JsonSerializable
{
    /**
     * 一级行业分类集合
     * @var \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategoryFirstCategoryDataInner[]
     */
    protected ?array $firstCategoryData = null;

    /**
     * 二级行业分类集合
     * @var array<string,\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategorySecondCategoryDataValueInner[]>
     */
    protected ?array $secondCategoryData = null;

    /**
     * 三级级行业分类集合
     * @var array<string,\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategoryThirdCategoryDataValueInner[]>
     */
    protected ?array $thirdCategoryData = null;

    /**
     * 一级行业分类集合
     * @return \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategoryFirstCategoryDataInner[]
     */
    public function getFirstCategoryData(): ?array
    {
        return $this->firstCategoryData;
    }

    /**
     * 一级行业分类集合
     * @param \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategoryFirstCategoryDataInner[] $firstCategoryData
     * @return self
     */
    public function setFirstCategoryData(?array $firstCategoryData): self
    {
        $this->firstCategoryData = $firstCategoryData;
        return $this;
    }

    /**
     * 二级行业分类集合
     * @return array<string,\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategorySecondCategoryDataValueInner[]>
     */
    public function getSecondCategoryData(): ?array
    {
        return $this->secondCategoryData;
    }

    /**
     * 二级行业分类集合
     * @param array<string,\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategorySecondCategoryDataValueInner[]> $secondCategoryData
     * @return self
     */
    public function setSecondCategoryData(?array $secondCategoryData): self
    {
        $this->secondCategoryData = $secondCategoryData;
        return $this;
    }

    /**
     * 三级级行业分类集合
     * @return array<string,\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategoryThirdCategoryDataValueInner[]>
     */
    public function getThirdCategoryData(): ?array
    {
        return $this->thirdCategoryData;
    }

    /**
     * 三级级行业分类集合
     * @param array<string,\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategoryThirdCategoryDataValueInner[]> $thirdCategoryData
     * @return self
     */
    public function setThirdCategoryData(?array $thirdCategoryData): self
    {
        $this->thirdCategoryData = $thirdCategoryData;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->firstCategoryData !== null) {
            $result['first_category_data'] = $this->firstCategoryData;
        }
        if ($this->secondCategoryData !== null) {
            $result['second_category_data'] = $this->secondCategoryData;
        }
        if ($this->thirdCategoryData !== null) {
            $result['third_category_data'] = $this->thirdCategoryData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['first_category_data'] ?? null) !== null && is_array($v)) {
            $obj->firstCategoryData = array_map(fn ($vv) => \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategoryFirstCategoryDataInner::fromArray($vv), $v);
        }
        if (($v = $data['second_category_data'] ?? null) !== null && is_array($v)) {
            $obj->secondCategoryData = $v;
        }
        if (($v = $data['third_category_data'] ?? null) !== null && is_array($v)) {
            $obj->thirdCategoryData = $v;
        }
        return $obj;
    }
}
