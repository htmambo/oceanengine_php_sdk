<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButton implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEvent $appointEvent = null;

    /**
     * linkEvent事件自定义图片链接
     * @var string
     */
    protected ?string $bgImageUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEvent $downloadEvent = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2DataListBricksButtonEventType
     */
    protected ?string $eventType = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEvent $linkEvent = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonPhoneEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonPhoneEvent $phoneEvent = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEvent
     */
    public function getAppointEvent(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEvent
    {
        return $this->appointEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEvent $appointEvent
     * @return self
     */
    public function setAppointEvent(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEvent $appointEvent): self
    {
        $this->appointEvent = $appointEvent;
        return $this;
    }

    /**
     * linkEvent事件自定义图片链接
     * @return string
     */
    public function getBgImageUrl(): ?string
    {
        return $this->bgImageUrl;
    }

    /**
     * linkEvent事件自定义图片链接
     * @param string $bgImageUrl
     * @return self
     */
    public function setBgImageUrl(?string $bgImageUrl): self
    {
        $this->bgImageUrl = $bgImageUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEvent
     */
    public function getDownloadEvent(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEvent
    {
        return $this->downloadEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEvent $downloadEvent
     * @return self
     */
    public function setDownloadEvent(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEvent $downloadEvent): self
    {
        $this->downloadEvent = $downloadEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2DataListBricksButtonEventType
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2DataListBricksButtonEventType $eventType
     * @return self
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEvent
     */
    public function getLinkEvent(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEvent
    {
        return $this->linkEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEvent $linkEvent
     * @return self
     */
    public function setLinkEvent(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEvent $linkEvent): self
    {
        $this->linkEvent = $linkEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonPhoneEvent
     */
    public function getPhoneEvent(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonPhoneEvent
    {
        return $this->phoneEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonPhoneEvent $phoneEvent
     * @return self
     */
    public function setPhoneEvent(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonPhoneEvent $phoneEvent): self
    {
        $this->phoneEvent = $phoneEvent;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appointEvent !== null) {
            $result['appoint_event'] = $this->appointEvent;
        }
        if ($this->bgImageUrl !== null) {
            $result['bg_image_url'] = $this->bgImageUrl;
        }
        if ($this->downloadEvent !== null) {
            $result['download_event'] = $this->downloadEvent;
        }
        if ($this->eventType !== null) {
            $result['event_type'] = $this->eventType;
        }
        if ($this->linkEvent !== null) {
            $result['link_event'] = $this->linkEvent;
        }
        if ($this->phoneEvent !== null) {
            $result['phone_event'] = $this->phoneEvent;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['appoint_event'] ?? null) !== null && is_array($v)) {
            $obj->appointEvent = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEvent::fromArray($v);
        }
        if (($v = $data['bg_image_url'] ?? null) !== null) {
            $obj->bgImageUrl = (string) $v;
        }
        if (($v = $data['download_event'] ?? null) !== null && is_array($v)) {
            $obj->downloadEvent = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonDownloadEvent::fromArray($v);
        }
        if (($v = $data['event_type'] ?? null) !== null) {
            $obj->eventType = (string) $v;
        }
        if (($v = $data['link_event'] ?? null) !== null && is_array($v)) {
            $obj->linkEvent = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonLinkEvent::fromArray($v);
        }
        if (($v = $data['phone_event'] ?? null) !== null && is_array($v)) {
            $obj->phoneEvent = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonPhoneEvent::fromArray($v);
        }
        return $obj;
    }
}
