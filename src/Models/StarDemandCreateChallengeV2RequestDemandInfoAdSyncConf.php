<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestDemandInfoAdSyncConf implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus $douPlus = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion $localPromotion = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine $oceanEngine = null;

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus
     */
    public function getDouPlus(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus
    {
        return $this->douPlus;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus $douPlus
     * @return self
     */
    public function setDouPlus(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus $douPlus): self
    {
        $this->douPlus = $douPlus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion
     */
    public function getLocalPromotion(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion
    {
        return $this->localPromotion;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion $localPromotion
     * @return self
     */
    public function setLocalPromotion(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion $localPromotion): self
    {
        $this->localPromotion = $localPromotion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine
     */
    public function getOceanEngine(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine
    {
        return $this->oceanEngine;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine $oceanEngine
     * @return self
     */
    public function setOceanEngine(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine $oceanEngine): self
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
            $obj->douPlus = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus::fromArray($v);
        }
        if (($v = $data['local_promotion'] ?? null) !== null && is_array($v)) {
            $obj->localPromotion = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfLocalPromotion::fromArray($v);
        }
        if (($v = $data['ocean_engine'] ?? null) !== null && is_array($v)) {
            $obj->oceanEngine = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConfOceanEngine::fromArray($v);
        }
        return $obj;
    }
}
