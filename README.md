# Laravel 8 從 Eloquent 模型產生實體關係圖

引入 beyondcode 的 laravel-er-diagram-generator 套件來擴增從 Eloquent 模型產生實體關係圖，幫助我們在開始寫程式碼之前，先想清楚資料庫的全貌，並建立資料之間的關係，確認對資料結構與關聯的規劃是否有所遺漏。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 該套件繪圖需要安裝 Graphviz 工具。
-- 如果是在電腦作業系統 Windows，可以參考官方下載[連結](https://graphviz.org/download/)進行下載安裝。
-- 如果是在電腦作業系統 MacOS，可以使用 Homebrew 來安裝：brew install graphviz。
-- 如果使用 Homestead，可以執行指令來安裝：sudo apt-get install graphviz。
- 執行 __Artisan__ 指令的 __generate:erd__ 來產生實體關係圖。
```sh
$ php artisan generate:erd {圖片檔案名稱（含副檔名）}
```

----

## 畫面截圖
![](https://i.imgur.com/bBL9YSi.png)
> 運用真實世界中事物和關係的觀念，以圖形化的方式來表示資料庫中抽象的資料架構