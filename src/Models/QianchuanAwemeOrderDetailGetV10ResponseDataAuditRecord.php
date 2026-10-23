<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderDetailGetV10ResponseDataAuditRecord implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $detailDescList = null;

    /**
     * @var string
     */
    protected ?string $statusAttachDesp = null;

    /**
     * @return string[]
     */
    public function getDetailDescList(): ?array
    {
        return $this->detailDescList;
    }

    /**
     * @param string[] $detailDescList
     * @return self
     */
    public function setDetailDescList(?array $detailDescList): self
    {
        $this->detailDescList = $detailDescList;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusAttachDesp(): ?string
    {
        return $this->statusAttachDesp;
    }

    /**
     * @param string $statusAttachDesp
     * @return self
     */
    public function setStatusAttachDesp(?string $statusAttachDesp): self
    {
        $this->statusAttachDesp = $statusAttachDesp;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->detailDescList !== null) {
            $result['detail_desc_list'] = $this->detailDescList;
        }
        if ($this->statusAttachDesp !== null) {
            $result['status_attach_desp'] = $this->statusAttachDesp;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['detail_desc_list'] ?? null) !== null && is_array($v)) {
            $obj->detailDescList = $v;
        }
        if (($v = $data['status_attach_desp'] ?? null) !== null) {
            $obj->statusAttachDesp = (string) $v;
        }
        return $obj;
    }
}
