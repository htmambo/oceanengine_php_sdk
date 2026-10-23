<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdOverallMarketingUpdateV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInner[]
     */
    protected ?array $upgradeMsg = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInner[]
     */
    public function getUpgradeMsg(): ?array
    {
        return $this->upgradeMsg;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInner[] $upgradeMsg
     * @return self
     */
    public function setUpgradeMsg(?array $upgradeMsg): self
    {
        $this->upgradeMsg = $upgradeMsg;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->upgradeMsg !== null) {
            $result['upgrade_msg'] = $this->upgradeMsg;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['upgrade_msg'] ?? null) !== null && is_array($v)) {
            $obj->upgradeMsg = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10ResponseDataUpgradeMsgInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
