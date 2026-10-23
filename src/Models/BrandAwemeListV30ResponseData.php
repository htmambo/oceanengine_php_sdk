<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAwemeListV30ResponseData implements \JsonSerializable
{
    /**
     * 抖音号列表
     * @var \Oceanengine\Models\BrandAwemeListV30ResponseDataAwemeUserInfoListInner[]
     */
    protected ?array $awemeUserInfoList = null;

    /**
     * 抖音号列表
     * @return \Oceanengine\Models\BrandAwemeListV30ResponseDataAwemeUserInfoListInner[]
     */
    public function getAwemeUserInfoList(): ?array
    {
        return $this->awemeUserInfoList;
    }

    /**
     * 抖音号列表
     * @param \Oceanengine\Models\BrandAwemeListV30ResponseDataAwemeUserInfoListInner[] $awemeUserInfoList
     * @return self
     */
    public function setAwemeUserInfoList(?array $awemeUserInfoList): self
    {
        $this->awemeUserInfoList = $awemeUserInfoList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeUserInfoList !== null) {
            $result['aweme_user_info_list'] = $this->awemeUserInfoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_user_info_list'] ?? null) !== null && is_array($v)) {
            $obj->awemeUserInfoList = array_map(fn ($vv) => \Oceanengine\Models\BrandAwemeListV30ResponseDataAwemeUserInfoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
