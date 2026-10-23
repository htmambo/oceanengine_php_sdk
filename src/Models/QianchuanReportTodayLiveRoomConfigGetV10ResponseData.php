<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportTodayLiveRoomConfigGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanReportTodayLiveRoomConfigGetV10ResponseDataCustomConfigDatasInner[]
     */
    protected ?array $customConfigDatas = null;

    /**
     * @return \Oceanengine\Models\QianchuanReportTodayLiveRoomConfigGetV10ResponseDataCustomConfigDatasInner[]
     */
    public function getCustomConfigDatas(): ?array
    {
        return $this->customConfigDatas;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportTodayLiveRoomConfigGetV10ResponseDataCustomConfigDatasInner[] $customConfigDatas
     * @return self
     */
    public function setCustomConfigDatas(?array $customConfigDatas): self
    {
        $this->customConfigDatas = $customConfigDatas;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->customConfigDatas !== null) {
            $result['custom_config_datas'] = $this->customConfigDatas;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['custom_config_datas'] ?? null) !== null && is_array($v)) {
            $obj->customConfigDatas = array_map(fn ($vv) => \Oceanengine\Models\QianchuanReportTodayLiveRoomConfigGetV10ResponseDataCustomConfigDatasInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
