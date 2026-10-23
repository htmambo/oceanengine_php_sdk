<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEstimateAudienceV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataAweme
     */
    protected ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataAweme $aweme = null;

    /**
     * @var \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataTomatoNovelApp
     */
    protected ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataTomatoNovelApp $tomatoNovelApp = null;

    /**
     * @var \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataToutiao
     */
    protected ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataToutiao $toutiao = null;

    /**
     * @var \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataUnion
     */
    protected ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataUnion $union = null;

    /**
     * @var \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataVideoApp
     */
    protected ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataVideoApp $videoApp = null;

    /**
     * @return \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataAweme
     */
    public function getAweme(): ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataAweme
    {
        return $this->aweme;
    }

    /**
     * @param \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataAweme $aweme
     * @return self
     */
    public function setAweme(?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataAweme $aweme): self
    {
        $this->aweme = $aweme;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataTomatoNovelApp
     */
    public function getTomatoNovelApp(): ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataTomatoNovelApp
    {
        return $this->tomatoNovelApp;
    }

    /**
     * @param \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataTomatoNovelApp $tomatoNovelApp
     * @return self
     */
    public function setTomatoNovelApp(?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataTomatoNovelApp $tomatoNovelApp): self
    {
        $this->tomatoNovelApp = $tomatoNovelApp;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataToutiao
     */
    public function getToutiao(): ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataToutiao
    {
        return $this->toutiao;
    }

    /**
     * @param \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataToutiao $toutiao
     * @return self
     */
    public function setToutiao(?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataToutiao $toutiao): self
    {
        $this->toutiao = $toutiao;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataUnion
     */
    public function getUnion(): ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataUnion
    {
        return $this->union;
    }

    /**
     * @param \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataUnion $union
     * @return self
     */
    public function setUnion(?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataUnion $union): self
    {
        $this->union = $union;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataVideoApp
     */
    public function getVideoApp(): ?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataVideoApp
    {
        return $this->videoApp;
    }

    /**
     * @param \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataVideoApp $videoApp
     * @return self
     */
    public function setVideoApp(?\Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataVideoApp $videoApp): self
    {
        $this->videoApp = $videoApp;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->aweme !== null) {
            $result['aweme'] = $this->aweme;
        }
        if ($this->tomatoNovelApp !== null) {
            $result['tomato_novel_app'] = $this->tomatoNovelApp;
        }
        if ($this->toutiao !== null) {
            $result['toutiao'] = $this->toutiao;
        }
        if ($this->union !== null) {
            $result['union'] = $this->union;
        }
        if ($this->videoApp !== null) {
            $result['video_app'] = $this->videoApp;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme'] ?? null) !== null && is_array($v)) {
            $obj->aweme = \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataAweme::fromArray($v);
        }
        if (($v = $data['tomato_novel_app'] ?? null) !== null && is_array($v)) {
            $obj->tomatoNovelApp = \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataTomatoNovelApp::fromArray($v);
        }
        if (($v = $data['toutiao'] ?? null) !== null && is_array($v)) {
            $obj->toutiao = \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataToutiao::fromArray($v);
        }
        if (($v = $data['union'] ?? null) !== null && is_array($v)) {
            $obj->union = \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataUnion::fromArray($v);
        }
        if (($v = $data['video_app'] ?? null) !== null && is_array($v)) {
            $obj->videoApp = \Oceanengine\Models\ToolsEstimateAudienceV2ResponseDataVideoApp::fromArray($v);
        }
        return $obj;
    }
}
