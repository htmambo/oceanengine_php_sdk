<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderGetV10ResponseDataListInnerDeliverySetting implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListDeliverySettingLiveroomHeatMode
     */
    protected ?string $liveroomHeatMode = null;

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListDeliverySettingLiveroomHeatMode
     */
    public function getLiveroomHeatMode(): ?string
    {
        return $this->liveroomHeatMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListDeliverySettingLiveroomHeatMode $liveroomHeatMode
     * @return self
     */
    public function setLiveroomHeatMode(?string $liveroomHeatMode): self
    {
        $this->liveroomHeatMode = $liveroomHeatMode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->liveroomHeatMode !== null) {
            $result['liveroom_heat_mode'] = $this->liveroomHeatMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['liveroom_heat_mode'] ?? null) !== null) {
            $obj->liveroomHeatMode = (string) $v;
        }
        return $obj;
    }
}
