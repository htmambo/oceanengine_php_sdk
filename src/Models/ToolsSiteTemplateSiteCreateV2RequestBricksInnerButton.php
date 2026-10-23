<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerButton implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEvent $appointEvent = null;

    /**
     * linkEvent自定义图片链接
     * @var string
     */
    protected ?string $bgImageUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEvent $downloadEvent = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2BricksButtonEventType
     */
    protected ?string $eventType = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEvent $linkEvent = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonPhoneEvent
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonPhoneEvent $phoneEvent = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEvent
     */
    public function getAppointEvent(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEvent
    {
        return $this->appointEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEvent $appointEvent
     * @return self
     */
    public function setAppointEvent(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEvent $appointEvent): self
    {
        $this->appointEvent = $appointEvent;
        return $this;
    }

    /**
     * linkEvent自定义图片链接
     * @return string
     */
    public function getBgImageUrl(): ?string
    {
        return $this->bgImageUrl;
    }

    /**
     * linkEvent自定义图片链接
     * @param string $bgImageUrl
     * @return self
     */
    public function setBgImageUrl(?string $bgImageUrl): self
    {
        $this->bgImageUrl = $bgImageUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEvent
     */
    public function getDownloadEvent(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEvent
    {
        return $this->downloadEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEvent $downloadEvent
     * @return self
     */
    public function setDownloadEvent(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEvent $downloadEvent): self
    {
        $this->downloadEvent = $downloadEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2BricksButtonEventType
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2BricksButtonEventType $eventType
     * @return self
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEvent
     */
    public function getLinkEvent(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEvent
    {
        return $this->linkEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEvent $linkEvent
     * @return self
     */
    public function setLinkEvent(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEvent $linkEvent): self
    {
        $this->linkEvent = $linkEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonPhoneEvent
     */
    public function getPhoneEvent(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonPhoneEvent
    {
        return $this->phoneEvent;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonPhoneEvent $phoneEvent
     * @return self
     */
    public function setPhoneEvent(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonPhoneEvent $phoneEvent): self
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
            $obj->appointEvent = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEvent::fromArray($v);
        }
        if (($v = $data['bg_image_url'] ?? null) !== null) {
            $obj->bgImageUrl = (string) $v;
        }
        if (($v = $data['download_event'] ?? null) !== null && is_array($v)) {
            $obj->downloadEvent = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonDownloadEvent::fromArray($v);
        }
        if (($v = $data['event_type'] ?? null) !== null) {
            $obj->eventType = (string) $v;
        }
        if (($v = $data['link_event'] ?? null) !== null && is_array($v)) {
            $obj->linkEvent = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonLinkEvent::fromArray($v);
        }
        if (($v = $data['phone_event'] ?? null) !== null && is_array($v)) {
            $obj->phoneEvent = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonPhoneEvent::fromArray($v);
        }
        return $obj;
    }
}
