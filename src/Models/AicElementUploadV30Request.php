<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicElementUploadV30Request implements \JsonSerializable
{
    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\AicElementUploadV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 元素名称，支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50
     * @var string
     */
    protected ?string $elementName = null;

    /**
     * @var \Oceanengine\Models\AicElementUploadV30ElementType
     */
    protected ?string $elementType = null;

    /**
     * 上传二进制数据，如果在相同的路径下有相同的视频即为更新， 视频数据：支持mp4、mpeg、mov，单视频时长不超过10min，大小＜500M, 图片数据：jpg、jpeg、png、webp、bmp，大小<150MB 字体数据：ttf格式，大小<150MB 音乐数据：mp3、wav、flac、aac，大小<150MB,时长不超过5min
     * @var mixed
     */
    protected $file = null;

    /**
     * 元素存储的文件夹路径，确保输入路径存在 示例：/数码/电脑 层级：2，最大层级限制：10，默认根目录
     * @var string
     */
    protected ?string $pathName = null;

    /**
     * @var \Oceanengine\Models\AicElementUploadV30UseAs
     */
    protected ?string $useAs = null;

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementUploadV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\AicElementUploadV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 元素名称，支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50
     * @return string
     */
    public function getElementName(): ?string
    {
        return $this->elementName;
    }

    /**
     * 元素名称，支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50
     * @param string $elementName
     * @return self
     */
    public function setElementName(?string $elementName): self
    {
        $this->elementName = $elementName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementUploadV30ElementType
     */
    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    /**
     * @param \Oceanengine\Models\AicElementUploadV30ElementType $elementType
     * @return self
     */
    public function setElementType(?string $elementType): self
    {
        $this->elementType = $elementType;
        return $this;
    }

    /**
     * 上传二进制数据，如果在相同的路径下有相同的视频即为更新， 视频数据：支持mp4、mpeg、mov，单视频时长不超过10min，大小＜500M, 图片数据：jpg、jpeg、png、webp、bmp，大小<150MB 字体数据：ttf格式，大小<150MB 音乐数据：mp3、wav、flac、aac，大小<150MB,时长不超过5min
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * 上传二进制数据，如果在相同的路径下有相同的视频即为更新， 视频数据：支持mp4、mpeg、mov，单视频时长不超过10min，大小＜500M, 图片数据：jpg、jpeg、png、webp、bmp，大小<150MB 字体数据：ttf格式，大小<150MB 音乐数据：mp3、wav、flac、aac，大小<150MB,时长不超过5min
     * @param mixed $file
     * @return self
     */
    public function setFile($file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * 元素存储的文件夹路径，确保输入路径存在 示例：/数码/电脑 层级：2，最大层级限制：10，默认根目录
     * @return string
     */
    public function getPathName(): ?string
    {
        return $this->pathName;
    }

    /**
     * 元素存储的文件夹路径，确保输入路径存在 示例：/数码/电脑 层级：2，最大层级限制：10，默认根目录
     * @param string $pathName
     * @return self
     */
    public function setPathName(?string $pathName): self
    {
        $this->pathName = $pathName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementUploadV30UseAs
     */
    public function getUseAs(): ?string
    {
        return $this->useAs;
    }

    /**
     * @param \Oceanengine\Models\AicElementUploadV30UseAs $useAs
     * @return self
     */
    public function setUseAs(?string $useAs): self
    {
        $this->useAs = $useAs;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->elementName !== null) {
            $result['element_name'] = $this->elementName;
        }
        if ($this->elementType !== null) {
            $result['element_type'] = $this->elementType;
        }
        if ($this->file !== null) {
            $result['file'] = $this->file;
        }
        if ($this->pathName !== null) {
            $result['path_name'] = $this->pathName;
        }
        if ($this->useAs !== null) {
            $result['use_as'] = $this->useAs;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['element_name'] ?? null) !== null) {
            $obj->elementName = (string) $v;
        }
        if (($v = $data['element_type'] ?? null) !== null) {
            $obj->elementType = (string) $v;
        }
        if (($v = $data['file'] ?? null) !== null) {
            $obj->file = $v;
        }
        if (($v = $data['path_name'] ?? null) !== null) {
            $obj->pathName = (string) $v;
        }
        if (($v = $data['use_as'] ?? null) !== null) {
            $obj->useAs = (string) $v;
        }
        return $obj;
    }
}
