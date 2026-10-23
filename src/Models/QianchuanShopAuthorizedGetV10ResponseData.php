<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanShopAuthorizedGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataShopListInner[]
     */
    protected ?array $shopList = null;

    /**
     * @return \Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataShopListInner[]
     */
    public function getShopList(): ?array
    {
        return $this->shopList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataShopListInner[] $shopList
     * @return self
     */
    public function setShopList(?array $shopList): self
    {
        $this->shopList = $shopList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->shopList !== null) {
            $result['shop_list'] = $this->shopList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['shop_list'] ?? null) !== null && is_array($v)) {
            $obj->shopList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanShopAuthorizedGetV10ResponseDataShopListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
