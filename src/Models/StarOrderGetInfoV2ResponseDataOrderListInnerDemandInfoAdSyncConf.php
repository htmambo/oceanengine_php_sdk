<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConf implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfContentMarketing
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfContentMarketing $contentMarketing = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfDouPlus
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfDouPlus $douPlus = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfEcomShop
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfEcomShop $ecomShop = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfLocalPromotion
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfLocalPromotion $localPromotion = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfOceanEngine
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfOceanEngine $oceanEngine = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfQianchuan
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfQianchuan $qianchuan = null;

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfContentMarketing
     */
    public function getContentMarketing(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfContentMarketing
    {
        return $this->contentMarketing;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfContentMarketing $contentMarketing
     * @return self
     */
    public function setContentMarketing(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfContentMarketing $contentMarketing): self
    {
        $this->contentMarketing = $contentMarketing;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfDouPlus
     */
    public function getDouPlus(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfDouPlus
    {
        return $this->douPlus;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfDouPlus $douPlus
     * @return self
     */
    public function setDouPlus(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfDouPlus $douPlus): self
    {
        $this->douPlus = $douPlus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfEcomShop
     */
    public function getEcomShop(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfEcomShop
    {
        return $this->ecomShop;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfEcomShop $ecomShop
     * @return self
     */
    public function setEcomShop(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfEcomShop $ecomShop): self
    {
        $this->ecomShop = $ecomShop;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfLocalPromotion
     */
    public function getLocalPromotion(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfLocalPromotion
    {
        return $this->localPromotion;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfLocalPromotion $localPromotion
     * @return self
     */
    public function setLocalPromotion(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfLocalPromotion $localPromotion): self
    {
        $this->localPromotion = $localPromotion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfOceanEngine
     */
    public function getOceanEngine(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfOceanEngine
    {
        return $this->oceanEngine;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfOceanEngine $oceanEngine
     * @return self
     */
    public function setOceanEngine(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfOceanEngine $oceanEngine): self
    {
        $this->oceanEngine = $oceanEngine;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfQianchuan
     */
    public function getQianchuan(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfQianchuan
    {
        return $this->qianchuan;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfQianchuan $qianchuan
     * @return self
     */
    public function setQianchuan(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfQianchuan $qianchuan): self
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
            $obj->contentMarketing = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfContentMarketing::fromArray($v);
        }
        if (($v = $data['dou_plus'] ?? null) !== null && is_array($v)) {
            $obj->douPlus = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfDouPlus::fromArray($v);
        }
        if (($v = $data['ecom_shop'] ?? null) !== null && is_array($v)) {
            $obj->ecomShop = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfEcomShop::fromArray($v);
        }
        if (($v = $data['local_promotion'] ?? null) !== null && is_array($v)) {
            $obj->localPromotion = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfLocalPromotion::fromArray($v);
        }
        if (($v = $data['ocean_engine'] ?? null) !== null && is_array($v)) {
            $obj->oceanEngine = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfOceanEngine::fromArray($v);
        }
        if (($v = $data['qianchuan'] ?? null) !== null && is_array($v)) {
            $obj->qianchuan = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoAdSyncConfQianchuan::fromArray($v);
        }
        return $obj;
    }
}
