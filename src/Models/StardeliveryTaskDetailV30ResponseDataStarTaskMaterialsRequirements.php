<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskDetailV30ResponseDataStarTaskMaterialsRequirements implements \JsonSerializable
{
    /**
     * 补充说明，1-3000个字符
     * @var string
     */
    protected ?string $additionalInformation = null;

    /**
     * 镜头要求，1-80个字符，例如产品实物出镜、近景特写、达人出镜、镜头时长、指定画面等 例如：需产品实物出镜，并给到带logo的产品近景特写，特写时长不低于3s，达人需出镜亲自安利
     * @var string
     */
    protected ?string $onCameraRequirement = null;

    /**
     * @var string[]
     */
    protected ?array $otherRequirements = null;

    /**
     * @var string
     */
    protected ?string $redLine = null;

    /**
     * 示例视频id，最多可添加3个
     * @var string[]
     */
    protected ?array $sampleMaterialIds = null;

    /**
     * @var string
     */
    protected ?string $sampleMaterialInfo = null;

    /**
     * 示例视频url，最多可添加3个，需要输入抖音视频链接并确保该视频为在线状态 （如 https://www.douyin.com/video/xxx）
     * @var string[]
     */
    protected ?array $sampleVideoUrls = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsSpecifiedIsv
     */
    protected ?string $specifiedIsv = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskDetailV30ResponseDataStarTaskMaterialsRequirementsSpecifiedIsvDetailInner[]
     */
    protected ?array $specifiedIsvDetail = null;

    /**
     * 要@ 的抖音号，抖音用户个人主页抖音昵称下方可找到
     * @var string
     */
    protected ?string $titleMentionsAwemeId = null;

    /**
     * 标题要求，1-80个字符，例如标题包含商品名称、商品性能/特点关键词等；若需提及账号或话题，请在其他要求参数中填写
     * @var string
     */
    protected ?string $titleRequirement = null;

    /**
     * @var int[]
     */
    protected ?array $titleSpecifiesTopicIds = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsVideoReviewer
     */
    protected ?string $videoReviewer = null;

    /**
     * @var string
     */
    protected ?string $videoStandards = null;

    /**
     * 口播要求，1-80个字符，例如口播介绍指定文字、品牌、slogan、商品卖点，是否添加口播字幕等
     * @var string
     */
    protected ?string $voRequirement = null;

    /**
     * 补充说明，1-3000个字符
     * @return string
     */
    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    /**
     * 补充说明，1-3000个字符
     * @param string $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(?string $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * 镜头要求，1-80个字符，例如产品实物出镜、近景特写、达人出镜、镜头时长、指定画面等 例如：需产品实物出镜，并给到带logo的产品近景特写，特写时长不低于3s，达人需出镜亲自安利
     * @return string
     */
    public function getOnCameraRequirement(): ?string
    {
        return $this->onCameraRequirement;
    }

    /**
     * 镜头要求，1-80个字符，例如产品实物出镜、近景特写、达人出镜、镜头时长、指定画面等 例如：需产品实物出镜，并给到带logo的产品近景特写，特写时长不低于3s，达人需出镜亲自安利
     * @param string $onCameraRequirement
     * @return self
     */
    public function setOnCameraRequirement(?string $onCameraRequirement): self
    {
        $this->onCameraRequirement = $onCameraRequirement;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOtherRequirements(): ?array
    {
        return $this->otherRequirements;
    }

    /**
     * @param string[] $otherRequirements
     * @return self
     */
    public function setOtherRequirements(?array $otherRequirements): self
    {
        $this->otherRequirements = $otherRequirements;
        return $this;
    }

    /**
     * @return string
     */
    public function getRedLine(): ?string
    {
        return $this->redLine;
    }

    /**
     * @param string $redLine
     * @return self
     */
    public function setRedLine(?string $redLine): self
    {
        $this->redLine = $redLine;
        return $this;
    }

    /**
     * 示例视频id，最多可添加3个
     * @return string[]
     */
    public function getSampleMaterialIds(): ?array
    {
        return $this->sampleMaterialIds;
    }

    /**
     * 示例视频id，最多可添加3个
     * @param string[] $sampleMaterialIds
     * @return self
     */
    public function setSampleMaterialIds(?array $sampleMaterialIds): self
    {
        $this->sampleMaterialIds = $sampleMaterialIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getSampleMaterialInfo(): ?string
    {
        return $this->sampleMaterialInfo;
    }

    /**
     * @param string $sampleMaterialInfo
     * @return self
     */
    public function setSampleMaterialInfo(?string $sampleMaterialInfo): self
    {
        $this->sampleMaterialInfo = $sampleMaterialInfo;
        return $this;
    }

    /**
     * 示例视频url，最多可添加3个，需要输入抖音视频链接并确保该视频为在线状态 （如 https://www.douyin.com/video/xxx）
     * @return string[]
     */
    public function getSampleVideoUrls(): ?array
    {
        return $this->sampleVideoUrls;
    }

    /**
     * 示例视频url，最多可添加3个，需要输入抖音视频链接并确保该视频为在线状态 （如 https://www.douyin.com/video/xxx）
     * @param string[] $sampleVideoUrls
     * @return self
     */
    public function setSampleVideoUrls(?array $sampleVideoUrls): self
    {
        $this->sampleVideoUrls = $sampleVideoUrls;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsSpecifiedIsv
     */
    public function getSpecifiedIsv(): ?string
    {
        return $this->specifiedIsv;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsSpecifiedIsv $specifiedIsv
     * @return self
     */
    public function setSpecifiedIsv(?string $specifiedIsv): self
    {
        $this->specifiedIsv = $specifiedIsv;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskDetailV30ResponseDataStarTaskMaterialsRequirementsSpecifiedIsvDetailInner[]
     */
    public function getSpecifiedIsvDetail(): ?array
    {
        return $this->specifiedIsvDetail;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskDetailV30ResponseDataStarTaskMaterialsRequirementsSpecifiedIsvDetailInner[] $specifiedIsvDetail
     * @return self
     */
    public function setSpecifiedIsvDetail(?array $specifiedIsvDetail): self
    {
        $this->specifiedIsvDetail = $specifiedIsvDetail;
        return $this;
    }

    /**
     * 要@ 的抖音号，抖音用户个人主页抖音昵称下方可找到
     * @return string
     */
    public function getTitleMentionsAwemeId(): ?string
    {
        return $this->titleMentionsAwemeId;
    }

    /**
     * 要@ 的抖音号，抖音用户个人主页抖音昵称下方可找到
     * @param string $titleMentionsAwemeId
     * @return self
     */
    public function setTitleMentionsAwemeId(?string $titleMentionsAwemeId): self
    {
        $this->titleMentionsAwemeId = $titleMentionsAwemeId;
        return $this;
    }

    /**
     * 标题要求，1-80个字符，例如标题包含商品名称、商品性能/特点关键词等；若需提及账号或话题，请在其他要求参数中填写
     * @return string
     */
    public function getTitleRequirement(): ?string
    {
        return $this->titleRequirement;
    }

    /**
     * 标题要求，1-80个字符，例如标题包含商品名称、商品性能/特点关键词等；若需提及账号或话题，请在其他要求参数中填写
     * @param string $titleRequirement
     * @return self
     */
    public function setTitleRequirement(?string $titleRequirement): self
    {
        $this->titleRequirement = $titleRequirement;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTitleSpecifiesTopicIds(): ?array
    {
        return $this->titleSpecifiesTopicIds;
    }

    /**
     * @param int[] $titleSpecifiesTopicIds
     * @return self
     */
    public function setTitleSpecifiesTopicIds(?array $titleSpecifiesTopicIds): self
    {
        $this->titleSpecifiesTopicIds = $titleSpecifiesTopicIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsVideoReviewer
     */
    public function getVideoReviewer(): ?string
    {
        return $this->videoReviewer;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskDetailV30DataStarTaskMaterialsRequirementsVideoReviewer $videoReviewer
     * @return self
     */
    public function setVideoReviewer(?string $videoReviewer): self
    {
        $this->videoReviewer = $videoReviewer;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoStandards(): ?string
    {
        return $this->videoStandards;
    }

    /**
     * @param string $videoStandards
     * @return self
     */
    public function setVideoStandards(?string $videoStandards): self
    {
        $this->videoStandards = $videoStandards;
        return $this;
    }

    /**
     * 口播要求，1-80个字符，例如口播介绍指定文字、品牌、slogan、商品卖点，是否添加口播字幕等
     * @return string
     */
    public function getVoRequirement(): ?string
    {
        return $this->voRequirement;
    }

    /**
     * 口播要求，1-80个字符，例如口播介绍指定文字、品牌、slogan、商品卖点，是否添加口播字幕等
     * @param string $voRequirement
     * @return self
     */
    public function setVoRequirement(?string $voRequirement): self
    {
        $this->voRequirement = $voRequirement;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->additionalInformation !== null) {
            $result['additional_information'] = $this->additionalInformation;
        }
        if ($this->onCameraRequirement !== null) {
            $result['on_camera_requirement'] = $this->onCameraRequirement;
        }
        if ($this->otherRequirements !== null) {
            $result['other_requirements'] = $this->otherRequirements;
        }
        if ($this->redLine !== null) {
            $result['red_line'] = $this->redLine;
        }
        if ($this->sampleMaterialIds !== null) {
            $result['sample_material_ids'] = $this->sampleMaterialIds;
        }
        if ($this->sampleMaterialInfo !== null) {
            $result['sample_material_info'] = $this->sampleMaterialInfo;
        }
        if ($this->sampleVideoUrls !== null) {
            $result['sample_video_urls'] = $this->sampleVideoUrls;
        }
        if ($this->specifiedIsv !== null) {
            $result['specified_isv'] = $this->specifiedIsv;
        }
        if ($this->specifiedIsvDetail !== null) {
            $result['specified_isv_detail'] = $this->specifiedIsvDetail;
        }
        if ($this->titleMentionsAwemeId !== null) {
            $result['title_mentions_aweme_id'] = $this->titleMentionsAwemeId;
        }
        if ($this->titleRequirement !== null) {
            $result['title_requirement'] = $this->titleRequirement;
        }
        if ($this->titleSpecifiesTopicIds !== null) {
            $result['title_specifies_topic_ids'] = $this->titleSpecifiesTopicIds;
        }
        if ($this->videoReviewer !== null) {
            $result['video_reviewer'] = $this->videoReviewer;
        }
        if ($this->videoStandards !== null) {
            $result['video_standards'] = $this->videoStandards;
        }
        if ($this->voRequirement !== null) {
            $result['vo_requirement'] = $this->voRequirement;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['additional_information'] ?? null) !== null) {
            $obj->additionalInformation = (string) $v;
        }
        if (($v = $data['on_camera_requirement'] ?? null) !== null) {
            $obj->onCameraRequirement = (string) $v;
        }
        if (($v = $data['other_requirements'] ?? null) !== null && is_array($v)) {
            $obj->otherRequirements = $v;
        }
        if (($v = $data['red_line'] ?? null) !== null) {
            $obj->redLine = (string) $v;
        }
        if (($v = $data['sample_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->sampleMaterialIds = $v;
        }
        if (($v = $data['sample_material_info'] ?? null) !== null) {
            $obj->sampleMaterialInfo = (string) $v;
        }
        if (($v = $data['sample_video_urls'] ?? null) !== null && is_array($v)) {
            $obj->sampleVideoUrls = $v;
        }
        if (($v = $data['specified_isv'] ?? null) !== null) {
            $obj->specifiedIsv = (string) $v;
        }
        if (($v = $data['specified_isv_detail'] ?? null) !== null && is_array($v)) {
            $obj->specifiedIsvDetail = array_map(fn ($vv) => \Oceanengine\Models\StardeliveryTaskDetailV30ResponseDataStarTaskMaterialsRequirementsSpecifiedIsvDetailInner::fromArray($vv), $v);
        }
        if (($v = $data['title_mentions_aweme_id'] ?? null) !== null) {
            $obj->titleMentionsAwemeId = (string) $v;
        }
        if (($v = $data['title_requirement'] ?? null) !== null) {
            $obj->titleRequirement = (string) $v;
        }
        if (($v = $data['title_specifies_topic_ids'] ?? null) !== null && is_array($v)) {
            $obj->titleSpecifiesTopicIds = $v;
        }
        if (($v = $data['video_reviewer'] ?? null) !== null) {
            $obj->videoReviewer = (string) $v;
        }
        if (($v = $data['video_standards'] ?? null) !== null) {
            $obj->videoStandards = (string) $v;
        }
        if (($v = $data['vo_requirement'] ?? null) !== null) {
            $obj->voRequirement = (string) $v;
        }
        return $obj;
    }
}
