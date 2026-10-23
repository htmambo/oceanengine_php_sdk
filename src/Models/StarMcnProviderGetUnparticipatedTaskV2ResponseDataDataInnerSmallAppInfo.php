<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetUnparticipatedTaskV2ResponseDataDataInnerSmallAppInfo implements \JsonSerializable
{
    /**
     * 小程序id
     * @var string
     */
    protected ?string $appId = null;

    /**
     * 小程序名称
     * @var string
     */
    protected ?string $appName = null;

    /**
     * 小程序id
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * 小程序id
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 小程序名称
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * 小程序名称
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        return $obj;
    }
}
