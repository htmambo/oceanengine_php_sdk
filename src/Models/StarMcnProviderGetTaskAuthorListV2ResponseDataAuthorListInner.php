<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorBaseInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorBaseInfo $authorBaseInfo = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorInvitaionInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorInvitaionInfo $authorInvitaionInfo = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorOrderInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorOrderInfo $authorOrderInfo = null;

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorBaseInfo
     */
    public function getAuthorBaseInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorBaseInfo
    {
        return $this->authorBaseInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorBaseInfo $authorBaseInfo
     * @return self
     */
    public function setAuthorBaseInfo(?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorBaseInfo $authorBaseInfo): self
    {
        $this->authorBaseInfo = $authorBaseInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorInvitaionInfo
     */
    public function getAuthorInvitaionInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorInvitaionInfo
    {
        return $this->authorInvitaionInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorInvitaionInfo $authorInvitaionInfo
     * @return self
     */
    public function setAuthorInvitaionInfo(?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorInvitaionInfo $authorInvitaionInfo): self
    {
        $this->authorInvitaionInfo = $authorInvitaionInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorOrderInfo
     */
    public function getAuthorOrderInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorOrderInfo
    {
        return $this->authorOrderInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorOrderInfo $authorOrderInfo
     * @return self
     */
    public function setAuthorOrderInfo(?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorOrderInfo $authorOrderInfo): self
    {
        $this->authorOrderInfo = $authorOrderInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorBaseInfo !== null) {
            $result['author_base_info'] = $this->authorBaseInfo;
        }
        if ($this->authorInvitaionInfo !== null) {
            $result['author_invitaion_info'] = $this->authorInvitaionInfo;
        }
        if ($this->authorOrderInfo !== null) {
            $result['author_order_info'] = $this->authorOrderInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_base_info'] ?? null) !== null && is_array($v)) {
            $obj->authorBaseInfo = \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorBaseInfo::fromArray($v);
        }
        if (($v = $data['author_invitaion_info'] ?? null) !== null && is_array($v)) {
            $obj->authorInvitaionInfo = \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorInvitaionInfo::fromArray($v);
        }
        if (($v = $data['author_order_info'] ?? null) !== null && is_array($v)) {
            $obj->authorOrderInfo = \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorOrderInfo::fromArray($v);
        }
        return $obj;
    }
}
