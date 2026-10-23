<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserInfoQueryV2ResponseData implements \JsonSerializable
{
    /**
     * 广告主账户详情
     * @var \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInner[]
     */
    protected ?array $accountDetailList = null;

    /**
     * 广告主账户详情
     * @return \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInner[]
     */
    public function getAccountDetailList(): ?array
    {
        return $this->accountDetailList;
    }

    /**
     * 广告主账户详情
     * @param \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInner[] $accountDetailList
     * @return self
     */
    public function setAccountDetailList(?array $accountDetailList): self
    {
        $this->accountDetailList = $accountDetailList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountDetailList !== null) {
            $result['account_detail_list'] = $this->accountDetailList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->accountDetailList = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvertiserInfoQueryV2ResponseDataAccountDetailListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
