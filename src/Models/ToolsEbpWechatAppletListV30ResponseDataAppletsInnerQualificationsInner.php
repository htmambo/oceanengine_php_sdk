<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpWechatAppletListV30ResponseDataAppletsInnerQualificationsInner implements \JsonSerializable
{
    /**
     * 软件简称
     * @var string
     */
    protected ?string $abbr = null;

    /**
     * 安卓应用返回枚举类型
     * @var int
     */
    protected ?int $appQualificationType = null;

    /**
     * 授权图片
     * @var string[]
     */
    protected ?array $authorizedImageUrl = null;

    /**
     * 著作书图片
     * @var string[]
     */
    protected ?array $copyrightImageUrl = null;

    /**
     * 著作权人
     * @var string
     */
    protected ?string $copyrightOwner = null;

    /**
     * @var string[]
     */
    protected ?array $imageList = null;

    /**
     * 软件名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 资质拥有类型
     * @var int
     */
    protected ?int $ownType = null;

    /**
     * @var int
     */
    protected ?int $qualificationId = null;

    /**
     * @var int
     */
    protected ?int $qualificationIdType = null;

    /**
     * 资质类型，展示名称
     * @var string
     */
    protected ?string $qualificationShowName = null;

    /**
     * @var int
     */
    protected ?int $qualificationType = null;

    /**
     * 登记号
     * @var string
     */
    protected ?string $registNo = null;

    /**
     * 状态
     * @var int
     */
    protected ?int $status = null;

    /**
     * @var int
     */
    protected ?int $version = null;

    /**
     * 软件简称
     * @return string
     */
    public function getAbbr(): ?string
    {
        return $this->abbr;
    }

    /**
     * 软件简称
     * @param string $abbr
     * @return self
     */
    public function setAbbr(?string $abbr): self
    {
        $this->abbr = $abbr;
        return $this;
    }

    /**
     * 安卓应用返回枚举类型
     * @return int
     */
    public function getAppQualificationType(): ?int
    {
        return $this->appQualificationType;
    }

    /**
     * 安卓应用返回枚举类型
     * @param int $appQualificationType
     * @return self
     */
    public function setAppQualificationType(?int $appQualificationType): self
    {
        $this->appQualificationType = $appQualificationType;
        return $this;
    }

    /**
     * 授权图片
     * @return string[]
     */
    public function getAuthorizedImageUrl(): ?array
    {
        return $this->authorizedImageUrl;
    }

    /**
     * 授权图片
     * @param string[] $authorizedImageUrl
     * @return self
     */
    public function setAuthorizedImageUrl(?array $authorizedImageUrl): self
    {
        $this->authorizedImageUrl = $authorizedImageUrl;
        return $this;
    }

    /**
     * 著作书图片
     * @return string[]
     */
    public function getCopyrightImageUrl(): ?array
    {
        return $this->copyrightImageUrl;
    }

    /**
     * 著作书图片
     * @param string[] $copyrightImageUrl
     * @return self
     */
    public function setCopyrightImageUrl(?array $copyrightImageUrl): self
    {
        $this->copyrightImageUrl = $copyrightImageUrl;
        return $this;
    }

    /**
     * 著作权人
     * @return string
     */
    public function getCopyrightOwner(): ?string
    {
        return $this->copyrightOwner;
    }

    /**
     * 著作权人
     * @param string $copyrightOwner
     * @return self
     */
    public function setCopyrightOwner(?string $copyrightOwner): self
    {
        $this->copyrightOwner = $copyrightOwner;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImageList(): ?array
    {
        return $this->imageList;
    }

    /**
     * @param string[] $imageList
     * @return self
     */
    public function setImageList(?array $imageList): self
    {
        $this->imageList = $imageList;
        return $this;
    }

    /**
     * 软件名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 软件名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 资质拥有类型
     * @return int
     */
    public function getOwnType(): ?int
    {
        return $this->ownType;
    }

    /**
     * 资质拥有类型
     * @param int $ownType
     * @return self
     */
    public function setOwnType(?int $ownType): self
    {
        $this->ownType = $ownType;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualificationId(): ?int
    {
        return $this->qualificationId;
    }

    /**
     * @param int $qualificationId
     * @return self
     */
    public function setQualificationId(?int $qualificationId): self
    {
        $this->qualificationId = $qualificationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualificationIdType(): ?int
    {
        return $this->qualificationIdType;
    }

    /**
     * @param int $qualificationIdType
     * @return self
     */
    public function setQualificationIdType(?int $qualificationIdType): self
    {
        $this->qualificationIdType = $qualificationIdType;
        return $this;
    }

    /**
     * 资质类型，展示名称
     * @return string
     */
    public function getQualificationShowName(): ?string
    {
        return $this->qualificationShowName;
    }

    /**
     * 资质类型，展示名称
     * @param string $qualificationShowName
     * @return self
     */
    public function setQualificationShowName(?string $qualificationShowName): self
    {
        $this->qualificationShowName = $qualificationShowName;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualificationType(): ?int
    {
        return $this->qualificationType;
    }

    /**
     * @param int $qualificationType
     * @return self
     */
    public function setQualificationType(?int $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * 登记号
     * @return string
     */
    public function getRegistNo(): ?string
    {
        return $this->registNo;
    }

    /**
     * 登记号
     * @param string $registNo
     * @return self
     */
    public function setRegistNo(?string $registNo): self
    {
        $this->registNo = $registNo;
        return $this;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 状态
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * @param int $version
     * @return self
     */
    public function setVersion(?int $version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->abbr !== null) {
            $result['abbr'] = $this->abbr;
        }
        if ($this->appQualificationType !== null) {
            $result['app_qualification_type'] = $this->appQualificationType;
        }
        if ($this->authorizedImageUrl !== null) {
            $result['authorized_image_url'] = $this->authorizedImageUrl;
        }
        if ($this->copyrightImageUrl !== null) {
            $result['copyright_image_url'] = $this->copyrightImageUrl;
        }
        if ($this->copyrightOwner !== null) {
            $result['copyright_owner'] = $this->copyrightOwner;
        }
        if ($this->imageList !== null) {
            $result['image_list'] = $this->imageList;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->ownType !== null) {
            $result['own_type'] = $this->ownType;
        }
        if ($this->qualificationId !== null) {
            $result['qualification_id'] = $this->qualificationId;
        }
        if ($this->qualificationIdType !== null) {
            $result['qualification_id_type'] = $this->qualificationIdType;
        }
        if ($this->qualificationShowName !== null) {
            $result['qualification_show_name'] = $this->qualificationShowName;
        }
        if ($this->qualificationType !== null) {
            $result['qualification_type'] = $this->qualificationType;
        }
        if ($this->registNo !== null) {
            $result['regist_no'] = $this->registNo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['abbr'] ?? null) !== null) {
            $obj->abbr = (string) $v;
        }
        if (($v = $data['app_qualification_type'] ?? null) !== null) {
            $obj->appQualificationType = (int) $v;
        }
        if (($v = $data['authorized_image_url'] ?? null) !== null && is_array($v)) {
            $obj->authorizedImageUrl = $v;
        }
        if (($v = $data['copyright_image_url'] ?? null) !== null && is_array($v)) {
            $obj->copyrightImageUrl = $v;
        }
        if (($v = $data['copyright_owner'] ?? null) !== null) {
            $obj->copyrightOwner = (string) $v;
        }
        if (($v = $data['image_list'] ?? null) !== null && is_array($v)) {
            $obj->imageList = $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['own_type'] ?? null) !== null) {
            $obj->ownType = (int) $v;
        }
        if (($v = $data['qualification_id'] ?? null) !== null) {
            $obj->qualificationId = (int) $v;
        }
        if (($v = $data['qualification_id_type'] ?? null) !== null) {
            $obj->qualificationIdType = (int) $v;
        }
        if (($v = $data['qualification_show_name'] ?? null) !== null) {
            $obj->qualificationShowName = (string) $v;
        }
        if (($v = $data['qualification_type'] ?? null) !== null) {
            $obj->qualificationType = (int) $v;
        }
        if (($v = $data['regist_no'] ?? null) !== null) {
            $obj->registNo = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (int) $v;
        }
        return $obj;
    }
}
