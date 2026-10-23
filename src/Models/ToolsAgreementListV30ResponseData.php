<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAgreementListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAgreementListV30ResponseDataAgreementsInner[]
     */
    protected ?array $agreements = null;

    /**
     * @return \Oceanengine\Models\ToolsAgreementListV30ResponseDataAgreementsInner[]
     */
    public function getAgreements(): ?array
    {
        return $this->agreements;
    }

    /**
     * @param \Oceanengine\Models\ToolsAgreementListV30ResponseDataAgreementsInner[] $agreements
     * @return self
     */
    public function setAgreements(?array $agreements): self
    {
        $this->agreements = $agreements;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->agreements !== null) {
            $result['agreements'] = $this->agreements;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agreements'] ?? null) !== null && is_array($v)) {
            $obj->agreements = array_map(fn ($vv) => \Oceanengine\Models\ToolsAgreementListV30ResponseDataAgreementsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
