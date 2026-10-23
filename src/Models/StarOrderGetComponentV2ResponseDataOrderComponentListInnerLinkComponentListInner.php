<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetComponentV2ResponseDataOrderComponentListInnerLinkComponentListInner implements \JsonSerializable
{
    /**
     * 审核失败原因
     * @var string
     */
    protected ?string $auditRejectReason = null;

    /**
     * 组件ID
     * @var int
     */
    protected ?int $componentId = null;

    /**
     * 安卓下载链接
     * @var string
     */
    protected ?string $downloadUrlAndroid = null;

    /**
     * @var string
     */
    protected ?string $downloadUrlHarmony = null;

    /**
     * iOS app 下载链接
     * @var string
     */
    protected ?string $downloadUrlIos = null;

    /**
     * 安卓落地页链接
     * @var string
     */
    protected ?string $landingUrlAndroid = null;

    /**
     * @var string
     */
    protected ?string $landingUrlHarmony = null;

    /**
     * iOS落地页链接
     * @var string
     */
    protected ?string $landingUrlIos = null;

    /**
     * link组件类别 1 = 落地页 2 = 短视频小程序 3 = 原生落地页 4 = 直播落地页 5 = 直播小程序 6 = 直播下载组件 7 = 直播引流组件
     * @var int
     */
    protected ?int $linkType = null;

    /**
     * 组件状态 0 = 待送审 1 = 有效 2 =审核中 3 = 审核失败
     * @var int
     */
    protected ?int $status = null;

    /**
     * 标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 审核失败原因
     * @return string
     */
    public function getAuditRejectReason(): ?string
    {
        return $this->auditRejectReason;
    }

    /**
     * 审核失败原因
     * @param string $auditRejectReason
     * @return self
     */
    public function setAuditRejectReason(?string $auditRejectReason): self
    {
        $this->auditRejectReason = $auditRejectReason;
        return $this;
    }

    /**
     * 组件ID
     * @return int
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * 组件ID
     * @param int $componentId
     * @return self
     */
    public function setComponentId(?int $componentId): self
    {
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * 安卓下载链接
     * @return string
     */
    public function getDownloadUrlAndroid(): ?string
    {
        return $this->downloadUrlAndroid;
    }

    /**
     * 安卓下载链接
     * @param string $downloadUrlAndroid
     * @return self
     */
    public function setDownloadUrlAndroid(?string $downloadUrlAndroid): self
    {
        $this->downloadUrlAndroid = $downloadUrlAndroid;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadUrlHarmony(): ?string
    {
        return $this->downloadUrlHarmony;
    }

    /**
     * @param string $downloadUrlHarmony
     * @return self
     */
    public function setDownloadUrlHarmony(?string $downloadUrlHarmony): self
    {
        $this->downloadUrlHarmony = $downloadUrlHarmony;
        return $this;
    }

    /**
     * iOS app 下载链接
     * @return string
     */
    public function getDownloadUrlIos(): ?string
    {
        return $this->downloadUrlIos;
    }

    /**
     * iOS app 下载链接
     * @param string $downloadUrlIos
     * @return self
     */
    public function setDownloadUrlIos(?string $downloadUrlIos): self
    {
        $this->downloadUrlIos = $downloadUrlIos;
        return $this;
    }

    /**
     * 安卓落地页链接
     * @return string
     */
    public function getLandingUrlAndroid(): ?string
    {
        return $this->landingUrlAndroid;
    }

    /**
     * 安卓落地页链接
     * @param string $landingUrlAndroid
     * @return self
     */
    public function setLandingUrlAndroid(?string $landingUrlAndroid): self
    {
        $this->landingUrlAndroid = $landingUrlAndroid;
        return $this;
    }

    /**
     * @return string
     */
    public function getLandingUrlHarmony(): ?string
    {
        return $this->landingUrlHarmony;
    }

    /**
     * @param string $landingUrlHarmony
     * @return self
     */
    public function setLandingUrlHarmony(?string $landingUrlHarmony): self
    {
        $this->landingUrlHarmony = $landingUrlHarmony;
        return $this;
    }

    /**
     * iOS落地页链接
     * @return string
     */
    public function getLandingUrlIos(): ?string
    {
        return $this->landingUrlIos;
    }

    /**
     * iOS落地页链接
     * @param string $landingUrlIos
     * @return self
     */
    public function setLandingUrlIos(?string $landingUrlIos): self
    {
        $this->landingUrlIos = $landingUrlIos;
        return $this;
    }

    /**
     * link组件类别 1 = 落地页 2 = 短视频小程序 3 = 原生落地页 4 = 直播落地页 5 = 直播小程序 6 = 直播下载组件 7 = 直播引流组件
     * @return int
     */
    public function getLinkType(): ?int
    {
        return $this->linkType;
    }

    /**
     * link组件类别 1 = 落地页 2 = 短视频小程序 3 = 原生落地页 4 = 直播落地页 5 = 直播小程序 6 = 直播下载组件 7 = 直播引流组件
     * @param int $linkType
     * @return self
     */
    public function setLinkType(?int $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }

    /**
     * 组件状态 0 = 待送审 1 = 有效 2 =审核中 3 = 审核失败
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 组件状态 0 = 待送审 1 = 有效 2 =审核中 3 = 审核失败
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditRejectReason !== null) {
            $result['audit_reject_reason'] = $this->auditRejectReason;
        }
        if ($this->componentId !== null) {
            $result['component_id'] = $this->componentId;
        }
        if ($this->downloadUrlAndroid !== null) {
            $result['download_url_android'] = $this->downloadUrlAndroid;
        }
        if ($this->downloadUrlHarmony !== null) {
            $result['download_url_harmony'] = $this->downloadUrlHarmony;
        }
        if ($this->downloadUrlIos !== null) {
            $result['download_url_ios'] = $this->downloadUrlIos;
        }
        if ($this->landingUrlAndroid !== null) {
            $result['landing_url_android'] = $this->landingUrlAndroid;
        }
        if ($this->landingUrlHarmony !== null) {
            $result['landing_url_harmony'] = $this->landingUrlHarmony;
        }
        if ($this->landingUrlIos !== null) {
            $result['landing_url_ios'] = $this->landingUrlIos;
        }
        if ($this->linkType !== null) {
            $result['link_type'] = $this->linkType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_reject_reason'] ?? null) !== null) {
            $obj->auditRejectReason = (string) $v;
        }
        if (($v = $data['component_id'] ?? null) !== null) {
            $obj->componentId = (int) $v;
        }
        if (($v = $data['download_url_android'] ?? null) !== null) {
            $obj->downloadUrlAndroid = (string) $v;
        }
        if (($v = $data['download_url_harmony'] ?? null) !== null) {
            $obj->downloadUrlHarmony = (string) $v;
        }
        if (($v = $data['download_url_ios'] ?? null) !== null) {
            $obj->downloadUrlIos = (string) $v;
        }
        if (($v = $data['landing_url_android'] ?? null) !== null) {
            $obj->landingUrlAndroid = (string) $v;
        }
        if (($v = $data['landing_url_harmony'] ?? null) !== null) {
            $obj->landingUrlHarmony = (string) $v;
        }
        if (($v = $data['landing_url_ios'] ?? null) !== null) {
            $obj->landingUrlIos = (string) $v;
        }
        if (($v = $data['link_type'] ?? null) !== null) {
            $obj->linkType = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
