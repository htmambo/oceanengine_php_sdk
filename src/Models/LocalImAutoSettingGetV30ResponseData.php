<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImAutoSettingGetV30ResponseData implements \JsonSerializable
{
    /**
     * 账户id开关列表，key为账户id，value为生效开关枚举，9代表微信号识别功能生效
     * @var array<string,int[]>
     */
    protected ?array $autoSettingMap = null;

    /**
     * 账户id开关列表，key为账户id，value为生效开关枚举，9代表微信号识别功能生效
     * @return array<string,int[]>
     */
    public function getAutoSettingMap(): ?array
    {
        return $this->autoSettingMap;
    }

    /**
     * 账户id开关列表，key为账户id，value为生效开关枚举，9代表微信号识别功能生效
     * @param array<string,int[]> $autoSettingMap
     * @return self
     */
    public function setAutoSettingMap(?array $autoSettingMap): self
    {
        $this->autoSettingMap = $autoSettingMap;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->autoSettingMap !== null) {
            $result['auto_setting_map'] = $this->autoSettingMap;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auto_setting_map'] ?? null) !== null && is_array($v)) {
            $obj->autoSettingMap = $v;
        }
        return $obj;
    }
}
