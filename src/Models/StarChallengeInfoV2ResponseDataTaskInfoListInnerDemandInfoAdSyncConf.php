<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConf implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfDouPlus
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfDouPlus $douPlus = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfOceanEngine
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfOceanEngine $oceanEngine = null;

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfDouPlus
     */
    public function getDouPlus(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfDouPlus
    {
        return $this->douPlus;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfDouPlus $douPlus
     * @return self
     */
    public function setDouPlus(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfDouPlus $douPlus): self
    {
        $this->douPlus = $douPlus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfOceanEngine
     */
    public function getOceanEngine(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfOceanEngine
    {
        return $this->oceanEngine;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfOceanEngine $oceanEngine
     * @return self
     */
    public function setOceanEngine(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfOceanEngine $oceanEngine): self
    {
        $this->oceanEngine = $oceanEngine;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->douPlus !== null) {
            $result['dou_plus'] = $this->douPlus;
        }
        if ($this->oceanEngine !== null) {
            $result['ocean_engine'] = $this->oceanEngine;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['dou_plus'] ?? null) !== null && is_array($v)) {
            $obj->douPlus = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfDouPlus::fromArray($v);
        }
        if (($v = $data['ocean_engine'] ?? null) !== null && is_array($v)) {
            $obj->oceanEngine = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfOceanEngine::fromArray($v);
        }
        return $obj;
    }
}
