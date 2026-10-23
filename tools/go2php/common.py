#!/usr/bin/env python3
"""Shared helpers for the go2php translators (models / api / client / parity).

Every tool in this directory works on two directories:

  * upstream: the Go SDK checkout (ad_open_sdk_go)
  * out:     the PHP package root (ad_open_sdk_php)

Both are resolved from the command line first (``--upstream`` / ``--out``),
then from the environment (``OCEANENGINE_UPSTREAM`` / ``OCEANENGINE_OUT``),
and finally from the default layout (the upstream repo lives next to this
package). The defaults make every tool work from any working directory.
"""

import os
import re
import subprocess
import sys

ENV_UPSTREAM = "OCEANENGINE_UPSTREAM"
ENV_OUT = "OCEANENGINE_OUT"

DEFAULT_UPSTREAM_REPO_URL = "https://github.com/oceanengine/ad_open_sdk_go"
DEFAULT_UPSTREAM_DIR_NAME = "ad_open_sdk_go"

GO_CONFIG_REL = os.path.join("config", "configuration.go")


def repo_root():
    """Absolute path of the PHP package root (the directory holding src/)."""
    return os.path.dirname(os.path.dirname(os.path.dirname(os.path.abspath(__file__))))


def _scan_argv(argv):
    """Extract the shared options from an argv list.

    Accepts both ``--upstream PATH`` and ``--upstream=PATH``; unknown options
    are ignored so each tool can still own its own flags.
    """
    if argv is None:
        argv = sys.argv[1:]
    values = {}
    i = 0
    while i < len(argv):
        arg = argv[i]
        for name in ("upstream", "out"):
            flag = "--" + name
            if arg == flag:
                if i + 1 < len(argv):
                    values[name] = argv[i + 1]
                i += 2
                break
            if arg.startswith(flag + "="):
                values[name] = arg[len(flag) + 1:]
                i += 1
                break
        else:
            i += 1
    return values


def _resolve(value, env_name, default):
    if value:
        return os.path.abspath(os.path.expanduser(value))
    env = os.environ.get(env_name)
    if env:
        return os.path.abspath(os.path.expanduser(env))
    return os.path.abspath(default)


def parse_common_args(argv=None):
    """Parse the options shared by every go2php tool.

    Returns a dict with the resolved absolute paths ``upstream`` and ``out``.
    """
    args = _scan_argv(argv)
    upstream = _resolve(
        args.get("upstream"),
        ENV_UPSTREAM,
        os.path.join(repo_root(), "..", DEFAULT_UPSTREAM_DIR_NAME),
    )
    out = _resolve(args.get("out"), ENV_OUT, repo_root())
    return {"upstream": upstream, "out": out}


def upstream_root(argv=None):
    """Absolute path of the upstream Go SDK checkout."""
    return parse_common_args(argv)["upstream"]


def out_root(argv=None):
    """Absolute path of the PHP package root the translators write into."""
    return parse_common_args(argv)["out"]


RE_VERSION = re.compile(r'^\s*const\s+Version\s*=\s*"([^"]+)"', re.M)


def upstream_version(argv=None):
    """Version declared by the upstream Go SDK (config/configuration.go)."""
    path = os.path.join(upstream_root(argv), GO_CONFIG_REL)
    try:
        with open(path, "r", encoding="utf-8") as fh:
            src = fh.read()
    except OSError:
        return "unknown"
    m = RE_VERSION.search(src)
    return m.group(1) if m else "unknown"


def _git(args, cwd):
    try:
        out = subprocess.run(
            ["git"] + args,
            cwd=cwd,
            stdout=subprocess.PIPE,
            stderr=subprocess.DEVNULL,
            check=True,
        )
    except (OSError, subprocess.CalledProcessError):
        return None
    return out.stdout.decode("utf-8", "replace").strip()


def upstream_commit(argv=None):
    """HEAD commit of the upstream checkout, or ``unknown``."""
    sha = _git(["rev-parse", "HEAD"], upstream_root(argv))
    return sha or "unknown"


def upstream_repo_url(argv=None):
    """``origin`` remote of the upstream checkout, or the canonical URL."""
    url = _git(["remote", "get-url", "origin"], upstream_root(argv))
    return url or DEFAULT_UPSTREAM_REPO_URL
