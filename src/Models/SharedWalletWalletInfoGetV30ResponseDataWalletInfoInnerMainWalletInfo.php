<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfo implements \JsonSerializable
{
    /**
     * 公司ID
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfoMainSharedRange
     */
    protected ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfoMainSharedRange $mainSharedRange = null;

    /**
     * 公司ID
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 公司ID
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfoMainSharedRange
     */
    public function getMainSharedRange(): ?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfoMainSharedRange
    {
        return $this->mainSharedRange;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfoMainSharedRange $mainSharedRange
     * @return self
     */
    public function setMainSharedRange(?\Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfoMainSharedRange $mainSharedRange): self
    {
        $this->mainSharedRange = $mainSharedRange;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->mainSharedRange !== null) {
            $result['main_shared_range'] = $this->mainSharedRange;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['main_shared_range'] ?? null) !== null && is_array($v)) {
            $obj->mainSharedRange = \Oceanengine\Models\SharedWalletWalletInfoGetV30ResponseDataWalletInfoInnerMainWalletInfoMainSharedRange::fromArray($v);
        }
        return $obj;
    }
}
