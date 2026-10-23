<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanQianchuanReportTodayLiveRoomConfigGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanQianchuanReportTodayLiveRoomConfigGetV10ResponseDataCustomConfigDatasInner[]
     */
    protected ?array $customConfigDatas = null;

    /**
     * @return \Oceanengine\Models\QianchuanQianchuanReportTodayLiveRoomConfigGetV10ResponseDataCustomConfigDatasInner[]
     */
    public function getCustomConfigDatas(): ?array
    {
        return $this->customConfigDatas;
    }

    /**
     * @param \Oceanengine\Models\QianchuanQianchuanReportTodayLiveRoomConfigGetV10ResponseDataCustomConfigDatasInner[] $customConfigDatas
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
            $obj->customConfigDatas = array_map(fn ($vv) => \Oceanengine\Models\QianchuanQianchuanReportTodayLiveRoomConfigGetV10ResponseDataCustomConfigDatasInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
