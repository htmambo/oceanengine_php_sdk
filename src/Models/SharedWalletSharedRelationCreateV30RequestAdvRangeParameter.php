<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletSharedRelationCreateV30RequestAdvRangeParameter implements \JsonSerializable
{
    /**
     * 账号id，上限1w
     * @var int[]
     */
    protected ?array $advIds = null;

    /**
     * 广告主公司列表，上限1，解绑时不支持
     * @var int[]
     */
    protected ?array $selfCompanyIds = null;

    /**
     * 账号id，上限1w
     * @return int[]
     */
    public function getAdvIds(): ?array
    {
        return $this->advIds;
    }

    /**
     * 账号id，上限1w
     * @param int[] $advIds
     * @return self
     */
    public function setAdvIds(?array $advIds): self
    {
        $this->advIds = $advIds;
        return $this;
    }

    /**
     * 广告主公司列表，上限1，解绑时不支持
     * @return int[]
     */
    public function getSelfCompanyIds(): ?array
    {
        return $this->selfCompanyIds;
    }

    /**
     * 广告主公司列表，上限1，解绑时不支持
     * @param int[] $selfCompanyIds
     * @return self
     */
    public function setSelfCompanyIds(?array $selfCompanyIds): self
    {
        $this->selfCompanyIds = $selfCompanyIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advIds !== null) {
            $result['adv_ids'] = $this->advIds;
        }
        if ($this->selfCompanyIds !== null) {
            $result['self_company_ids'] = $this->selfCompanyIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_ids'] ?? null) !== null && is_array($v)) {
            $obj->advIds = $v;
        }
        if (($v = $data['self_company_ids'] ?? null) !== null && is_array($v)) {
            $obj->selfCompanyIds = $v;
        }
        return $obj;
    }
}
