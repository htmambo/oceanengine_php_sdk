<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementIndustryInfoListV2ResponseData implements \JsonSerializable
{
    /**
     * 应用分类及题材标签信息
     * @var \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInner[]
     */
    protected ?array $industries = null;

    /**
     * 应用分类及题材标签信息
     * @return \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInner[]
     */
    public function getIndustries(): ?array
    {
        return $this->industries;
    }

    /**
     * 应用分类及题材标签信息
     * @param \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInner[] $industries
     * @return self
     */
    public function setIndustries(?array $industries): self
    {
        $this->industries = $industries;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->industries !== null) {
            $result['industries'] = $this->industries;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['industries'] ?? null) !== null && is_array($v)) {
            $obj->industries = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
