<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmUpdateChallengeV2RequestChallengeInfo implements \JsonSerializable
{
    /**
     * 组件标题
     * @var string
     */
    protected ?string $anchorTitle = null;

    /**
     * 达人侧任务名称
     * @var string
     */
    protected ?string $authorTaskName = null;

    /**
     * 任务介绍 文本，最长500字。如果不传递参数，那么字段将保留原始任务信息，不会进行更新
     * @var string
     */
    protected ?string $demandDesc = null;

    /**
     * 任务标签
     * @var string[]
     */
    protected ?array $omTaskTag = null;

    /**
     * 示例视频id 最多5个
     * @var int[]
     */
    protected ?array $sampleVideo = null;

    /**
     * 小程序落地页地址 字符串，支持校验合规性
     * @var string
     */
    protected ?string $startPage = null;

    /**
     * 任务头图 URL文本
     * @var string
     */
    protected ?string $taskHeadImage = null;

    /**
     * 任务图标 URL文本
     * @var string
     */
    protected ?string $taskIcon = null;

    /**
     * 组件标题
     * @return string
     */
    public function getAnchorTitle(): ?string
    {
        return $this->anchorTitle;
    }

    /**
     * 组件标题
     * @param string $anchorTitle
     * @return self
     */
    public function setAnchorTitle(?string $anchorTitle): self
    {
        $this->anchorTitle = $anchorTitle;
        return $this;
    }

    /**
     * 达人侧任务名称
     * @return string
     */
    public function getAuthorTaskName(): ?string
    {
        return $this->authorTaskName;
    }

    /**
     * 达人侧任务名称
     * @param string $authorTaskName
     * @return self
     */
    public function setAuthorTaskName(?string $authorTaskName): self
    {
        $this->authorTaskName = $authorTaskName;
        return $this;
    }

    /**
     * 任务介绍 文本，最长500字。如果不传递参数，那么字段将保留原始任务信息，不会进行更新
     * @return string
     */
    public function getDemandDesc(): ?string
    {
        return $this->demandDesc;
    }

    /**
     * 任务介绍 文本，最长500字。如果不传递参数，那么字段将保留原始任务信息，不会进行更新
     * @param string $demandDesc
     * @return self
     */
    public function setDemandDesc(?string $demandDesc): self
    {
        $this->demandDesc = $demandDesc;
        return $this;
    }

    /**
     * 任务标签
     * @return string[]
     */
    public function getOmTaskTag(): ?array
    {
        return $this->omTaskTag;
    }

    /**
     * 任务标签
     * @param string[] $omTaskTag
     * @return self
     */
    public function setOmTaskTag(?array $omTaskTag): self
    {
        $this->omTaskTag = $omTaskTag;
        return $this;
    }

    /**
     * 示例视频id 最多5个
     * @return int[]
     */
    public function getSampleVideo(): ?array
    {
        return $this->sampleVideo;
    }

    /**
     * 示例视频id 最多5个
     * @param int[] $sampleVideo
     * @return self
     */
    public function setSampleVideo(?array $sampleVideo): self
    {
        $this->sampleVideo = $sampleVideo;
        return $this;
    }

    /**
     * 小程序落地页地址 字符串，支持校验合规性
     * @return string
     */
    public function getStartPage(): ?string
    {
        return $this->startPage;
    }

    /**
     * 小程序落地页地址 字符串，支持校验合规性
     * @param string $startPage
     * @return self
     */
    public function setStartPage(?string $startPage): self
    {
        $this->startPage = $startPage;
        return $this;
    }

    /**
     * 任务头图 URL文本
     * @return string
     */
    public function getTaskHeadImage(): ?string
    {
        return $this->taskHeadImage;
    }

    /**
     * 任务头图 URL文本
     * @param string $taskHeadImage
     * @return self
     */
    public function setTaskHeadImage(?string $taskHeadImage): self
    {
        $this->taskHeadImage = $taskHeadImage;
        return $this;
    }

    /**
     * 任务图标 URL文本
     * @return string
     */
    public function getTaskIcon(): ?string
    {
        return $this->taskIcon;
    }

    /**
     * 任务图标 URL文本
     * @param string $taskIcon
     * @return self
     */
    public function setTaskIcon(?string $taskIcon): self
    {
        $this->taskIcon = $taskIcon;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorTitle !== null) {
            $result['anchor_title'] = $this->anchorTitle;
        }
        if ($this->authorTaskName !== null) {
            $result['author_task_name'] = $this->authorTaskName;
        }
        if ($this->demandDesc !== null) {
            $result['demand_desc'] = $this->demandDesc;
        }
        if ($this->omTaskTag !== null) {
            $result['om_task_tag'] = $this->omTaskTag;
        }
        if ($this->sampleVideo !== null) {
            $result['sample_video'] = $this->sampleVideo;
        }
        if ($this->startPage !== null) {
            $result['start_page'] = $this->startPage;
        }
        if ($this->taskHeadImage !== null) {
            $result['task_head_image'] = $this->taskHeadImage;
        }
        if ($this->taskIcon !== null) {
            $result['task_icon'] = $this->taskIcon;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_title'] ?? null) !== null) {
            $obj->anchorTitle = (string) $v;
        }
        if (($v = $data['author_task_name'] ?? null) !== null) {
            $obj->authorTaskName = (string) $v;
        }
        if (($v = $data['demand_desc'] ?? null) !== null) {
            $obj->demandDesc = (string) $v;
        }
        if (($v = $data['om_task_tag'] ?? null) !== null && is_array($v)) {
            $obj->omTaskTag = $v;
        }
        if (($v = $data['sample_video'] ?? null) !== null && is_array($v)) {
            $obj->sampleVideo = $v;
        }
        if (($v = $data['start_page'] ?? null) !== null) {
            $obj->startPage = (string) $v;
        }
        if (($v = $data['task_head_image'] ?? null) !== null) {
            $obj->taskHeadImage = (string) $v;
        }
        if (($v = $data['task_icon'] ?? null) !== null) {
            $obj->taskIcon = (string) $v;
        }
        return $obj;
    }
}
