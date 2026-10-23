<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConf implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus
     */
    protected ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus $douPlus = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion
     */
    protected ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion $localPromotion = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine
     */
    protected ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine $oceanEngine = null;

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus
     */
    public function getDouPlus(): ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus
    {
        return $this->douPlus;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus $douPlus
     * @return self
     */
    public function setDouPlus(?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus $douPlus): self
    {
        $this->douPlus = $douPlus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion
     */
    public function getLocalPromotion(): ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion
    {
        return $this->localPromotion;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion $localPromotion
     * @return self
     */
    public function setLocalPromotion(?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion $localPromotion): self
    {
        $this->localPromotion = $localPromotion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine
     */
    public function getOceanEngine(): ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine
    {
        return $this->oceanEngine;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine $oceanEngine
     * @return self
     */
    public function setOceanEngine(?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine $oceanEngine): self
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
        if ($this->localPromotion !== null) {
            $result['local_promotion'] = $this->localPromotion;
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
            $obj->douPlus = \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus::fromArray($v);
        }
        if (($v = $data['local_promotion'] ?? null) !== null && is_array($v)) {
            $obj->localPromotion = \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion::fromArray($v);
        }
        if (($v = $data['ocean_engine'] ?? null) !== null && is_array($v)) {
            $obj->oceanEngine = \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine::fromArray($v);
        }
        return $obj;
    }
}
