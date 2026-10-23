<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeAuthListGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInner[]
     */
    protected ?array $authorizationInfos = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInner[]
     */
    public function getAuthorizationInfos(): ?array
    {
        return $this->authorizationInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInner[] $authorizationInfos
     * @return self
     */
    public function setAuthorizationInfos(?array $authorizationInfos): self
    {
        $this->authorizationInfos = $authorizationInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataPageInfo $pageInfo): self
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
        if ($this->authorizationInfos !== null) {
            $result['authorization_infos'] = $this->authorizationInfos;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['authorization_infos'] ?? null) !== null && is_array($v)) {
            $obj->authorizationInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
