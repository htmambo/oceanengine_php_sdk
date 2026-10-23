#!/usr/bin/env python3
"""Sync metadata writers shared by the go2php translators.

The PHP package never hard-codes the upstream version: it is derived from the
Go SDK checkout (``config/configuration.go``) and written to
``src/Version.php``. The same numbers are mirrored into
``composer.json`` under ``extra.upstream`` so composer tooling can report the
upstream provenance of the package.
"""

import datetime
import json
import os
import re

import common

VERSION_PHP_TEMPLATE = """<?php
declare(strict_types=1);
namespace Oceanengine;
/** 由 tools/go2php 同步脚本自动生成，请勿手工编辑 */
final class Version
{{
    public const VERSION = '{version}';            // 来自上游 config/configuration.go
    public const UPSTREAM_REPO = '{repo}';
    public const UPSTREAM_COMMIT = '{commit}';
    public const SYNCED_AT = '{synced_at}';
}}
"""

COMPOSER_REL = "composer.json"
VERSION_PHP_REL = os.path.join("src", "Version.php")


def now_iso():
    """Current local time as an ISO8601 string."""
    return datetime.datetime.now().astimezone().isoformat(timespec="seconds")


RE_PHP_CONST = re.compile(r"public const (\w+) = '([^']*)';")


def _previous_synced_at(path, version, repo, commit):
    """SYNCED_AT of an existing Version.php describing the same upstream state."""
    if not os.path.isfile(path):
        return None
    try:
        with open(path, "r", encoding="utf-8") as fh:
            src = fh.read()
    except OSError:
        return None
    values = dict(RE_PHP_CONST.findall(src))
    if (
        values.get("VERSION") != version
        or values.get("UPSTREAM_REPO") != repo
        or values.get("UPSTREAM_COMMIT") != commit
    ):
        return None
    return values.get("SYNCED_AT")


def write_version_php(out_root, version, repo, commit, synced_at=None):
    """Write ``src/Version.php`` and return its path.

    ``SYNCED_AT`` marks when the current upstream state was synced, so it is
    kept as-is while version/repo/commit are unchanged; that keeps a repeated
    run byte-identical.
    """
    path = os.path.join(out_root, VERSION_PHP_REL)
    if synced_at is None:
        synced_at = _previous_synced_at(path, version, repo, commit) or now_iso()
    os.makedirs(os.path.dirname(path), exist_ok=True)
    with open(path, "w", encoding="utf-8") as fh:
        fh.write(VERSION_PHP_TEMPLATE.format(
            version=version,
            repo=repo,
            commit=commit,
            synced_at=synced_at,
        ))
    return path


def update_composer_extra(out_root, version, repo, commit, synced_at=None):
    """Refresh ``extra.upstream`` in composer.json, preserving other fields."""
    path = os.path.join(out_root, COMPOSER_REL)
    if not os.path.isfile(path):
        return None
    with open(path, "r", encoding="utf-8") as fh:
        data = json.load(fh)
    extra = data.get("extra")
    if not isinstance(extra, dict):
        extra = {}
    upstream = extra.get("upstream")
    if synced_at is None:
        previous = upstream.get("synced_at") if isinstance(upstream, dict) else None
        unchanged = (
            isinstance(upstream, dict)
            and upstream.get("repo") == repo
            and upstream.get("version") == version
            and upstream.get("commit") == commit
        )
        synced_at = previous if unchanged and previous else now_iso()
    extra["upstream"] = {
        "repo": repo,
        "version": version,
        "commit": commit,
        "synced_at": synced_at,
    }
    data["extra"] = extra
    with open(path, "w", encoding="utf-8") as fh:
        json.dump(data, fh, indent=4, ensure_ascii=False)
        fh.write("\n")
    return path


def _previous_synced_at_composer(out_root, version, repo, commit):
    """synced_at of an existing composer.json describing the same upstream state."""
    path = os.path.join(out_root, COMPOSER_REL)
    if not os.path.isfile(path):
        return None
    try:
        with open(path, "r", encoding="utf-8") as fh:
            data = json.load(fh)
    except (OSError, ValueError):
        return None
    upstream = (data.get("extra") or {}).get("upstream")
    if not isinstance(upstream, dict):
        return None
    if (
        upstream.get("repo") != repo
        or upstream.get("version") != version
        or upstream.get("commit") != commit
    ):
        return None
    return upstream.get("synced_at")


def sync_metadata(argv=None):
    """Write src/Version.php and refresh composer.json from the upstream checkout."""
    opts = common.parse_common_args(argv)
    out = opts["out"]
    version = common.upstream_version(argv)
    repo = common.upstream_repo_url(argv)
    commit = common.upstream_commit(argv)
    synced_at = (
        _previous_synced_at(
            os.path.join(out, VERSION_PHP_REL), version, repo, commit
        )
        or _previous_synced_at_composer(out, version, repo, commit)
        or now_iso()
    )
    write_version_php(out, version, repo, commit, synced_at)
    update_composer_extra(out, version, repo, commit, synced_at)
    return {"version": version, "repo": repo, "commit": commit, "synced_at": synced_at}
