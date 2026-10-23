<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAssetAuthListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataAuthorizationsInner[]
     */
    protected ?array $authorizations = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataPage
     */
    protected ?\Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataPage $page = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataAuthorizationsInner[]
     */
    public function getAuthorizations(): ?array
    {
        return $this->authorizations;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataAuthorizationsInner[] $authorizations
     * @return self
     */
    public function setAuthorizations(?array $authorizations): self
    {
        $this->authorizations = $authorizations;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataPage
     */
    public function getPage(): ?\Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataPage
    {
        return $this->page;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataPage $page
     * @return self
     */
    public function setPage(?\Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataPage $page): self
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
        if ($this->authorizations !== null) {
            $result['authorizations'] = $this->authorizations;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['authorizations'] ?? null) !== null && is_array($v)) {
            $obj->authorizations = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataAuthorizationsInner::fromArray($vv), $v);
        }
        if (($v = $data['page'] ?? null) !== null && is_array($v)) {
            $obj->page = \Oceanengine\Models\ToolsEbpAssetAuthListV30ResponseDataPage::fromArray($v);
        }
        return $obj;
    }
}
