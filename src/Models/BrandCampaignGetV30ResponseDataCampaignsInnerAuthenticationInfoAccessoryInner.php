<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoAccessoryInner implements \JsonSerializable
{
    /**
     * 附件类型
     * @var int
     */
    protected ?int $accessoryType = null;

    /**
     * 创建人的账号名称
     * @var string
     */
    protected ?string $createUserName = null;

    /**
     * 文件的下载链接供外网使用
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 附件名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 附件key
     * @var string
     */
    protected ?string $objectKey = null;

    /**
     * 附件备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 附件地址
     * @var string
     */
    protected ?string $url = null;

    /**
     * 附件类型
     * @return int
     */
    public function getAccessoryType(): ?int
    {
        return $this->accessoryType;
    }

    /**
     * 附件类型
     * @param int $accessoryType
     * @return self
     */
    public function setAccessoryType(?int $accessoryType): self
    {
        $this->accessoryType = $accessoryType;
        return $this;
    }

    /**
     * 创建人的账号名称
     * @return string
     */
    public function getCreateUserName(): ?string
    {
        return $this->createUserName;
    }

    /**
     * 创建人的账号名称
     * @param string $createUserName
     * @return self
     */
    public function setCreateUserName(?string $createUserName): self
    {
        $this->createUserName = $createUserName;
        return $this;
    }

    /**
     * 文件的下载链接供外网使用
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 文件的下载链接供外网使用
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 附件名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 附件名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 附件key
     * @return string
     */
    public function getObjectKey(): ?string
    {
        return $this->objectKey;
    }

    /**
     * 附件key
     * @param string $objectKey
     * @return self
     */
    public function setObjectKey(?string $objectKey): self
    {
        $this->objectKey = $objectKey;
        return $this;
    }

    /**
     * 附件备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 附件备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * 附件地址
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 附件地址
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accessoryType !== null) {
            $result['accessory_type'] = $this->accessoryType;
        }
        if ($this->createUserName !== null) {
            $result['create_user_name'] = $this->createUserName;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->objectKey !== null) {
            $result['object_key'] = $this->objectKey;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['accessory_type'] ?? null) !== null) {
            $obj->accessoryType = (int) $v;
        }
        if (($v = $data['create_user_name'] ?? null) !== null) {
            $obj->createUserName = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['object_key'] ?? null) !== null) {
            $obj->objectKey = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
