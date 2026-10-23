<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerButton implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEvent $appointEvent = null;

    /**
     * linkEvent事件自定义图片链接
     * @var string
     */
    protected ?string $bgImageUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEvent $downloadEvent = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2DataBricksButtonEventType
     */
    protected ?string $eventType = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEvent $linkEvent = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonPhoneEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonPhoneEvent $phoneEvent = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEvent
     */
    public function getAppointEvent(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEvent
    {
        return $this->appointEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEvent $appointEvent
     * @return self
     */
    public function setAppointEvent(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEvent $appointEvent): self
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
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEvent
     */
    public function getDownloadEvent(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEvent
    {
        return $this->downloadEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEvent $downloadEvent
     * @return self
     */
    public function setDownloadEvent(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEvent $downloadEvent): self
    {
        $this->downloadEvent = $downloadEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2DataBricksButtonEventType
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2DataBricksButtonEventType $eventType
     * @return self
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEvent
     */
    public function getLinkEvent(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEvent
    {
        return $this->linkEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEvent $linkEvent
     * @return self
     */
    public function setLinkEvent(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEvent $linkEvent): self
    {
        $this->linkEvent = $linkEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonPhoneEvent
     */
    public function getPhoneEvent(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonPhoneEvent
    {
        return $this->phoneEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonPhoneEvent $phoneEvent
     * @return self
     */
    public function setPhoneEvent(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonPhoneEvent $phoneEvent): self
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
            $obj->appointEvent = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonAppointEvent::fromArray($v);
        }
        if (($v = $data['bg_image_url'] ?? null) !== null) {
            $obj->bgImageUrl = (string) $v;
        }
        if (($v = $data['download_event'] ?? null) !== null && is_array($v)) {
            $obj->downloadEvent = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonDownloadEvent::fromArray($v);
        }
        if (($v = $data['event_type'] ?? null) !== null) {
            $obj->eventType = (string) $v;
        }
        if (($v = $data['link_event'] ?? null) !== null && is_array($v)) {
            $obj->linkEvent = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonLinkEvent::fromArray($v);
        }
        if (($v = $data['phone_event'] ?? null) !== null && is_array($v)) {
            $obj->phoneEvent = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonPhoneEvent::fromArray($v);
        }
        return $obj;
    }
}
