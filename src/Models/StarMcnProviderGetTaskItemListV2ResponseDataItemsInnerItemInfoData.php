<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeAdConvertData
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeAdConvertData $realTimeAdConvertData = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeEffectData
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeEffectData $realTimeEffectData = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeNaturalConvertData
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeNaturalConvertData $realTimeNaturalConvertData = null;

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeAdConvertData
     */
    public function getRealTimeAdConvertData(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeAdConvertData
    {
        return $this->realTimeAdConvertData;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeAdConvertData $realTimeAdConvertData
     * @return self
     */
    public function setRealTimeAdConvertData(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeAdConvertData $realTimeAdConvertData): self
    {
        $this->realTimeAdConvertData = $realTimeAdConvertData;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeEffectData
     */
    public function getRealTimeEffectData(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeEffectData
    {
        return $this->realTimeEffectData;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeEffectData $realTimeEffectData
     * @return self
     */
    public function setRealTimeEffectData(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeEffectData $realTimeEffectData): self
    {
        $this->realTimeEffectData = $realTimeEffectData;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeNaturalConvertData
     */
    public function getRealTimeNaturalConvertData(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeNaturalConvertData
    {
        return $this->realTimeNaturalConvertData;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeNaturalConvertData $realTimeNaturalConvertData
     * @return self
     */
    public function setRealTimeNaturalConvertData(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeNaturalConvertData $realTimeNaturalConvertData): self
    {
        $this->realTimeNaturalConvertData = $realTimeNaturalConvertData;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->realTimeAdConvertData !== null) {
            $result['real_time_ad_convert_data'] = $this->realTimeAdConvertData;
        }
        if ($this->realTimeEffectData !== null) {
            $result['real_time_effect_data'] = $this->realTimeEffectData;
        }
        if ($this->realTimeNaturalConvertData !== null) {
            $result['real_time_natural_convert_data'] = $this->realTimeNaturalConvertData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['real_time_ad_convert_data'] ?? null) !== null && is_array($v)) {
            $obj->realTimeAdConvertData = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeAdConvertData::fromArray($v);
        }
        if (($v = $data['real_time_effect_data'] ?? null) !== null && is_array($v)) {
            $obj->realTimeEffectData = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeEffectData::fromArray($v);
        }
        if (($v = $data['real_time_natural_convert_data'] ?? null) !== null && is_array($v)) {
            $obj->realTimeNaturalConvertData = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoDataRealTimeNaturalConvertData::fromArray($v);
        }
        return $obj;
    }
}
