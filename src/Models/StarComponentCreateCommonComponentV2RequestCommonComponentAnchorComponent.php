<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentCreateCommonComponentV2RequestCommonComponentAnchorComponent implements \JsonSerializable
{
    /**
     * 自定义标题
     * @var string
     */
    protected ?string $anchorTitle = null;

    /**
     * 小程序id
     * @var string
     */
    protected ?string $microAppId = null;

    /**
     * 小程序名称
     * @var string
     */
    protected ?string $microAppName = null;

    /**
     * 起始页
     * @var string
     */
    protected ?string $startPath = null;

    /**
     * 自定义标题
     * @return string
     */
    public function getAnchorTitle(): ?string
    {
        return $this->anchorTitle;
    }

    /**
     * 自定义标题
     * @param string $anchorTitle
     * @return self
     */
    public function setAnchorTitle(?string $anchorTitle): self
    {
        $this->anchorTitle = $anchorTitle;
        return $this;
    }

    /**
     * 小程序id
     * @return string
     */
    public function getMicroAppId(): ?string
    {
        return $this->microAppId;
    }

    /**
     * 小程序id
     * @param string $microAppId
     * @return self
     */
    public function setMicroAppId(?string $microAppId): self
    {
        $this->microAppId = $microAppId;
        return $this;
    }

    /**
     * 小程序名称
     * @return string
     */
    public function getMicroAppName(): ?string
    {
        return $this->microAppName;
    }

    /**
     * 小程序名称
     * @param string $microAppName
     * @return self
     */
    public function setMicroAppName(?string $microAppName): self
    {
        $this->microAppName = $microAppName;
        return $this;
    }

    /**
     * 起始页
     * @return string
     */
    public function getStartPath(): ?string
    {
        return $this->startPath;
    }

    /**
     * 起始页
     * @param string $startPath
     * @return self
     */
    public function setStartPath(?string $startPath): self
    {
        $this->startPath = $startPath;
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
        if ($this->microAppId !== null) {
            $result['micro_app_id'] = $this->microAppId;
        }
        if ($this->microAppName !== null) {
            $result['micro_app_name'] = $this->microAppName;
        }
        if ($this->startPath !== null) {
            $result['start_path'] = $this->startPath;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_title'] ?? null) !== null) {
            $obj->anchorTitle = (string) $v;
        }
        if (($v = $data['micro_app_id'] ?? null) !== null) {
            $obj->microAppId = (string) $v;
        }
        if (($v = $data['micro_app_name'] ?? null) !== null) {
            $obj->microAppName = (string) $v;
        }
        if (($v = $data['start_path'] ?? null) !== null) {
            $obj->startPath = (string) $v;
        }
        return $obj;
    }
}
