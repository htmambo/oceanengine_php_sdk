<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoLocalVideo
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoLocalVideo $localVideo = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoOnlineVideo
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoOnlineVideo $onlineVideo = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoLocalVideo
     */
    public function getLocalVideo(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoLocalVideo
    {
        return $this->localVideo;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoLocalVideo $localVideo
     * @return self
     */
    public function setLocalVideo(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoLocalVideo $localVideo): self
    {
        $this->localVideo = $localVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoOnlineVideo
     */
    public function getOnlineVideo(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoOnlineVideo
    {
        return $this->onlineVideo;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoOnlineVideo $onlineVideo
     * @return self
     */
    public function setOnlineVideo(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoOnlineVideo $onlineVideo): self
    {
        $this->onlineVideo = $onlineVideo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->localVideo !== null) {
            $result['local_video'] = $this->localVideo;
        }
        if ($this->onlineVideo !== null) {
            $result['online_video'] = $this->onlineVideo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['local_video'] ?? null) !== null && is_array($v)) {
            $obj->localVideo = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoLocalVideo::fromArray($v);
        }
        if (($v = $data['online_video'] ?? null) !== null && is_array($v)) {
            $obj->onlineVideo = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideoOnlineVideo::fromArray($v);
        }
        return $obj;
    }
}
