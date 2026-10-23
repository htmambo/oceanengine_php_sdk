<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerExtraItemInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $itemAuditUrl = null;

    /**
     * @return string
     */
    public function getItemAuditUrl(): ?string
    {
        return $this->itemAuditUrl;
    }

    /**
     * @param string $itemAuditUrl
     * @return self
     */
    public function setItemAuditUrl(?string $itemAuditUrl): self
    {
        $this->itemAuditUrl = $itemAuditUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->itemAuditUrl !== null) {
            $result['item_audit_url'] = $this->itemAuditUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_audit_url'] ?? null) !== null) {
            $obj->itemAuditUrl = (string) $v;
        }
        return $obj;
    }
}
