<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QualAccountListV2ResponseData implements \JsonSerializable
{
    /**
     * 账户列表
     * @var \Oceanengine\Models\QualAccountListV2ResponseDataUserAccountInfosInner[]
     */
    protected ?array $userAccountInfos = null;

    /**
     * 账户列表
     * @return \Oceanengine\Models\QualAccountListV2ResponseDataUserAccountInfosInner[]
     */
    public function getUserAccountInfos(): ?array
    {
        return $this->userAccountInfos;
    }

    /**
     * 账户列表
     * @param \Oceanengine\Models\QualAccountListV2ResponseDataUserAccountInfosInner[] $userAccountInfos
     * @return self
     */
    public function setUserAccountInfos(?array $userAccountInfos): self
    {
        $this->userAccountInfos = $userAccountInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->userAccountInfos !== null) {
            $result['user_account_infos'] = $this->userAccountInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['user_account_infos'] ?? null) !== null && is_array($v)) {
            $obj->userAccountInfos = array_map(fn ($vv) => \Oceanengine\Models\QualAccountListV2ResponseDataUserAccountInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
