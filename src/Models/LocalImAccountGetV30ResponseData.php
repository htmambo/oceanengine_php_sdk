<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImAccountGetV30ResponseData implements \JsonSerializable
{
    /**
     * 账户信息数组
     * @var \Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInner[]
     */
    protected ?array $lifeAccountInfoList = null;

    /**
     * @var \Oceanengine\Models\LocalImAccountGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalImAccountGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 账户信息数组
     * @return \Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInner[]
     */
    public function getLifeAccountInfoList(): ?array
    {
        return $this->lifeAccountInfoList;
    }

    /**
     * 账户信息数组
     * @param \Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInner[] $lifeAccountInfoList
     * @return self
     */
    public function setLifeAccountInfoList(?array $lifeAccountInfoList): self
    {
        $this->lifeAccountInfoList = $lifeAccountInfoList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalImAccountGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalImAccountGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalImAccountGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalImAccountGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->lifeAccountInfoList !== null) {
            $result['life_account_info_list'] = $this->lifeAccountInfoList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['life_account_info_list'] ?? null) !== null && is_array($v)) {
            $obj->lifeAccountInfoList = array_map(fn ($vv) => \Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalImAccountGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
