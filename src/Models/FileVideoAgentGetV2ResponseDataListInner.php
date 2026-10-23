<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoAgentGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 素材的文件名
     * @var string
     */
    protected ?string $filename = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $id = null;

    /**
     * 视频md5值
     * @var string
     */
    protected ?string $signature = null;

    /**
     * 素材来源，详见【附录-素材来源】
     * @var string
     */
    protected ?string $source = null;

    /**
     * 视频地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
     * @var string
     */
    protected ?string $url = null;

    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 素材的文件名
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * 素材的文件名
     * @param string $filename
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * 视频ID
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 视频ID
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 视频md5值
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * 视频md5值
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * 素材来源，详见【附录-素材来源】
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * 素材来源，详见【附录-素材来源】
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * 视频地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 视频地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['filename'] ?? null) !== null) {
            $obj->filename = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
