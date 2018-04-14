練習GitHub+Composer+packagist
===

> 使用GitHub，Composer，Packagist管理公开的PHP包（Step By Step）
> https://rivsen.github.io/post/how-to-publish-package-to-packagist-using-github-and-composer-step-by-step

- 在GitHub上建立Repository
- clone回本地端
```
$ cd ~/work/github/
$ git clone git@github.com:Rivsen/hello-world.git
```
- 初始化composer.json
```
$ cd ~/work/github/hello-world/
$ composer init
```
- 建立readme.md
- 推送回GitHub
```
$ git add ./
$ git commit -m 'init package'
$ git push origin master
```
> 最后一步需要加origin master参数的原因是空仓库是没有分支的，所以我们需要强制推送本地的master到远端的master，在这之后可以直接用git push命令推送而不需要加后面的参数了。

- 發佈到packagist.org
訪問Packagist主頁，確認自己已經登錄，然後點擊右上角大大的Submit Package，然後填入我們創建的倉庫的地址，點擊Check，然後沒問題，再點擊Submit。
> 網址：https://packagist.org/
- 設定 GitHub Service Hook 