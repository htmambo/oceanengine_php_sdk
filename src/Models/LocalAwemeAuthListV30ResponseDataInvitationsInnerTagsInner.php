<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAwemeAuthListV30ResponseDataInvitationsInnerTagsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType
     */
    protected ?string $pageRecordTagType = null;

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType
     */
    public function getPageRecordTagType(): ?string
    {
        return $this->pageRecordTagType;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType $pageRecordTagType
     * @return self
     */
    public function setPageRecordTagType(?string $pageRecordTagType): self
    {
        $this->pageRecordTagType = $pageRecordTagType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageRecordTagType !== null) {
            $result['page_record_tag_type'] = $this->pageRecordTagType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_record_tag_type'] ?? null) !== null) {
            $obj->pageRecordTagType = (string) $v;
        }
        return $obj;
    }
}
