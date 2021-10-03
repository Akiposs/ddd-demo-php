## App名 : CCB(Central Coocking Blog)
### 概要：
### 料理ブログ集客プラットフォーム

----------------------------------------------------------

### 目的：
- 自身のブログへのアクセス数を増やす(ターゲット：ブログ主)
- 他の競合ブログを知ること(ターゲット：ブログ主)
- その日の食事を考える(ターゲット：一般ユーザー)
- お気に入りの料理ブログを見つける(ターゲット：一般ユーザー)

----------------------------------------------------------

### 目的別機能一覧：
#### 基本：
  - ユーザー登録機能

#### 目的：自身のブログへのアクセス数を増やす
  - (1)個人ページ(ブログ紹介が前面に押し出されているイメージ)
  - (2)料理レシピ＆動画投稿機能

#### 目的：他の競合ブログを知ること
  - (3)アクセス数の多い上位30くらいまでの個人をランキング

#### 目的：その日の食事を考える
  - (2)料理レシピ＆動画投稿機能
  - (4)検索機能(自分の気分、料理ジャンル)

#### 目的：お気に入りの料理ブログを見つける
  - (1)個人ページ(ブログ紹介が前面に押し出されているイメージ)
  - (2)料理レシピ＆動画投稿機能
  - (4)検索機能(自分の気分、料理ジャンル)

----------------------------------------------------------

### 画面一覧:
#### ダッシュボード画面
  - 各種アクセスの起点となる

#### ユーザー情報登録画面
#### ユーザー情報登録内容確認画面
#### ユーザー情報登録完了通知画面
#### ユーザーログイン画面
#### (ユーザーログアウト機能)

#### ユーザープロフィール画面(対自分：編集機能付き)
  - 用途：ユーザーが自身のプロフィールを編集するときに使う
#### ユーザープロフィール画面(対一般ユーザー)
  - 用途：ユーザーが別のユーザーのプロフィール情報(ブログ情報)を見るときに使う

#### 料理レシピ・動画一覧画面(検索結果一覧画面)
#### 料理レシピ・動画詳細画面
#### 料理レシピ・動画投稿画面
#### 料理レシピ・動画投稿内容確認画面

----------------------------------------------------------

### 必要テーブル
#### users
- id
- name
- email
- password
- email_verified_at
- created_at
- updated_at
#### articles
- id
- name
- recipe_content
- recipe_video_url
- user_id
- atmosfier_id
- ganle_id
- created_at
- updated_at
#### articles_images
- id
- url
- article_id
- created_at
#### article_access_logs
- id
- article_id
- created_at
#### articles_atmosfiers
- id
- atmosfier
#### articles_ganles
- id
- ganle
#### fovalite_users
- sended_user_id
- received_user_id
#### favorite_articles
- user_id
- article_id



### URL一覧
#### vue側
- /user/dashboard             | GET | (要認証) | ダッシュボード画面(ユーザーログアウトボタン含む)
- /user/register/input        | GET | () | ユーザー情報登録画面
- /user/register/confirm      | GET | () | ユーザー情報登録内容確認画面
- /user/register/complete     | GET | () | ユーザー情報登録完了通知画面
- /user/login                 | GET | () | ユーザーログイン画面
- /user/profile/edit          | GET | (要認証) | ユーザープロフィール画面(対自分：編集機能付き)
- /user/profile/show          | GET | () | ユーザープロフィール画面(対一般ユーザー)
- /recipe/index               | GET | () | 料理レシピ・動画一覧画面(検索結果一覧画面)
- /recipe/detail              | GET | (要認証) | 料理レシピ・動画詳細画面
- /recipe/post/input          | GET | (要認証) | 料理レシピ・動画投稿画面
- /recipe/post/confirm        | GET | (要認証) | 料理レシピ・動画投稿内容確認画面
- /recipe/post/complete       | GET | (要認証) | 料理レシピ・動画投稿完了通知画面

#### laravel側
- /api/register               |POST|()|会員登録処理　
- /api/logout                 |POST|()|ログイン処理　
- /api/logout                 |POST|(要認証)|ログアウト処理
- /api/user                   |GET|()| ユーザー情報取得処理　
- /api/user/post              |POST|()| ユーザー情報保存処理
- /api/recipe/index           |GET|()| レシピ情報取得処理
- /api/recipe/detail          |GET|()| レシピ詳細情報取得処理
- /api/recipe/post            |POST|()| レシピ情報新規登録処理
- /api/recipe/delete          |DELETE|()| レシピ情報削除処理　

