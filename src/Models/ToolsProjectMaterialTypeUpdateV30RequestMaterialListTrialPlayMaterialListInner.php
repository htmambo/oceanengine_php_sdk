<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectMaterialTypeUpdateV30RequestMaterialListTrialPlayMaterialListInner implements \JsonSerializable
{
    /**
     * 试玩素材uri，取值来源【获取试玩/直玩素材列表】
     * @var string
     */
    protected ?string $appPlayUri = null;

    /**
     * 引导视频ID，取值来源：游戏玩法列表接口审核通过的玩法对应引导视频
     * @var string
     */
    protected ?string $guideVideoId = null;

    /**
     * 试玩素材uri，取值来源【获取试玩/直玩素材列表】
     * @return string
     */
    public function getAppPlayUri(): ?string
    {
        return $this->appPlayUri;
    }

    /**
     * 试玩素材uri，取值来源【获取试玩/直玩素材列表】
     * @param string $appPlayUri
     * @return self
     */
    public function setAppPlayUri(?string $appPlayUri): self
    {
        $this->appPlayUri = $appPlayUri;
        return $this;
    }

    /**
     * 引导视频ID，取值来源：游戏玩法列表接口审核通过的玩法对应引导视频
     * @return string
     */
    public function getGuideVideoId(): ?string
    {
        return $this->guideVideoId;
    }

    /**
     * 引导视频ID，取值来源：游戏玩法列表接口审核通过的玩法对应引导视频
     * @param string $guideVideoId
     * @return self
     */
    public function setGuideVideoId(?string $guideVideoId): self
    {
        $this->guideVideoId = $guideVideoId;
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
        if ($this->guideVideoId !== null) {
            $result['guide_video_id'] = $this->guideVideoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_play_uri'] ?? null) !== null) {
            $obj->appPlayUri = (string) $v;
        }
        if (($v = $data['guide_video_id'] ?? null) !== null) {
            $obj->guideVideoId = (string) $v;
        }
        return $obj;
    }
}
