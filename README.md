# LUMINA CLINIC - WordPress Portfolio

美容クリニックを題材にした、WordPressオリジナルテーマ制作のポートフォリオです。
実在する医療機関・症例ではありません。

## 構成
- `static-demo/` : GitHub Pagesで公開できる静的デモ
- `wp-theme/ayumi-clinic/` : WordPressオリジナルテーマ

## WordPress実装
- オリジナルテーマ
- `front-page.php`
- カスタム投稿タイプ `case`（症例）
- カスタムタクソノミー `case_category`
- `archive-case.php`
- `single-case.php`
- WordPress投稿をNEWSとして出力
- アイキャッチ画像対応
- グローバル／フッターメニュー
- レスポンシブ
- IntersectionObserverによるフェード表示

## ACF / カスタムフィールド
テーマは ACF が有効な場合 `get_field()` を利用し、未導入の場合は `get_post_meta()` にフォールバックします。

### TOPページ想定フィールド
- hero_eyebrow
- hero_title
- hero_text
- concept_title
- concept_text

### 症例投稿想定フィールド
- treatment_name
- price
- sessions
- risk

## GitHub Pages
GitHub Pagesには `static-demo` の中身を公開してください。
WordPress/PHPはGitHub Pages上では実行されないため、`wp-theme` はソースコード閲覧用です。

## ポートフォリオ掲載例
**WordPressオリジナルテーマ制作｜美容クリニックサイト（架空）**

HTML/CSS・JavaScript・PHPを使用し、WordPressオリジナルテーマとして制作。
症例をカスタム投稿タイプで管理し、ACFを想定したカスタムフィールド、一覧・詳細ページ、NEWS投稿などを実装しました。
