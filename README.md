# サイト名

## ブランチについて

|ブランチ名|用途|
|:--|:--|
|`master`|最新の本番公開状態。<br>本番反映後に`develop`をマージしてください。|
|`develop`|最新の開発状態。<br>次回の本番アップまでの間はこちらにコミットしてください。|

## 公開URL

http://www.xxxxx.co.jp/

## テストURL
https://xxxxxxx.com

## ブラウザ対応範囲

### Windows ( OS: Windows10 )
- Internter Explorer 11(非対応)
- Google Chrome 最新
- Firefox 最新
- Microsoft Edge 最新

### Mac ( OS: macOS 11 Big Sur )
- Google Chrome 最新
- Firefox 最新
- Safari 最新

### iPhone ( OS: 14.x )
- Safari 最新

### iPad ( OS: 14.x )
- Safari 最新

### Android ( OS: 8.x ~ 11.x )
- Chrome 最新


## Version

```txt
yarn -v 1.22.19
node -v v18.12.1
gulp -v 2.3.0
```

## Build Setup

```bash
# install dependencies
$ yarn install

# gulp run
$ yarn dev

# gulp image compression
$ npx gulp imagemin

# gulp FTP
$ npx gulp deploy
```

## srcディレクトリについて

|ディレクトリ|内容物|
|:--|:--|
|`src`|リソースファイル`.scss`, `.js`など　画像は`dist/assets/img/`に置いています|
|`dist`|htmlファイルと`src`のコンパイルしたデータです|

