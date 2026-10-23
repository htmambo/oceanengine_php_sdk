<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialAuthListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataAuthListInner[]
     */
    protected ?array $authList = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataPage
     */
    protected ?\Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataPage $page = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataAuthListInner[]
     */
    public function getAuthList(): ?array
    {
        return $this->authList;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataAuthListInner[] $authList
     * @return self
     */
    public function setAuthList(?array $authList): self
    {
        $this->authList = $authList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataPage
     */
    public function getPage(): ?\Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataPage
    {
        return $this->page;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataPage $page
     * @return self
     */
    public function setPage(?\Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataPage $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authList !== null) {
            $result['auth_list'] = $this->authList;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_list'] ?? null) !== null && is_array($v)) {
            $obj->authList = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataAuthListInner::fromArray($vv), $v);
        }
        if (($v = $data['page'] ?? null) !== null && is_array($v)) {
            $obj->page = \Oceanengine\Models\ToolsEbpMaterialAuthListV30ResponseDataPage::fromArray($v);
        }
        return $obj;
    }
}
