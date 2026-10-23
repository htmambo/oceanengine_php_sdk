<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskGetV30ResponseDataStarTaskAlbumMicroAppInfo implements \JsonSerializable
{
    /**
     * 星图任务内的字节小程序ID
     * @var string
     */
    protected ?string $microAppId = null;

    /**
     * 字节小程序名称，即星图任务内的组件标题
     * @var string
     */
    protected ?string $microAppName = null;

    /**
     * 小程序页面地址
     * @var string
     */
    protected ?string $microAppPath = null;

    /**
     * 短剧剧目id
     * @var string
     */
    protected ?string $starTaskAlbumId = null;

    /**
     * 短剧剧目名称
     * @var string
     */
    protected ?string $starTaskAlbumName = null;

    /**
     * 星图任务内的字节小程序ID
     * @return string
     */
    public function getMicroAppId(): ?string
    {
        return $this->microAppId;
    }

    /**
     * 星图任务内的字节小程序ID
     * @param string $microAppId
     * @return self
     */
    public function setMicroAppId(?string $microAppId): self
    {
        $this->microAppId = $microAppId;
        return $this;
    }

    /**
     * 字节小程序名称，即星图任务内的组件标题
     * @return string
     */
    public function getMicroAppName(): ?string
    {
        return $this->microAppName;
    }

    /**
     * 字节小程序名称，即星图任务内的组件标题
     * @param string $microAppName
     * @return self
     */
    public function setMicroAppName(?string $microAppName): self
    {
        $this->microAppName = $microAppName;
        return $this;
    }

    /**
     * 小程序页面地址
     * @return string
     */
    public function getMicroAppPath(): ?string
    {
        return $this->microAppPath;
    }

    /**
     * 小程序页面地址
     * @param string $microAppPath
     * @return self
     */
    public function setMicroAppPath(?string $microAppPath): self
    {
        $this->microAppPath = $microAppPath;
        return $this;
    }

    /**
     * 短剧剧目id
     * @return string
     */
    public function getStarTaskAlbumId(): ?string
    {
        return $this->starTaskAlbumId;
    }

    /**
     * 短剧剧目id
     * @param string $starTaskAlbumId
     * @return self
     */
    public function setStarTaskAlbumId(?string $starTaskAlbumId): self
    {
        $this->starTaskAlbumId = $starTaskAlbumId;
        return $this;
    }

    /**
     * 短剧剧目名称
     * @return string
     */
    public function getStarTaskAlbumName(): ?string
    {
        return $this->starTaskAlbumName;
    }

    /**
     * 短剧剧目名称
     * @param string $starTaskAlbumName
     * @return self
     */
    public function setStarTaskAlbumName(?string $starTaskAlbumName): self
    {
        $this->starTaskAlbumName = $starTaskAlbumName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->microAppId !== null) {
            $result['micro_app_id'] = $this->microAppId;
        }
        if ($this->microAppName !== null) {
            $result['micro_app_name'] = $this->microAppName;
        }
        if ($this->microAppPath !== null) {
            $result['micro_app_path'] = $this->microAppPath;
        }
        if ($this->starTaskAlbumId !== null) {
            $result['star_task_album_id'] = $this->starTaskAlbumId;
        }
        if ($this->starTaskAlbumName !== null) {
            $result['star_task_album_name'] = $this->starTaskAlbumName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['micro_app_id'] ?? null) !== null) {
            $obj->microAppId = (string) $v;
        }
        if (($v = $data['micro_app_name'] ?? null) !== null) {
            $obj->microAppName = (string) $v;
        }
        if (($v = $data['micro_app_path'] ?? null) !== null) {
            $obj->microAppPath = (string) $v;
        }
        if (($v = $data['star_task_album_id'] ?? null) !== null) {
            $obj->starTaskAlbumId = (string) $v;
        }
        if (($v = $data['star_task_album_name'] ?? null) !== null) {
            $obj->starTaskAlbumName = (string) $v;
        }
        return $obj;
    }
}
