<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectMaterialTypeUpdateV30RequestMaterialListInstantPlayMaterialListInner implements \JsonSerializable
{
    /**
     * 直玩素材uri，取值来源【获取试玩/直玩素材列表】
     * @var string
     */
    protected ?string $appPlayUri = null;

    /**
     * 直玩素材uri，取值来源【获取试玩/直玩素材列表】
     * @return string
     */
    public function getAppPlayUri(): ?string
    {
        return $this->appPlayUri;
    }

    /**
     * 直玩素材uri，取值来源【获取试玩/直玩素材列表】
     * @param string $appPlayUri
     * @return self
     */
    public function setAppPlayUri(?string $appPlayUri): self
    {
        $this->appPlayUri = $appPlayUri;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appPlayUri !== null) {
            $result['app_play_uri'] = $this->appPlayUri;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_play_uri'] ?? null) !== null) {
            $obj->appPlayUri = (string) $v;
        }
        return $obj;
    }
}
