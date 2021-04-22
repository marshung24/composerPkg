練習GitHub+Composer+Packagist
===

[![Latest Stable Version](https://poser.pugx.org/marshung/my-composer/v)](//packagist.org/packages/marshung/my-composer) [![Total Downloads](https://poser.pugx.org/marshung/my-composer/downloads)](//packagist.org/packages/marshung/my-composer) [![Latest Unstable Version](https://poser.pugx.org/marshung/my-composer/v/unstable)](//packagist.org/packages/marshung/my-composer) [![License](https://poser.pugx.org/marshung/my-composer/license)](//packagist.org/packages/marshung/my-composer)
> 動態Badges (poser.pugx.org)


<img alt="plastic" src="https://shields.io/badge/stable-0.7-yellow"> <img alt="plastic" src="https://shields.io/badge/PHP-=7.0-green"> <img  lt="plastic" src="https://shields.io/badge/license-mars-blue"> <img alt="plastic" src="https://shields.io/badge/.lock-committed-lightgrey">
> 靜態Badges (shields.io)

# 練習內容
- Git Repository 建立
- composer套件架構
- 發佈到 packagist.org
- 安裝並使用
- READMD編寫


# Git Repository 建立
##  在GitHub上建立Repository
## clone回本地端
```
$ cd ~/work/github/
$ git clone git@github.com:marshung24/my-composer.git
```

## 初始化composer.json
```
$ cd ~/work/github/my-composer
$ composer init
```

## 建立README.md

## 推送回GitHub
```
$ git add ./
$ git commit -m 'init package'
$ git push origin master
```
> 最后一步需要加origin master参数的原因是空仓库是没有分支的，所以我们需要强制推送本地的master到远端的master，在这之后可以直接用git push命令推送而不需要加后面的参数了。

# composer套件架構
## composer.json
- 套件根目錄建立 composer.json
```json
{
    "name": "marshung/my-composer",
    "description": "Learning Install GitHub Project By Composer",
    "homepage": "https://github.com/marshung24/my-composer",
    "type": "library",
    "license": "MIT",
    "authors": [
        {
            "name": "Mars Hung",
            "email": "tfaredxj@gmail.com"
        }
    ],
    "autoload": {
        "psr-4": { "marshung\\": "src" }
    },
    "minimum-stability": "stable",
    "require": {}
}
```

## 建立class
```
$ cd ~/work/github/my-composer/
$ mkdir src
$ cd src/
$ mkdir hello
$ cd hello/
$ touch HelloWorld.php
```

```php=
<?php

namespace marshung\hello;

class HelloWorld
{
	private $name;
	public function __construct($name = 'World') {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function hello() {
		return 'Hello ' . $this->name . '!';
	}
}
```

## 提交前測試程式是否有問題
```
$ cd ~/work/github/my-composer/
$ composer install
```

## 建立測試文件
```
$ cd ~/work/github/my-composer/
$ mkdir test
$ cd test/
$ touch test.php
```

```php=
<?php
require_once "../vendor/autoload.php";

$obj = new \marshung\hello\HelloWorld();
echo $obj->hello();

echo "\n";
$obj = new \marshung\hello\HelloWorld('My Goddess');
echo $obj->hello();

```


# 發佈到 packagist.org
訪問Packagist主頁，確認自己已經登錄，然後點擊右上角大大的Submit Package，然後填入我們創建的倉庫的地址，點擊Check，然後沒問題，再點擊Submit。
> 網址：https://packagist.org/

# 設定 GitHub Service Hook 

# 安裝並使用
```
$ cd ~/work/github/test
$ composer require marshung/my-composer
```

# 版本管理
## Composer的版本管理
- 開發版： branch
  - 如分支名為 mastar 時，版本號為 dev-master
- 正式版： tag
  - 格式: major.minor.build
    - major: [int] 當做了不相容的修改
    - minor: [int] 當做了向下相容的功能性新增
    - build: [int] 當做了向下相容的問題修正
    - 
## 查看現在分支
```
$ cd ~/work/github/my-composer
$ git branch
```
## 建立新分支0.1(dev)
```
$ git checkout -b 0.1
$ git commit -m 'update readme, add Hello class demo'
$ git push origin 0.1
```

## 建立stable版本(tag)
```
$ git tag 0.1.0
$ git push --tags
```

# 參考
- [使用GitHub，Composer，Packagist管理公开的PHP包（Step By Step）](https://rivsen.github.io/post/how-to-publish-package-to-packagist-using-github-and-composer-step-by-step)
- [軟體版本號](https://zh.wikipedia.org/wiki/%E8%BB%9F%E4%BB%B6%E7%89%88%E6%9C%AC%E8%99%9F)

# 記錄
- 20180414: MarsHung 建立專案
- 20180415: MarsHung 完成初版
- 20210423: MarsHung 
  - 整理程式
  - 增加從private repo安裝composer方法