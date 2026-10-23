<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2RequestDemandInfoAdSyncConf implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfContentMarketing
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfContentMarketing $contentMarketing = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfDouPlus
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfDouPlus $douPlus = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfEcomShop
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfEcomShop $ecomShop = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfLocalPromotion
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfLocalPromotion $localPromotion = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfOceanEngine
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfOceanEngine $oceanEngine = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfQianchuan
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfQianchuan $qianchuan = null;

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfContentMarketing
     */
    public function getContentMarketing(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfContentMarketing
    {
        return $this->contentMarketing;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfContentMarketing $contentMarketing
     * @return self
     */
    public function setContentMarketing(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfContentMarketing $contentMarketing): self
    {
        $this->contentMarketing = $contentMarketing;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfDouPlus
     */
    public function getDouPlus(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfDouPlus
    {
        return $this->douPlus;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfDouPlus $douPlus
     * @return self
     */
    public function setDouPlus(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfDouPlus $douPlus): self
    {
        $this->douPlus = $douPlus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfEcomShop
     */
    public function getEcomShop(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfEcomShop
    {
        return $this->ecomShop;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfEcomShop $ecomShop
     * @return self
     */
    public function setEcomShop(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfEcomShop $ecomShop): self
    {
        $this->ecomShop = $ecomShop;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfLocalPromotion
     */
    public function getLocalPromotion(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfLocalPromotion
    {
        return $this->localPromotion;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfLocalPromotion $localPromotion
     * @return self
     */
    public function setLocalPromotion(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfLocalPromotion $localPromotion): self
    {
        $this->localPromotion = $localPromotion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfOceanEngine
     */
    public function getOceanEngine(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfOceanEngine
    {
        return $this->oceanEngine;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfOceanEngine $oceanEngine
     * @return self
     */
    public function setOceanEngine(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfOceanEngine $oceanEngine): self
    {
        $this->oceanEngine = $oceanEngine;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfQianchuan
     */
    public function getQianchuan(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfQianchuan
    {
        return $this->qianchuan;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfQianchuan $qianchuan
     * @return self
     */
    public function setQianchuan(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfQianchuan $qianchuan): self
    {
        $this->qianchuan = $qianchuan;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contentMarketing !== null) {
            $result['content_marketing'] = $this->contentMarketing;
        }
        if ($this->douPlus !== null) {
            $result['dou_plus'] = $this->douPlus;
        }
        if ($this->ecomShop !== null) {
            $result['ecom_shop'] = $this->ecomShop;
        }
        if ($this->localPromotion !== null) {
            $result['local_promotion'] = $this->localPromotion;
        }
        if ($this->oceanEngine !== null) {
            $result['ocean_engine'] = $this->oceanEngine;
        }
        if ($this->qianchuan !== null) {
            $result['qianchuan'] = $this->qianchuan;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content_marketing'] ?? null) !== null && is_array($v)) {
            $obj->contentMarketing = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfContentMarketing::fromArray($v);
        }
        if (($v = $data['dou_plus'] ?? null) !== null && is_array($v)) {
            $obj->douPlus = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfDouPlus::fromArray($v);
        }
        if (($v = $data['ecom_shop'] ?? null) !== null && is_array($v)) {
            $obj->ecomShop = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfEcomShop::fromArray($v);
        }
        if (($v = $data['local_promotion'] ?? null) !== null && is_array($v)) {
            $obj->localPromotion = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfLocalPromotion::fromArray($v);
        }
        if (($v = $data['ocean_engine'] ?? null) !== null && is_array($v)) {
            $obj->oceanEngine = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfOceanEngine::fromArray($v);
        }
        if (($v = $data['qianchuan'] ?? null) !== null && is_array($v)) {
            $obj->qianchuan = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConfQianchuan::fromArray($v);
        }
        return $obj;
    }
}
