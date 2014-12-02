<?php

abstract class PhabricatorBaseJapaneseTranslation extends PhabricatorTranslation {

  final public function getLanguage() {
    return 'ja';
  }

  public function getTranslations() {
    return array(

    
      ' IMPORTANT: OBJECTS WILL BE PERMANENTLY DESTROYED! ' => '重要: オブジェクトは永久的に破壊されます!',
    
      '"%s" Account' => '"%s" アカウント',
    
      '"%s" Snapshot' => '"%s" スナップショット',
    
      '"%s" User' => '"%s" ユーザ',
    
      '"%s" date can not be parsed.' => '"%s" 日付は、パースにかけることができません.',
    
      '"%s" must be a date before "%s".' => '"%s" の日付は "%s" より前でなければなりません.',
    
      '"%s" token, awarded by %s.' => '"%s" トークン, %s により獲得.',
    
      '$PATH Component Unusable' => '$PATH コンポーネント 使用不可',
    
      '$PATH Not Set' => '$PATH が未設定',
    
      '% updated their status %s' => '% ステータスを更新 %s',
    
      '%d / hour' => '%d / 時間',
    
      '%d / minute' => '%d / 分',
    
      '%d / second' => '%d / 秒',
    
      '%d Action(s) Have No Effect' => '%d 件の影響のないアクション',
    
      '%d Action(s) With No Effect' => '%d 件の影響のないアクション',
    
      '%d Advice(s)' => '%d 件のアドバイス',
    
      '%d Answer(s)' => '%d 件の回答',
    
      '%d Auto-Fix(es)' => '%d 件の自動修正',
    
      '%d Blueprints Can Allocate' => '%d 件のブループリントが配置可能',
    
      '%d Blueprints Enabled' => '%d 件のブループリントが有効',
    
      '%d Commit(s) Awaiting Audit' => '%d 件のコミットが監査待ち',
    
      '%d Days Ago' => '%d 日前',
    
      '%d Detail(s)' => '%d 件の詳細',
    
      '%d Error(s)' => '%d 件のエラー',
    
      '%d Flagged Object(s)' => '%d 件の要注意オブジェクト',
    
      '%d Object(s) Tracked' => '%d 件の追跡中オブジェクト',
    
      '%d Open Pull Request(s)' => '%d 件の Pull Request が Open',
    
      '%d Open Resource(s) Remain' => '%d 件のリソースが Open のまま',
    
      '%d Postponed' => '%d 件が延期',
    
      '%d Problem Commit(s)' => '%d 件の問題のあるコミット',
    
      '%d Review(s) Blocking Others' => '%d 件のレビューが他の作業をブロック',
    
      '%d Review(s) Need Attention' => '%d 件のレビューに対応が必要',
    
      '%d Review(s) Waiting on Others' => '%d 件のレビューが他レビュー待ち',
    
      '%d User(s) Need Approval' => '%d 人のユーザーが承認待ち',
    
      '%d Warning(s)' => '%d 件の警告',
    
      '%d comment(s)' => '%d 件のコミット',
    
      '%d diff(s)' => '%d 件の Diff',
    
      '%d line(s)' => '%d 行',
    
      '%d other(s)' => 'その他 %d 件',
    
      '%d path(s)' => '%d つのパス',
    
      '%d project hashtag(s) are already used: %s' => 'プロジェクトハッシュタグ %2$s は既に使用されています.',
    
      '%d rejection(s)' => '%d 件の却下',
    
      '%d update(s)' => '%d 件の更新',
    
      '%s (%s ago)' => '%s (%s 前)',
    
      '%s (You do not have permission to view policy details.)' => '%s (ポリシーの詳細を見る権限がありません.)',
    
      '%s Account' => '%s アカウント',
    
      '%s After' => '%s 後',
    
      '%s Approval (%d / %d)' => '%s 承認 (%d / %d)',
    
      '%s Assigned Task(s)' => '%s アサインされたタスク',
    
      '%s Audit' => '%s 監査',
    
      '%s Before' => '%s 前',
    
      '%s Board' => '%s ボード',
    
      '%s Commit(s)' => '%s コミット',
    
      '%s Complete' => '%s 完了',
    
      '%s Condition: %s %s %s%s' => '%s 条件: %s %s %s%s',
    
      '%s Configuration' => '%s 設定',
    
      '%s Help' => '%s ヘルプ',
    
      '%s Line(s)' => '%s 行',
    
      '%s Refunded' => '%s 返却',
    
      '%s Repository' => '%s レポジトリ',
    
      '%s Review Request' => '%s レビューリクエスト',
    
      '%s Triggered Audit' => '%s が監査を開始した',
    
      '%s Triggered CC' => '%s が CC を行った',
    
      '%s abandoned %s.' => '%s は %s を放棄した.',
    
      '%s abandoned revision %s' => '%s はリビジョン %s を放棄した',
    
      '%s abandoned revision %s %s' => '%s はリビジョン %s %s を放棄した',
    
      '%s abandoned this revision.' => '%s はこのリビジョンを放棄した.',
    
      '%s accepted %s.' => '%s は %s を承諾.',
    
      '%s accepted revision %s' => '%s はリビジョン %s を承諾',
    
      '%s accepted revision %s %s' => '%s はリビジョン %s %s を承諾',
    
      '%s accepted this commit.' => '%s はこのコミットを承諾.',
    
      '%s accepted this revision.' => '%s はこのリビジョンを承諾.',
    
      '%s activated this repository.' => '%s がこのレポジトリをアクティブにした.',
    
      '%s added CCs to this revision.' => '%s がリビジョンに CC を追加した.',
    
      '%s added a comment to %s.' => '%s が %s にコメントを追加した.',
    
      '%s added a comment.' => '%s がコメントを追加した.',
    
      '%s added an inline comment to %s.' => '%s が %s にインラインコメントを追加した.',
    
      '%s added an inline comment.' => '%s がインラインコメントを追加した.',
    
      '%s allowed Conduit API access to this credential.' => '%s がこのクレデンシャルに対する Conduit API によるアクセスを許可した.',
    
      '%s awarded %s a %s token.' => '%s が %s に %s のトークンを与えた.',
    
      '%s awarded a token.' => '%s がトークンを与えた.',
    
      '%s changed the default branch from "%s" to "%s".' => '%s がデフォルトブランチを "%s" から "%s" に変更した.',
    
      '%s changed the edit policy for %s.' => '%s が %s の編集ポリシーを変更した.',
    
      '%s changed the edit policy of this %s from "%s" to "%s".' => '%s がこの %s の編集ポリシーを "%s" から "%s" に変更した.',
    
      '%s changed the image for this macro from %s to %s.' => '%s がこのマクロの画像を %s から %s に変更した.',
    
      '%s changed the task status from "%s" to "%s".' => '%s がタスクステータスを "%s" から "%s" に変更した.',
    
      '%s changed the title from "%s" to "%s".' => '%s がタイトルを "%s" から "%s" に変更した.',
    
      '%s changed the username for this credential from "%s" to "%s".' => '%s がこのクレデンシャルのユーザ名を "%s" から "%s" に変更した.',
    
      '%s changed this repository to be hosted on Phabricator.' => '%s がこのレポジトリが Phabricator でホストされるよう変更した.',
    
      '%s changed this repository to track a remote elsewhere.' => '%s がこのレポジトリについてリモートホストをトラックするよう変更した.',
    
      '%s claimed %s.' => '%s が %s を奪取した.',
    
      '%s claimed this task.' => '%s がこのタスクを奪取した.',
    
      '%s closed %s' => '%s が %s をクローズした.',
    
      '%s created "%s".' => '%s が "%s" を作成.',
    
      '%s created %s.' => '%s が %s を作成.',
    
      '%s created dashboard %s.' => '%s が ダッシュボード %s を作成.',
    
      '%s created dashboard panel %s.' => '%s がダッシュボードパネル %s を作成.',
    
      '%s created this account.' => '%s がこのアカウントを作成した.',
    
      '%s created this blueprint.' => '%s がこのブループリントを作成した.',
    
      '%s created this build plan.' => '%s がこのビルドプランを作成した.',
    
      '%s created this build step.' => '%s がこのビルドステップを作成した.',
    
      '%s created this build.' => '%s がこのビルドを作成した.',
    
      '%s created this column.' => '%s がこのカラムを作成した.',
    
      '%s created this configuration entry.' => '%s がこの設定エントリを作成した.',
    
      '%s created this credential.' => '%s がこのクレデンシャルを作成した.',
    
      '%s created this dashboard.' => '%s がこのダッシュボードを作成した.',
    
      '%s created this initiative.' => '%s がこのイニシアチブを作成した.',
    
      '%s created this macro.' => '%s がこのマクロを作成した.',
    
      '%s created this merchant.' => '%s がこの商人を作成した.',
    
      '%s created this panel.' => '%s がこのパネルを作成した.',
    
      '%s created this paste.' => '%s がこのペーストを作成した.',
    
      '%s created this poll.' => '%s がこの投票を作成した.',
    
      '%s created this project.' => '%s がこのプロジェクトを作成した.',
    
      '%s created this provider.' => '%s がこのプロバイダを作成した.',
    
      '%s created this repository.' => '%s がこのレポジトリを作成した.',
    
      '%s created this revision.' => '%s がこのリビジョンを作成した.',
    
      '%s created this source.' => '%s がこのソースを作成した.',
    
      '%s created this task.' => '%s がこのタスクを作成した.',
    
      '%s created this variable.' => '%s がこの変数を作成した.',
    
      '%s deactivated release product %s.' => '%s がこの製品 %s を非アクティブにした.',
    
      '%s deactivated this product.' => '%s がこの製品を非アクティブにした.',
    
      '%s deactivated this repository.' => '%s がこのレポジトリを非アクティブにした.',
    
      '%s destroyed this credential.' => '%s がこのクレデンシャルを破壊した.',
    
      '%s disabled account linking.' => '%s がアカウントの紐付けを無効にした.',
    
      '%s disabled account unlinking.' => '%s がアカウントの紐付け解除を無効にした.',
    
      '%s disabled autoclose for this repository.' => '%s がこのレポジトリの自動クローズを無効化した.',
    
      '%s disabled notifications and publishing for this repository.' => '%s がこのレポジトリの通知と出版を無効にした.',
    
      '%s disabled the audio for %s.' => '%s は %s の音再生を無効にした.',
    
      '%s disabled the audio for this macro.' => '%s はこのマクロの音再生を無効にした.',
    
      '%s disabled this build plan.' => '%s がこのビルドプランを無効にした.',
    
      '%s disabled this macro.' => '%s がこのマクロを無効化した.',
    
      '%s disallowed Conduit API access to this credential.' => '%s がこのクレデンシャルに対する Conduit API からのアクセスを不許可とした',
    
      '%s edited the description of %s' => '%s が %s の説明を更新した',
    
      '%s edited the description of %s.' => '%s が %s の説明を更新した.',
    
      '%s edited the task description.' => '%s がタスクの説明を編集した.',
    
      '%s edited the title of %s (was "%s")' => '%s が %s のタイトルを編集した (元: "%s")',
    
      '%s edited this %s.' => '%s がこの %s を編集した.',
    
      '%s edited this configuration entry.' => '%s がこの設定エントリを編集した.',
    
      '%s empty logs are hidden.' => '%s 空のログは非表示です.',
    
      '%s enabled accont linking.' => '%s がアカウントの紐付けを有効にした.',
    
      '%s enabled account unlinking.' => '%s がアカウントの紐付け解除を有効にした.',
    
      '%s enabled autoclose for this repository.' => '%s がこのレポジトリの自動クローズを有効化した.',
    
      '%s enabled notifications and publishing for this repository.' => '%s がこのレポジトリの通知と出版を有効にした.',
    
      '%s examined the secret plaintext for this credential.' => '%s がこのクレデンシャルの秘密テキストを調べた.',
    
      '%s merged task %s into %s.' => '%s がタスク %s を %s にマージした.',
    
      '%s merged this task into %s.' => '%s がこのタスクを %s にマージした.',
    
      '%s moved %s to %s on the %s workboard.' => '%s が %s を %s に移動した ( ワークボード %s ).',
    
      '%s moved the document %s from %s to %s.' => '%s がドキュメント %s を %s から %s に移動した.',
    
      '%s moved this task to %s on the %s workboard.' => '%s がこのタスクを %s に移動した ( ワークボード %s ).',
    
      '%s must be an integer.' => '%s は整数でなければなりません.',
    
      '%s named this column "%s".' => '%s がこのカラム "%s" に名前を付けた.',
    
      '%s named this conpherence "%s".' => '%s がこの Conpherence "%s"  に名前を付けた.',
    
      '%s removed "%s" as the default branch.' => '%s が "%s" をデフォルトブランチから除いた.',
    
      '%s renamed %s from "%s" to "%s".' => '%s が %s を "%s" に "%s" 名称変更をした.',
    
      '%s renamed %s.' => '%s が %s の名称変更をした.',
    
      '%s renamed an image (%s) from "%s" to "%s".' => '%s がイメージ (%s) を "%s" から "%s" に名称変更した.',
    
      '%s renamed dashboard %s from "%s" to "%s".' => '%s がダッシュボード %s を "%s" から "%s" に名称変更した.',
    
      '%s renamed dashboard panel %s from "%s" to "%s".' => '%s が %s を "%s" から "%s" に名称変更した.',
    
      '%s renamed this account from "%s" to "%s".' => '%s がこのアカウントを "%s" から "%s" に名称変更した.',
    
      '%s renamed this blueprint from "%s" to "%s".' => '%s このブループリントを "%s" から "%s" に名称変更した.',
    
      '%s renamed this build plan from "%s" to "%s".' => '%s がこのビルドプランを "%s" から "%s" に名称変更した.',
    
      '%s renamed this column from "%s" to "%s".' => '%s がこのカラムを "%s" から "%s" に名称変更した.',
    
      '%s renamed this conpherence from "%s" to "%s".' => '%s がこの Conpherence を "%s" から "%s" に名称変更した.',
    
      '%s renamed this credential from "%s" to "%s".' => '%s がこのクレデンシャルを "%s" から "%s" に名称変更した.',
    
      '%s renamed this dashboard from "%s" to "%s".' => '%s がこのダッシュボードを "%s" から "%s" に名称変更した.',
    
      '%s renamed this document from "%s" to "%s".' => '%s がこのドキュメントを "%s" から "%s" に名称変更した.',
    
      '%s renamed this initiative from "%s" to "%s".' => '%s がこのイニシアチブを "%s" から "%s" に名称変更した.',
    
      '%s renamed this macro from "%s" to "%s".' => '%s がこのマクロを "%s" から "%s" に名称変更した.',
    
      '%s renamed this merchant from "%s" to "%s".' => '%s がこの商人を "%s" から "%s" に名称変更した.',
    
      '%s renamed this mock from "%s" to "%s".' => '%s がこのモックを "%s" から "%s" に名称変更した.',
    
      '%s renamed this panel from "%s" to "%s".' => '%s がこのパネルを "%s" から "%s" に名称変更した.',
    
      '%s renamed this project from "%s" to "%s".' => '%s がこのプロジェクトを "%s" から "%s" に名称変更した.',
    
      '%s renamed this repository from "%s" to "%s".' => '%s がこのレポジトリを "%s" から "%s" に名称変更した.',
    
      '%s renamed this source from "%s" to "%s".' => '%s がこのソースを "%s" から "%s" に名称変更した.',
    
      '%s reopened %s' => '%s が %s を再オープンした',
    
      '%s reopened %s as "%s".' => '%s が %s を "%s" として再オープンした.',
    
      '%s restored %s.' => '%s が %s を復活させた.',
    
      '%s restored this macro.' => '%s がこのマクロを復活させた.',
    
      '%s set the audio for %s to loop.' => '%s は %s の音がループ再生されるようにした.',
    
      '%s set the audio for %s to play once.' => '%s は %s の音が１度再生されるようにした.',
    
      '%s set the audio to loop.' => '%s %s は音がループ再生されるようにした.',
    
      '%s set the audio to play once.' => '%s は音が１度再生されるようにした.',
    
      '%s set the clone name of this repository to "%s".' => '%s はこのレポジトリのクローン名を "%s" とした.',
    
      '%s set this repository to autoclose on all branches.' => '%s がこのレポジトリの全てのブランチを自動クローズとした.',
    
      '%s set this repository to autoclose on branches: %s.' => '%s がこのレポジトリのブランチを自動クローズとした: %s.',
    
      '%s set this repository to track all branches.' => '%s がこのレポジトリの全てのブランチを追跡対象とした.',
    
      '%s set this repository to track branches: %s.' => '%s がこのレポジトリのブランチを追跡対象とした: %s.',
    
      '%s updated a token.' => '%s がトークンを更新した.',
    
      '%s updated an image\'s (%s) description.' => '%s が %s の画像説明を更新した.',
    
      '%s updated an image\'s (%s) sequence.' => '%s が %s の画像番号を更新した.',
    
      '%s updated her profile' => '%s は彼女自身のプロフィールを更新した',
    
      '%s updated his profile' => '%s は彼自身のプロフィールを更新した',
    
      '%s updated image descriptions of %s.' => '%s が %s の画像説明を更新した.',
    
      '%s updated image sequence of %s.' => '%s が %s の画像番号を更新した.',
    
      '%s updated images of %s.' => '%s が %s の画像を更新した.',
    
      '%s updated the SSH key for this repository.' => '%s がこのレポジトリの SSH 鍵 を更新した.',
    
      '%s updated the SSH keyfile for this repository.' => '%s がこのレポジトリの SSH 鍵ファイル を更新した.',
    
      '%s updated the SSH login for this repository.' => '%s がこのレポジトリの SSH ログイン を更新した.',
    
      '%s updated the description for %s.' => '%s が %s の説明を更新した.',
    
      '%s updated the description for this credential.' => '%s がこのクレデンシャルの説明を更新した.',
    
      '%s updated the description for this merchant.' => '%s がこの商人の説明を更新した.',
    
      '%s updated the description for this poll.' => '%s がこの投票の説明を更新した.',
    
      '%s updated the description of this repository.' => '%s がこのレポジトリの説明を更新した.',
    
      '%s updated the diff for %s.' => '%s が %s の Diff を更新した.',
    
      '%s updated the document\'s text.' => '%s がドキュメントの本文を更新した.',
    
      '%s updated the image for %s.' => '%s が %s のイメージを更新した.',
    
      '%s updated the image names of %s.' => '%s が %s の画像名を更新した.',
    
      '%s updated the mock\'s description.' => '%s がモックの説明を更新した.',
    
      '%s updated the mock\'s status.' => '%s がモックのステータスを更新した.',
    
      '%s updated the paste\'s language.' => '%s がペーストの言語を更新した.',
    
      '%s updated the paste\'s title to "%s".' => '%s がペーストのタイトルを "%s" に更新した.',
    
      '%s updated the repository for %s from %s to %s.' => '%s が レポジトリの %s を %s から %s に更新した.',
    
      '%s updated the secret for this credential.' => '%s がこのクレデンシャルの秘密情報を更新した.',
    
      '%s updated their profile' => '%s は彼らのプロフィールを更新した',
    
      '(All Content Types)' => '(任意のコンテントタイプ)',
    
      '(All Panels)' => '(任意のパネル)',
    
      '(All Requests)' => '(任意のリクエスト)',
    
      '(All Rule Types)' => '(任意のルールタイプ)',
    
      '(Any Repository)' => '(任意のレポジトリ)',
    
      '(Deprecated)' => '(非推奨)',
    
      '(Detect From Filename in Title)' => '(タイトルにあるファイル名から推測)',
    
      '(None)' => '(なし)',
    
      '(None.)' => '(なし.)',
    
      '(Not Assigned)' => '(アサイン済なし)',
    
      '(Not Supported)' => '(未サポート)',
    
      '(Show Details)' => '(詳細を表示)',
    
      '(Ungrouped)' => '(グループ無)',
    
      '(Unknown Commit)' => '(不明なコミット)',
    
      '(Unknown Custom Field "%s")' => '(不明なカスタムフィールド "%s")',
    
      '(Unknown Field "%s")' => '(不明なフィールド "%s")',
    
      '(Untitled Commit)' => '(無題コミット)',
    
      '(Untitled Document)' => '(無題ドキュメント)',
    
      '(Up For Grabs)' => '(ぶら下がり)',
    
      '(Use Default)' => '(デフォルト)',
    
      '(empty)' => '(空)',
    
      '**Choose the pronoun you prefer:**' => '**人称表現の選択:**',
    
      '**Custom Date and Time Formats**\n\nYou can specify custom formats which will be used when rendering dates and times of day. Examples:\n\n| Format  | Example  | Notes |\n| ------  | -------- | ----- |\n| `g:i A` | 2:34 PM  | Default 12-hour time. |\n| `G.i a` | 02.34 pm | Alternate 12-hour time. |\n| `H:i`   | 14:34    | 24-hour time. |\n\n\nYou can find a [[%s | full reference in the PHP manual]].' => '%24lang-%3E%27%2A%2ACustom+Date+and+Time+Formats%2A%2A%5Cn%5CnYou+can+specify+custom+formats+which+will+be+used+when+rendering+dates+and+times+of+day.+Examples%3A%5Cn%5Cn%7C+Format++%7C+Example++%7C+Notes+%7C%5Cn%7C+------++%7C+--------+%7C+-----+%7C%5Cn%7C+%60g%3Ai+A%60+%7C+2%3A34+PM++%7C+Default+12-hour+time.+%7C%5Cn%7C+%60G.i+a%60+%7C+02.34+pm+%7C+Alternate+12-hour+time.+%7C%5Cn%7C+%60H%3Ai%60+++%7C+14%3A34++++%7C+24-hour+time.+%7C%5Cn%5Cn%5CnYou+can+find+a+%5B%5B%25s+%7C+full+reference+in+the+PHP+manual%5D%5D.%27
**日付と時間フォーマットの変更**\n\nYou can specify custom formats which will be used when rendering dates and times of day. 例:\n\n| フォーマット  | 例  | 説明 |\n| ------  | -------- | ----- |\n| `g:i A` | 2:34 PM  | 12時間表現. |\n| `G.i a` | 02.34 pm | 12時間表現. |\n| `H:i`   | 14:34    | 24時間表減. |\n\n\n [[%s | PHP マニュアルに完全な解説]] があります.',
    
      'A mock\'s owner can always view and edit it.' => 'モックの作成者自身は常に閲覧と編集が可能です.',
    
      'Above' => '上',
    
      'Accepted' => '受諾済',
    
      'Access Logs' => 'アクセスログ',
    
      'Account' => 'アカウント',
    
      'Account %d' => 'アカウント %d',
    
      'Account Activity' => 'アカウント活動',
    
      'Account Activity Logs' => 'アカウント活動ログ',
    
      'Account Already Linked' => 'アカウントはリンクされています',
    
      'Account Disabled' => 'アカウントは利用不可',
    
      'Account ID on Twilio service.' => 'Twilio サービスアカウントID',
    
      'Account Information' => 'アカウント情報',
    
      'Account Not Linkable' => 'アカウントはリンク可能ではありません',
    
      'Account Not Refreshable' => 'アカウントのリフレッシュはできません',
    
      'Account Recovery' => 'アカウントの復元',
    
      'Account Settings' => 'アカウント設定',
    
      'Account Type' => 'アカウントタイプ',
    
      'Account name is required.' => 'アカウント名は必須です.',
    
      'Accounting' => '会計',
    
      'Accounts' => 'アカウント',
    
      'Accounts and Billing' => 'アカウントと支払い',
    
      'Ace' => 'エース',
    
      'Ace of Hearts' => 'ハートのエース',
    
      'Acquiring' => '取得中',
    
      'Action' => 'アクション',
    
      'Action Failed' => 'アクション失敗',
    
      'Action In Progress' => 'アクションは進行中',
    
      'Action Menu' => 'アクションメニュー',
    
      'Action Noted' => 'アクションは認知済',
    
      'Action Passed' => 'アクションは経過済',
    
      'Action Required' => 'アクションが必要',
    
      'Action Story' => 'アクションの経過',
    
      'Action Warning' => 'アクション警告',
    
      'Actions' => 'アクション',
    
      'Actions Taken' => 'アクションは実行済',
    
      'Activate' => '有効化',
    
      'Activate DarkConsole on every page.' => 'あらゆるページで DarkConsole を有効にする.',
    
      'Activate Panel' => 'パネルを有効化',
    
      'Activate Panel?' => 'パネルを有効化しますか?',
    
      'Activate Product?' => '製品を有効化しますか?',
    
      'Activate Repository' => 'レポジトリを有効か',
    
      'Activate Repository?' => 'レポジトリを有効化しますか?',
    
      'Activate this repository to begin or resume import.' => 'このレポジトリを有効化して、インポートを開始 / 続行.',
    
      'Activate this repository?' => 'このレポジトリをアクティブにしますか?',
    
      'Active' => 'アクティブ',
    
      'Active Credentials' => 'アクティブなクレデンシャル',
    
      'Active Daemons' => 'アクティブなデーモンプロセス',
    
      'Active Leases' => 'アクティブなリース',
    
      'Active Login Sessions' => 'アクティブなログインセッション',
    
      'Active Macros' => 'アクティブなマクロ',
    
      'Active OAuth Token' => 'アクティブな OAuth トークン',
    
      'Active OAuth Token (Expires: %s)' => 'アクティブな OAuth トークン (失効: %s)',
    
      'Active Panels' => 'アクティブなパネル',
    
      'Active Plans' => 'アクティブなプラン',
    
      'Active Prodcuts' => 'アクティブな製品',
    
      'Active Repositories' => 'アクティブなレポジトリ',
    
      'Active Resources' => 'アクティブなリソース',
    
      'Active Revisions' => 'アクティブなリビジョン',
    
      'Active and Disabled Macros' => '使用可能 / 使用不可なマクロ',
    
      'Active and Inactive Products' => 'アクティブ / 非アクティブな製品',
    
      'Active and Inactive Repositories' => 'アクティブ / 非アクティブなレポジトリ',
    
      'ActiveDirectory Domain' => 'ActiveDirectory ドメイン',
    
      'Activity Logs' => '活動のログ',
    
      'Actor' => 'アクター',
    
      'Actors' => 'アクター',
    
      'Actual Physical Film' => '実物の映画フィルム',
    
      'Actual Physical Newspaper' => '実物の新聞紙',
    
      'Actual Physical Pie' => '実物のパイ',
    
      'Add Another Action' => 'もう一つアクションを追加',
    
      'Add Answer' => '回答を追加',
    
      'Add Auditors' => '監査人を追加',
    
      'Add Authentication Factor' => '認証ファクタを追加',
    
      'Add Authentication Provider' => '認証プロバイダを追加',
    
      'Add Build Step' => 'ビルドステップを追加',
    
      'Add CCs' => '複数の CC を追加',
    
      'Add Column' => 'カラムの追加',
    
      'Add Comment' => 'コメントを追加',
    
      'Add Credential' => 'クレデンシャルを追加',
    
      'Add Existing Panel' => '既存のパネルを追加',
    
      'Add External Account' => '外部アカウントを追加',
    
      'Add Key' => 'キーを追加',
    
      'Add Members' => 'メンバーを追加',
    
      'Add Mirror' => 'ミラーを追加',
    
      'Add Mountain of Virtual Wealth' => '輝かしい山ほどの富 (仮想) を追加',
    
      'Add New Address' => '新規にアドレスを追加',
    
      'Add New Path' => '新規にパスを追加',
    
      'Add Panel' => 'パネルを追加',
    
      'Add Participants' => '参加者を追加',
    
      'Add Provider' => 'プロバイダを追加',
    
      'Add Reviewers' => 'レビュアーを追加',
    
      'Add a Comment' => 'コメントを追加',
    
      'Add/Remove Administrator' => '管理者権限の追加/削除',
    
      'Add/Remove System Agent' => 'システムエージェントの追加/削除',
    
      'Added' => '追加',
    
      'Additional Hashtags' => '追加のハッシュタグ',
    
      'Adjust Account Settings' => 'アカウント設定の調整',
    
      'Admin' => '管理者',
    
      'Administration' => '管理',
    
      'Administrator' => '管理者',
    
      'Administrators' => '管理者',
    
      'Administrators can always view all activity.' => '管理者は常に全てのアクティビティを閲覧できます.',
    
      'Administrators can take this action.' => '管理者はこのアクションを実行できます.',
    
      'Administrators have greater access to edit these accounts.' => '管理者にはこれらのアカウントを編集できる強い権限があります.',
    
      'Advanced' => '高度な設定',
    
      'Advanced Filter' => '高度なフィルタ',
    
      'Advanced Filter...' => '高度なフィルタ...',
    
      'Advanced Search' => '高度な検索',
    
      'After logging in you should set a password for your account, or link your account to an external account that you can use to authenticate in the future.' => 'ログイン後は、自分のアカウントのパスワードをすぐに変更する, もしくは外部サービスのアカウントとのリンクを行ってください.',
    
      'Agree and Sign Document' => 'ドキュメントに合意し, 署名する',
    
      'Agreements and Signatures' => '合意と署名',
    
      'Algorithm' => 'アルゴリズム',
    
      'All' => '全て',
    
      'All Applications' => 'すべてのアプリケーション',
    
      'All Backers' => 'すべての Backers',
    
      'All Blogs' => 'すべてのブログ',
    
      'All Blueprints' => 'すべてのブループリント',
    
      'All Buildables' => 'すべてのビルド可能エントリ',
    
      'All Commits' => 'すべてのコミット',
    
      'All Credentials' => 'すべてのクレデンシャル',
    
      'All Daemons' => 'すべてのデーモン',
    
      'All Dashboards' => 'すべてのダッシュボード',
    
      'All Day' => '終日',
    
      'All Documents' => 'すべてのドキュメント',
    
      'All Events' => 'すべてのイベント',
    
      'All Harbormaster APIs are new and subject to change.' => 'Harbormaster APIs はまだ新しく今後変更の可能性があります.',
    
      'All Icons' => 'すべてのアイコン',
    
      'All Initiatives' => 'すべてのイニシアチブ',
    
      'All Leases' => 'すべてのリース',
    
      'All Lint' => 'すべての Lint',
    
      'All Lists' => '全てのリスト',
    
      'All Logs' => 'すべてのログ',
    
      'All Merchants' => 'すべての商人',
    
      'All Methods' => 'すべてのメソッド',
    
      'All Mocks' => 'すべてのモック',
    
      'All Notifications' => 'すべての通知',
    
      'All Object Types' => 'すべてのオブジェクトタイプ',
    
      'All Orders' => 'すべての注文',
    
      'All Packages' => 'すべてのパッケージ',
    
      'All Panels' => 'すべてのパネル',
    
      'All Pastes' => 'すべてのペースト',
    
      'All Plans' => 'すべてのプラン',
    
      'All Polls' => 'すべての投票',
    
      'All Posts' => 'すべてのポスト',
    
      'All Providers' => 'すべてのプロバイダ',
    
      'All Push Logs' => 'すべての Push ログ',
    
      'All Pushed Updates' => 'すべての Push された更新',
    
      'All Questions' => 'すべての質問',
    
      'All Releeph methods are subject to abrupt change.' => 'すべての Releeph メソッドは予告なしに変更される可能性があります.',
    
      'All Repositories' => 'すべてのレポジトリ',
    
      'All Requests' => 'すべてのリクエスト',
    
      'All Resources' => 'すべてのリソース',
    
      'All Revisions' => 'すべてのリビジョン',
    
      'All Rules' => 'すべてのルール',
    
      'All Settings' => 'すべての設定',
    
      'All Signatures' => 'すべての署名',
    
      'All Stories' => 'すべてのストーリー',
    
      'All Tasks' => 'すべてのタスク',
    
      'All Time' => 'すべてのタイム',
    
      'All Tracked' => 'すべての追跡中エントリ',
    
      'All Users' => 'すべてのユーザ',
    
      'Allocate Software Resources' => 'ソフトウェアリソースの配置',
    
      'Allow' => '許可',
    
      'Allow %s to access this Phabricator install?' => '%s が この Phabricator にアクセスすることを許可しますか?',
    
      'Allow Conduit Access' => 'Conduit のアクセスを許可',
    
      'Allow Conduit access?' => 'Conduit を経由したアクセスを許可しますか?',
    
      'Allow Dangerous Changes' => '危険な変更を許可',
    
      'Allow Dangerous Changes?' => '危険な変更を許可しますか?',
    
      'Allow HTTP' => 'HTTP を許可',
    
      'Allow HTTP Basic Auth' => 'HTTP Basic 認証を許可',
    
      'Allow Linking Accounts' => 'Phabricator アカウントとの紐付けを許可',
    
      'Allow Registration:' => '登録を許可:',
    
      'Allow Unlinking Accounts' => 'Phabricator アカウントとの紐付け解除を許可',
    
      'Allow anyone to see the responses' => '全員が結果を見ることができます',
    
      'Allows Registration' => '登録を許可',
    
      'Always Activate DarkConsole' => '常にダークコンソールを使用',
    
      'Amount' => '額',
    
      'An Umbrella' => '傘',
    
      'An email has been sent with a link you can use to login.' => 'ログイン用のリンクが記された Email が送信されました.',
    
      'Anonymous Password' => '匿名のパスワード',
    
      'Anonymous Username' => '匿名のユーザ名',
    
      'Another mailing list already uses that address.' => '他のメーリングリストがそのアドレスを使っています.',
    
      'Another post already uses this slug. Each post must have a unique slug.' => '他のポストがこの Slug を使っています. 各ポストはユニークな Slug を使用しなければなりません.',
    
      'Another product already uses this name.' => '他の製品がこの製品名を使用しています.',
    
      'Another repository already uses that callsign. You must choose a unique callsign.' => '%24lang-%3E%27Another+repository+already+uses+that+callsign.+You+must+choose+a+unique+callsign.%27
Another repository already uses that callsign. コールサインはユニークではありません.',
    
      'Another user already has that email.' => '他のユーザがその Email を使用しています.',
    
      'Another user already has that username.' => '他のユーザがそのユーザ名を使用しています.',
    
      'Another user already has this email.' => '他のユーザがこの Email を使用しています.',
    
      'Any' => 'すべて',
    
      'Any Status' => 'すべてのステータス',
    
      'Anyone Can Register an Account' => '誰でもアカウント登録ができる状態です',
    
      'Application' => 'アプリケーション',
    
      'Application "%s" is not installed!' => 'アプリケーション "%s" はインストールされていません!',
    
      'Application %d' => 'アプリケーション %d',
    
      'Application ID is required.' => 'アプリケーション ID が必要です.',
    
      'Application Settings' => 'アプリケーション設定',
    
      'Approval (Multiple Choice)' => '承認/支持 (複数選択式)',
    
      'Approval Queue' => '承認キュー',
    
      'Approve' => '承認',
    
      'Approve Account' => 'アカウントを承認',
    
      'Approve Pull' => 'Pull を承認',
    
      'Approve Registration' => '登録を承認',
    
      'Apr' => '4月',
    
      'Arcanist Certificate' => 'Arcanist 証明書',
    
      'Arcanist Project' => 'Arcanist プロジェクト',
    
      'Archive Project' => 'プロジェクトをアーカイブに移動',
    
      'Archived' => 'アーカイブ',
    
      'Are you sure you want to delete the "%s" package? This operation can not be undone.' => '%24lang-%3E%27Are+you+sure+you+want+to+delete+the+%22%25s%22+package%3F+This+operation+can+not+be+undone.%27
Are you sure you want to delete the "%s" package?この処理は元に戻すことはできません.',
    
      'Are you sure you want to delete the countdown %s?' => '本当にカウントダウン %s を削除しますか?',
    
      'Are you sure you want to log out?' => '本当にログアウトしますか?',
    
      'Asana integration options.' => 'Asana 連携のオプション項目.',
    
      'Assigned' => 'アサイン済',
    
      'Assigned Tasks' => 'アサイン済タスク',
    
      'Assigned To' => 'アサイン先',
    
      'Assigned to Me' => '自分へのアサイン',
    
      'Assigned: %s' => 'アサイン先: %s',
    
      'Assignee' => 'アサインされた者',
    
      'Associate Projects' => 'プロジェクトを紐付ける',
    
      'Associates a revision with a repository.' => 'リビジョンをレポジトリと紐付ける.',
    
   

    

    
      'Attached To' => '添付先',
    
      'Audio Behavior' => '音の再生方法',
    
      'Audio File' => '音声ファイル',
    
      'Audit' => '監査',
    
      'Audit Commit' => '監査コミット',
    
      'Audit Not Required' => '監査の必要はありません',
    
      'Audit Requested' => '監査が要求されました',
    
      'Audit Required' => '監査が必要です',
    
      'Audit Status' => '監査 ステータス',
    
      'Audited' => '監査済',
    
      'Auditing' => '監査',
    
      'Auditors' => '監査人',
    
      'Auditors: %s' => '監査人: %s',
    
      'Audits' => '監査',
    
      'Aug' => '8月',
    
      'Auth Factor' => '認証ファクタ',
    
      'Auth Providers' => '認証プロバイダ',
    
      'Authentication' => '認証',
    
      'Authentication Canceled' => '認証キャンセル済',
    
      'Authentication Error' => '認証エラー',
    
      'Authentication Factors' => '認証ファクタ',
    
      'Author' => '作成者',
    
      'Author PHID: %s' => '作成者 PHID: %s',
    
      'Author\'s projects' => '作成者のプロジェクト',
    
      'Author/Committer' => '作成者 / コミッタ',
    
      'Author: %s' => '作成者: %s',
    
      'Authored' => '作成者',
    
      'Authored Commits' => '作成したコミット',
    
      'Authors' => '作成者',
    
      'Autoclose' => '自動クローズ',
    
      'Autoclose Enabled' => '自動クローズは有効',
    
      'Autoclose On All Branches' => '全てのブランチで自動クローズ',
    
      'Autoclose Only' => '自動クローズのみ',
    
      'Autoclose?' => '自動クローズにしますか?',
    
      'Automatically Subscribed' => '自動的に購読済',
    
      'Automatically push changes into other remotes.' => '変更をリモートに自動 Push できます.',
    
      'Available' => '利用可能',
    
      'Avg' => '平均',
    
      'Award "%s" Token' => '"%s" にトークンを与える',
    
      'Award Token' => 'トークンを与える',
    
      'Award and Acquire Trinkets' => '小さな贈り物の授与',
    
      'BODIES' => '本文',
    
      'BODY' => '本文',
    
      'BRANCH' => 'ブランチ',
    
      'BRANCHES' => 'ブランチ',
    
      'Backlog' => 'バックログ',
    
      'Base URI Not Configured' => 'ベース URI が設定されていません',
    
      'Basic Policies' => '基本ポリシー',
    
      'Batch Edit Selected \302\273' => '選択されてものをバッチ編集 \302\273',
    
      'Batch Edit Tasks' => 'タスクのバッチ編集',
    
      'Batch Editor' => 'バッチエディタ',
    
      'Batch Task Editor' => 'タスクのバッチ処理',
    
      'Be careful when renaming users!' => 'ユーザーの名前変更は慎重に!',
    
      'Below' => '下',
    
      'Best Available Algorithm' => '利用可能な 最前のアルゴリズム',
    
      'Blocking Others' => '他をブロック中',
    
      'Blog' => 'ブログ',
    
      'Blogger' => 'ブロガー',
    
      'Blogs' => 'ブログ',
    
      'Blue' => '青色',
    
      'Blueprint' => 'ブループリント',
    
      'Blueprint %d' => 'ブループリント %d',
    
      'Blueprint Type' => 'ブループリントタイプ',
    
      'Blueprints' => 'ブループリント',
    
      'Blurb' => '自賛的広告',
    
      'Body' => '本文',
    
      'Bold' => '太字',
    
      'Branch' => 'ブランチ',
    
      'Branch History' => 'ブランチ履歴',
    
      'Branch Name' => 'ブランチ名',
    
      'Branch Untracked' => 'ブランチは非追跡中',
    
      'Branches' => 'ブランチ',
    
      'Briefcase' => 'ブリーフケース',
    
      'Browse' => '一覧',
    
      'Browse Content' => 'コンテンツの一覧',
    
      'Browse Fragments' => 'フラグメントの一覧',
    
      'Browse Merchants' => '商人の一覧',
    
      'Browse Repository' => 'レポジトリの一覧',
    
      'Browse Settings' => '設定の一覧',
    
      'Browse and Audit Commits' => 'コミットの一覧表示 / 監査',
    
      'Bug' => 'バグ',
    
      'Build' => 'ビルド',
    
      'Build/CI' => 'ビルド / CI',
    
      'Builtin' => '内蔵',
    
      'Bulleted List' => '箇条書きリスト',
    
      'By default, no one can take this action.' => 'デフォルトの状態では、誰もアクションの実行ができません.',
    
      'CCs' => '複数のCC',
    
      'CHANGE DETAILS' => '変更の詳細',
    
      'CHANGED PRIOR TO COMMIT' => 'コミット前の変更部分',
    
      'CHANGES SINCE LAST UPDATE' => '最後の更新からの変更部分',
    
      'CLEARING CACHES' => 'キャッシュをクリア中',
    
      'COMMIT' => 'コミット',
    
      'COMMITS' => 'コミット',
    
      'CONPHERENCE DETAIL' => 'CONPHERENCE 詳細',
    
      'Calendar' => 'カレンダー',
    
      'Calendar Event' => 'カレンダーイベント',
    
      'Calendar Events' => 'カレンダーイベント',
    
      'Call' => '呼び出し',
    
      'Call Logs' => '呼び出しログ',
    
      'Call Method' => 'メソッドの呼び出し',
    
      'Callsign' => 'コールサイン',
    
      'Callsigns' => 'コールサイン',
    
      'Can Configure Application' => 'アプリケーションの設定ができるのは',
    
      'Can Create Blueprints' => 'ブループリントを作成できるのは',
    
      'Can Create Documents' => 'ドキュメントを作成できるのは',
    
      'Can Create Fragments' => 'フラグメントを作成できるのは',
    
      'Can Create Initiatives' => 'イニシアチブを作成できるのは',
    
      'Can Create Merchants' => '商人を作成できるのは',
    
      'Can Create OAuth Applications' => 'OAuth アプリケーションを作成できるのは',
    
      'Can Create Projects' => 'プロジェクトを作成できるのは',
    
      'Can Create Repositories' => 'レポジトリを作成できるのは',
    
      'Can Edit' => '編集できるのは',
    
      'Can Edit Task Policies' => 'タスクポリシーを編集できるのは',
    
      'Can Edit Task Projects' => 'タスクプロジェクトを編集できるのは',
    
      'Can Edit Task Status' => 'タスクステータスを編集できるのは',
    
      'Can Join' => '参加できるのは',
    
      'Can Lock Project Membership' => 'プロジェクトメンバをロックできるのは',
    
      'Can Manage Build Plans' => 'ビルドプランを管理できるのは',
    
      'Can Manage Global Rules' => 'グローバルルールを管理できるのは',
    
      'Can Manage Macros' => 'マクロを管理できるのは',
    
      'Can Manage Sources' => 'ソースを管理できるのは',
    
      'Can Not Connect to MySQL' => 'MySQL に接続ができません',
    
      'Can Not Hide Default Column' => 'デフォルトカラムは隠せません',
    
      'Can Not Retry' => '再試行できません',
    
      'Can Prioritize Tasks' => 'タスクに優先度付け可能',
    
      'Can Push' => 'Push 可能',
    
      'Can Use Application' => 'アプリケーションを使用可能',
    
      'Can View' => '閲覧可能',
    
      'Can create and manage build plans.' => 'ビルドプランを作成・管理可能.',
    
      'Cancel' => 'キャンセル',
    
      'Cancel Event' => 'イベントをキャンセル',
    
      'Cancel Order' => '注文をキャンセル',
    
      'Cancel Order?' => '注文をキャンセルしますか?',
    
      'Cancel Pull' => 'Pull をキャンセル',
    
      'Cancel Task' => 'タスクをキャンセル',
    
      'Cancelled' => 'キャンセル済',
    
      'Cannot Cancel' => 'キャンセルできません',
    
      'Certificate' => '証明書',
    
      'Certificate Regenerated' => '証明書は再生成されました',
    
      'Certificate Token' => '認証トークン',
    
      'Change' => '変更',
    
      'Change Details' => '変更の詳細',
    
      'Change File' => 'ファイルを変更',
    
      'Change Password' => 'パスワードを変更',
    
      'Change Primary Address' => 'メインのアドレスを変更',
    
      'Change Priority' => '優先度を変更',
    
      'Change Settings' => '設定を変更',
    
      'Change Status' => 'ステータス変更',
    
      'Change Text Encoding...' => 'テキストエンコードを変更...',
    
      'Change Username' => 'ユーザ名の変更',
    
      'Change primary email address?' => 'メインの Email アドレスを変更しますか?',
    
      'Changed CC' => 'CC は変更済',
    
      'Changes saved.' => '変更が保存されました.',
    
      'Chart and Analyze Data' => 'データのグラフ化と分析',
    
      'Checkered' => 'チェック柄',
    
      'Cherry' => 'サクランボ',
    
      'Choose "%s" Icon' => '"%s" アイコンを選択',
    
      'Choose Background Color' => '背景色を選択',
    
      'Choose Encoding' => 'エンコードを選択',
    
      'Choose Highlighting' => 'ハイライトを選択',
    
      'Choose Icon' => 'アイコンを選択',
    
      'Choose Icon and Color...' => 'アイコンと色を選択...',
    
      'Choose Icon...' => 'アイコンを選択...',
    
      'Choose Payment Method' => '支払方法を選択',
    
      'Choose Project Icon' => 'プロジェクトのアイコンを選択',
    
      'Choose Releeph Branch' => 'Releeph ブランチを選択',
    
      'Choose a dashboard template to start with.' => '使用するダッシュボードテンプレートを選択してください.',
    
      'Choose a panel to add to this dashboard:' => 'このダッシュボードに追加するパネルを選択: ',
    
      'Choose a payment method to add:' => '追加する支払メソッドを選択:',
    
      'Choose a project to import columns from:' => 'カラムのインポートを行う元のプロジェクトを指定してください:',
    
      'Choose a syntax highlighting to use.' => '使用するシンタックスハイライトを選択してください.',
    
      'Choose a text encoding to use.' => '使用するテキストエンコードを選択してください.',
    
      'Choose a type of build step to add:' => '追加するビルドステップのタイプを選択:',
    
      'Choose an application to pin to your home page.' => 'ピン止めをすると、アプリケーションはホームページに常に表示されます.',
    
      'Choose where to install this dashboard.' => 'このダッシュボードをインストールする先を選択してください.',
    
      'Choose...' => '選択...',
    
      'Class' => 'クラス',
    
      'Class does not exist.' => 'クラスは存在しません.',
    
      'Class is not of valid type.' => 'クラスが適切な型ではありません.',
    
      'Classes must match to compare schemata!' => 'クラスは, スキーマと対象付けされていなければなりません!',
    
      'Clear Selection' => '選択を解除',
    
      'Clear sailing ahead.' => '前方の視界よし.',
    
      'Clone/Checkout As' => 'Clone / Checkout 先',
    
      'Cloning %s into %s....' => '%s を %s にクローンしています....',
    
      'Close' => '閉じる',
    
      'Close Audit' => 'Audit を閉じる',
    
      'Close Branch' => 'ブランチを閉じる',
    
      'Close Initiative' => 'イニシアチブを閉じる',
    
      'Close Initiative?' => 'イニシアチブを閉じますか?',
    
      'Close Poll' => '投票を締め切る',
    
      'Close Question' => '質問を閉じる',
    
      'Close Resource' => 'リソースを閉じる',
    
      'Close Revision' => 'リビジョンを閉じる',
    
      'Close a Differential revision.' => 'Differential リビジョンを閉じる.',
    
      'Close any dialog, including this one.' => '任意のダイアログを閉じます. (このダイアログを含む)',
    
      'Closed' => 'クローズ',
    
      'Closed Default' => 'デフォルトクローズ',
    
      'Closed by author' => '作成者によってクローズ',
    
      'Closed, Duplicate' => 'クローズ, 重複',
    
      'Closed, Invalid' => 'クローズ, 不適切',
    
      'Closed, Resolved' => 'クローズ, 解決',
    
      'Closed, Spite' => 'クローズ, ポイ捨て',
    
      'Closed, Wontfix' => 'クローズ, 修正されない',
    
      'Closing a resource releases all leases and destroys the resource. It can not be undone. Continue?' => '%24lang-%3E%27Closing+a+resource+releases+all+leases+and+destroys+the+resource.+It+can+not+be+undone.+Continue%3F%27
Closing a resource releases all leases and destroys the resource. 元に戻すことはできません. 続けますか?',
    
      'Code' => 'コード',
    
      'Code Block' => 'コードブロック',
    
      'Color' => '色',
    
      'Colors' => '色',
    
      'Colors and Transforms' => '色と変形',
    
      'Column' => 'カラム',
    
      'Column Type' => 'カラムの種類',
    
      'Column has Wrong Autoincrement' => 'カラムの自動インクリメントが不正です',
    
      'Column name is required.' => 'カラム名は必須項目です.',
    
      'Column point limit must be empty, or a positive integer.' => 'カラムのポイント制限は, 無指定か正の整数でなければなりません.',
    
      'Column/Key' => 'カラム / キー',
    
      'Columns' => 'カラム',
    
      'Comment' => 'コメント',
    
      'Comment Actions' => 'アクションにコメント',
    
      'Comment History' => '履歴にコメント',
    
      'Commented' => 'コメント済',
    
      'Comments' => 'コメント',
    
      'Comments Widget' => 'コメント部品',
    
      'Commit' => 'コミット',
    
      'Commit %s' => 'コミット %s',
    
      'Commit Authors' => 'コミット 作成者',
    
      'Commit Not Tracked' => 'コミットは非追跡中',
    
      'Commit is a merge' => 'コミットはマージです',
    
      'Commit\'s branches' => 'コミットのブランチ',
    
      'Commits' => 'コミット',
    
      'Commits in this Package that Need Attention' => 'このパッケージにある対応が必要なコミット',
    
      'Committer' => 'コミッタ',
    
      'Communication' => 'コミュニケーション',
    
      'Company' => '会社',
    
      'Company Address' => '会社住所',
    
      'Company Name' => '会社名',
    
      'Company address is required.' => '会社住所は必須です.',
    
      'Company name is required.' => '会社名は必須です.',
    
      'Concern Raised' => '懸念あり',
    
      'Conduct Polls' => '投票の実施',
    
      'Conduit API method "%s" does not exist.' => 'Conduit API メソッド "%s" は存在しません.',
    
      'Conduit Certificate' => 'Conduit 証明書',
    
      'Conduit Methods' => 'Conduit メソッド',
    
      'Config' => 'コンフィグ',
    
      'Config \'%s\' Invalid' => '設定 \'%s\' が不正',
    
      'Config key \'%s\' is locked and can only be set in local configuration.' => '設定キー \'%s\' はロックされており, ローカル設定でのみ指定が可能です.',
    
      'Config key \'%s\' is of type \'%s\'. Specify \'true\' or \'false\'.' => '設定キー \'%s\' は \'%s\' タイプです. \'true\' または \'false\' を指定してください.',
    
      'Config key \'%s\' is of type \'%s\'. Specify an integer.' => '設定キー \'%s\' は \'%s\' タイプです. 整数を指定してください.',
    
      'Config key \'%s\' is of type \'%s\'. Specify it in JSON.' => '設定キー \'%s\' は \'%s\' タイプです. JSON 形式で指定してください.',
    
      'Configuration' => '設定',
    
      'Configure %s OAuth.' => '%s OAuth を設定.',
    
      'Configure Conpherence messaging.' => 'Conpherence メッセージングの設定.',
    
      'Configure Differential code review.' => 'Differential コードレビューを設定.',
    
      'Configure Diffusion repository browsing.' => 'Diffusion レポジトリブラウザを設定.',
    
      'Configure Editor' => 'エディタを設定',
    
      'Configure Harbormaster build engine.' => 'Harbormaster ビルドエンジンを設定.',
    
      'Configure JIRA OAuth. NOTE: Only supports JIRA 6.' => 'JIRA OAuth を設定. NOTE: Only supports JIRA 6.',
    
      'Configure Legalpad.' => 'Legalpad を設定.',
    
      'Configure Macro.' => 'マクロを設定.',
    
      'Configure Mail.' => 'メールを設定.',
    
      'Configure Mailgun integration.' => 'Mailgun 連携を設定.',
    
      'Configure Maniphest.' => 'Maniphest の設定.',
    
      'Configure Owners.' => '所有者の設定.',
    
      'Configure PHPMailer.' => 'PHPMailer を設定.',
    
      'Configure Paste.' => 'Paste を設定.',
    
      'Configure Phabricator' => 'Phabricator を設定',
    
      'Configure Phabricator Settings' => 'Phabricator を設定',
    
      'Configure Phame blogs.' => 'Phame ブログ を設定.',
    
      'Configure Pholio.' => 'Pholio を設定.',
    
      'Configure Phrequent.' => 'Phrequent を設定.',
    
      'Configure Projects.' => 'Projects を設定.',
    
      'Configure Recaptcha captchas.' => 'Recaptcha キャプチャ を設定.',
    
      'Configure SMS.' => 'SMS を設定.',
    
      'Configure SendGrid integration.' => 'SendGrid 連携設定.',
    
      'Configure TLS or SSL for SMTP.' => 'SMTP に TLS/SSL を設定.',
    
      'Configure conduit.' => 'Conduit を設定.',
    
      'Configure core options, including URIs.' => 'コアとなるオプションの設定, URI を含みます.',
    
      'Configure database configuration class.' => 'データベース設定用クラスの設定.',
    
      'Configure database connection class.' => 'データベースコネクション用クラスの設定.',
    
      'Configure files and file storage.' => 'ファイルとファイル格納場所の設定.',
    
      'Configure how mail is encoded.' => 'ファイルのエンコード方法の設定.',
    
      'Configure integration with AWS (EC2, SES, S3, etc).' => 'AWS サービス (EC2, SES, S3, 他) との連携設定.',
    
      'Configure mailer used by PHPMailer.' => 'PHPMailer が利用するメーラー設定.',
    
      'Configure more options before beginning the repository import. This will let you fine-tune settings. You can start the import whenever you are ready.' => '%24lang-%3E%27Configure+more+options+before+beginning+the+repository+import.+This+will+let+you+fine-tune+settings.+You+can+start+the+import+whenever+you+are+ready.%27
Configure more options before beginning the repository import. これにより, 細かな微調整ができるでしょう. You can start the import whenever you are ready.',
    
      'Configure more options before creating the repository. This will let you fine-tune settings. You can create the repository whenever you are ready.' => '%24lang-%3E%27Configure+more+options+before+creating+the+repository.+This+will+let+you+fine-tune+settings.+You+can+create+the+repository+whenever+you+are+ready.%27
Configure more options before creating the repository. これにより, 細かな微調整ができるでしょう. 準備ができ次第レポジトリの作成が可能です.',
    
      'Configure real-time notifications.' => 'リアルタイム通知の設定.',
    
      'Configure repositories.' => 'レポジトリの設定.',
    
      'Configure the GC for old logs, caches, etc.' => 'GC の動作について, ログやキャッシュ等の設定.',
    
      'Configure the Phabricator UI, including colors.' => 'Phabricator の UI 設定. 色の変更など.',
    
      'Configure the access logs, which log HTTP/SSH requests.' => 'HTTP/SSH リクエストを記録しているアクセスログの設定.',
    
      'Configure the cutoff for the "Recently Closed" column.' => '"最近の Close" カラムについて, 切り捨て範囲を指定します',
    
      'Confirm %s Account Link' => '%s アカウントリンクの確認',
    
      'Confirm Account Link' => 'アカウントリンクの確認',
    
      'Confirm Approval' => '承認の確認',
    
      'Confirm External Account Link' => '外部アカウントリンクの確認',
    
      'Confirm Link' => 'リンクの確認',
    
      'Confirm Password' => 'パスワードの確認',
    
      'Confirm VCS Password' => 'VCS パスワードの確認',
    
      'Conpherence Notifications' => 'Conpherence 通知',
    
      'Conpherence Preferences' => 'Conpherence 設定',
    
      'Conpherence Thread' => 'Conpherence スレッド',
    
      'Conpherence Threads' => 'Conpherence スレッド',
    
      'Console' => 'コンソール',
    
      'Contains Words' => '含まれる単語',
    
      'Content' => 'コンテンツ',
    
      'Contents' => 'コンテンツ',
    
      'Continue' => '続ける',
    
      'Continue \302\273' => '続ける \302\273',
    
      'Copied to %s' => '%s にコピー済',
    
      'Copied to multiple locations:' => '複数の場所にコピー済:',
    
      'Copy Dashboard' => 'ダッシュボードをコピー',
    
      'Copy Panel' => 'パネルをコピー',
    
      'Copy Panel?' => 'パネルをコピーしますか?',
    
      'Core Applications' => 'コア・アプリケーション',
    
      'Count' => 'カウント',
    
      'Countdown' => 'カウントダウン',
    
      'Countdown to Events' => 'イベントまでのカウントダウン',
    
      'Countdowns' => 'カウントダウン',
    
      'Create' => '作成',
    
      'Create Account' => 'アカウントを作成',
    
      'Create Admin Account' => '管理アカウントを作成',
    
      'Create Another Subtask' => '別のサブタスクを作成',
    
      'Create Application' => 'アプリケーションを作成',
    
      'Create Blog' => 'ブログを作成',
    
      'Create Blueprint' => 'ブループリントを作成',
    
      'Create Bot/Script User' => 'ボット / スクリプトユーザを作成',
    
      'Create Build Plan' => 'ビルドプランを作成',
    
      'Create Build Step' => 'ビルドステップを作成',
    
      'Create Column' => 'カラムを作成',
    
      'Create Copy' => 'コピーを作成',
    
      'Create Countdown' => 'カウントダウンを作成',
    
      'Create Credential' => 'クレデンシャルを作成',
    
      'Create Custom Pages' => 'カスタムページを作成',
    
      'Create Dashboard' => 'ダッシュボードを作成',
    
      'Create Dashboard Panel' => 'ダッシュボードパネルを作成',
    
      'Create Diff' => 'Diff を作成',
    
      'Create Document' => 'ドキュメントを作成',
    
      'Create Event' => 'イベントを作成',
    
      'Create Flag' => 'フラグを作成',
    
      'Create Fragment' => 'フラグメントを作成',
    
      'Create Herald Rule' => 'ヘラルドルールを作成',
    
      'Create Image Macro' => 'イメージマクロを作成',
    
      'Create Initiative' => 'イニシアチブを作成',
    
      'Create List' => 'リストを作成',
    
      'Create Macro' => 'マクロを作成',
    
      'Create Mailing List' => 'メーリングリストを作成',
    
      'Create Meme' => 'Meme を作成',
    
      'Create Merchant' => '商人を作成',
    
      'Create Mirror' => 'ミラーを作成',
    
      'Create Mock' => 'モックを作成',
    
      'Create New Blueprint' => '新規ブループリントを作成',
    
      'Create New Credential' => '新規クレデンシャルを作成',
    
      'Create New Diff' => '新規 Diff を作成',
    
      'Create New Differential Revision' => '新規 Differential リビジョンを作成',
    
      'Create New Panel' => '新規パネルを作成',
    
      'Create New Paste' => '新規ペーストを作成',
    
      'Create New Phriction Document' => '新規 Phriction ドキュメントを作成',
    
      'Create New Product' => '新規製品を作成',
    
      'Create New Project' => '新規プロジェクトを作成',
    
      'Create New Revision' => '新規リビジョンを作成',
    
      'Create New Subtask' => '新規サブタスクを作成',
    
      'Create New Task' => '新規タスクを作成',
    
      'Create New User' => '新規ユーザを作成',
    
      'Create New...' => '新規作成...',
    
      'Create Notification Rules' => '通知ルールを作成',
    
      'Create OAuth Application' => 'OAuth アプリケーションを作成',
    
      'Create Package' => 'パッケージを作成',
    
      'Create Panel' => 'パネルを作成',
    
      'Create Paste' => 'ペーストを作成',
    
      'Create Poll' => '投票を作る',
    
      'Create Post' => 'ポストを作成',
    
      'Create Product' => '製品を作成',
    
      'Create Project' => 'プロジェクトを作成',
    
      'Create Provider' => 'プロバイダを作成',
    
      'Create Pull Request' => 'Pull リクエストを作成',
    
      'Create Question' => '質問を作成',
    
      'Create Release Product' => 'リリース用製品を作成',
    
      'Create Repository' => 'レポジトリを作成',
    
      'Create Repository Now' => '今すぐレポジトリを作成',
    
      'Create Rule' => 'ルールを作成',
    
      'Create Slowvote' => 'Slowvote を作成',
    
      'Create Snapshot' => 'スナップショットを作成',
    
      'Create Snapshot of %s' => '%s のスナップショットを作成',
    
      'Create Standard User' => '標準ユーザを作成',
    
      'Create Subtask' => 'サブタスクを作成',
    
      'Create Task' => 'タスクを作成',
    
      'Create Task...' => 'タスクを作成...',
    
      'Create Test Authorization' => 'テスト認証を作成',
    
      'Create This Document' => 'ここにドキュメントを作成',
    
      'Create User' => 'ユーザを作成',
    
      'Create Variable' => '変数を作成',
    
      'Create a New Hosted Repository' => '新規レポジトリをホストする',
    
      'Create a New Project' => '新規にプロジェクトを作成',
    
      'Create a copy of the dashboard "%s"?' => 'このダッシュボード "%s" のコピーを作成しますか?',
    
      'Create a new board with just a backlog column.' => 'バックログ用のカラムのみの新しいボードを作成します.',
    
      'Create a new document at' => 'この場所に新しいドキュメントを作成します',
    
      'Create a phame post.' => 'Phame ポストを作成.',
    
      'Create a project.' => 'プロジェクトを作成.',
    
      'Create or Import Repository' => 'レポジトリを作成, もしくはインポート',
    
      'Created' => '作成',
    
      'Created After' => '～以降に作成',
    
      'Created Before' => '～以前に作成',
    
      'Created By' => '～によって作成',
    
      'Created by %s' => '%s が作成',
    
      'Credential' => 'クレデンシャル',
    
      'Credential "%s" is of unknown type "%s"!' => 'クレデンシャル "%s" のタイプは "%s" で不明です!',
    
      'Credential "%s" must provide "%s"\, but provides "%s"!' => 'クレデンシャル "%s" は "%s" を提供しなければなりませんが, "%s" が提供されています!',
    
      'Credential Already Locked' => 'クレデンシャルは既にロック済',
    
      'Credential Secret (%s)' => 'クレデンシャルの秘密情報 (%s)',
    
      'Credential Store' => 'クレデンシャルの格納',
    
      'Credential Type' => 'クレデンシャルタイプ',
    
      'Credential is locked' => 'クレデンシャルはロックされています',
    
      'Credential is required!' => 'クレデンシャルは必須項目です!',
    
      'Credential name is required.' => 'クレデンシャル名が必要です.',
    
      'Credentials' => 'クレデンシャル',
    
      'Credit Card or PayPal Account' => 'クレジットカード または PayPay アカウント',
    
      'Credit or Debit Card' => 'クレジット または デビット カード',
    
      'Credit/Debit Card' => 'クレジット / デビット カード',
    
      'Current' => '現在',
    
      'Current Algorithm' => '現在のアルゴリズム',
    
      'Current Blocking Tasks' => '現在のブロックタスク',
    
      'Current Password' => '現在のパスワード',
    
      'Current Picture' => '現在の画像',
    
      'Current Revision' => '現在のリビジョン',
    
      'Current Settings' => '現在の設定',
    
      'Current Value:' => '現在の値:',
    
      'Current Version' => '現在のバージョン',
    
      'Currently Tracking' => '現在追跡中',
    
      'Custom Domain' => 'カスタムドメイン',
    
      'Custom Policy' => 'カスタムポリシー',
    
      'Custom Policy...' => 'カスタムポリシー...',
    
      'Customize Applications...' => 'アプリケーションのカスタマイズ...',
    
      'Customize Home Page' => 'ホームページのカスタマイズ',
    
      'Customized' => 'カスタム値',
    
      'DIFFERENTIAL REVISION' => 'DIFFERENTIAL リビジョン',
    
      'Daemons Not Running' => 'デーモンプロセス が走っていません',
    
      'Daemons and Web Have Different Config' => 'デーモンプロセスとウェブサーバプロセスが異なる設定を使用しています',
    
      'Dangerous Changes' => '危険な変更',
    
      'Dark Console' => 'ダーク コンソール',
    
      'Dashboard' => 'ダッシュボード',
    
      'Dashboard %d' => 'ダッシュボード %d',
    
      'Dashboard Panels' => 'ダッシュボード パネル',
    
      'Dashboard name is required.' => 'ダッシュボード名は必須項目です.',
    
      'Dashboards' => 'ダッシュボード',
    
      'Data' => 'データ',
    
      'Data Type' => 'データタイプ',
    
      'Database' => 'データベース',
    
      'Database Issues' => 'データベース 課題',
    
      'Database Status' => 'データベース ステータス',
    
      'Database Status: %s' => 'データベース ステータス: %s',
    
      'Database Status: %s.%s' => 'データベース ステータス: %s.%s',
    
      'Database Status: %s.%s (%s)' => 'データベース ステータス: %s.%s (%s)',
    
      'Database Status: %s.%s.%s' => 'データベース ステータス: %s.%s.%s',
    
      'Database configuration.' => 'データベース 設定.',
    
      'Database source is not configured properly' => 'データベースのソースが正しく設定されていません',
    
      'Date' => '日付',
    
      'Date Created' => '作成日',
    
      'Date Updated' => '更新日',
    
      'Days' => '日',
    
      'Deactivate' => '非アクティブ化',
    
      'Deactivate Product' => '製品を非アクティブにする',
    
      'Deactivate Repository' => 'レポジトリを非アクティブにする',
    
      'Deactivate Repository?' => 'レポジトリを非アクティブにしますか?',
    
      'Deactivate this repository?' => 'このレポジトリを非アクティブにする?',
    
      'Deadline' => '期限',
    
      'Dec' => '12月',
    
      'Default' => 'デフォルト',
    
      'Default Branch' => 'デフォルトブランチ',
    
      'Default Dashboard for All Users' => 'すべてのユーザののデフォルトダッシュボード',
    
      'Delete' => '削除',
    
      'Delete Application' => 'アプリケーションを削除',
    
      'Delete Authentication Factor' => '認証ファクタを削除',
    
      'Delete Blog?' => 'ブログを削除しますか?',
    
      'Delete Build Step' => 'ビルドステップを削除',
    
      'Delete Countdown' => 'カウントダウンを削除',
    
      'Delete Document' => 'ドキュメントを削除',
    
      'Delete Document?' => 'ドキュメントを削除しますか?',
    
      'Delete File' => 'ファイルを削除',
    
      'Delete Mirror' => 'ミラーを削除',
    
      'Delete OAuth Application?' => 'OAuth アプリケーションを削除しますか?',
    
      'Delete Package' => 'パッケージを削除',
    
      'Delete Post' => 'ポストを削除',
    
      'Delete Post?' => 'ポストを削除?',
    
      'Delete Public Key' => '公開鍵を削除',
    
      'Delete Query' => 'クエリを削除',
    
      'Delete Repository' => 'レポジトリを削除',
    
      'Delete Snapshot' => 'スナップショットを削除',
    
      'Delete User' => 'ユーザを削除',
    
      'Deny' => '不許可',
    
      'Dependencies' => '依存関係',
    
      'Dependent Tasks' => '依存タスク',
    
      'Depends On' => '～に依存',
    
      'Deprecated' => '非推奨',
    
      'Deprecated Method: %s' => '非推奨メソッド: %s',
    
      'Deprecated Methods' => '非推奨メソッド',
    
      'Deprecated mysql.host Format' => '非推奨な mysql.host フォーマット',
    
      'Description' => '説明',
    
      'Description Preview' => '説明のプレビュー',
    
      'Destroy Credential' => 'クレデンシャルを破壊',
    
      'Destroy all facts.' => 'すべてのファクトを破壊.',
    
      'Destroy objects without prompting.' => '確認なしにオブジェクトを破壊.',
    
      'Destroyed' => '破壊済',
    
      'Destroying %s **%s**...\n' => '%s **%s** を破壊しています...\n',
    
      'Destroying objects...' => 'オブジェクトを破壊しています...',
    
      'Destroying table \'%s\'...' => '\'%s\' を破壊しています...',
    
      'Details' => '詳細',
    
      'Developer' => '開発者',
    
      'Developer / Debugging' => '開発者 / デバッグ',
    
      'Developer API' => '開発者用 API',
    
      'Developer Settings' => '開発者用設定',
    
      'Developer Tools' => '開発者用ツール',
    
      'Developer UI Examples' => '開発者用 UI サンプル',
    
      'Device %d' => 'デバイス %d',
    
      'Did nothing.' => '何もしなかった.',
    
      'Diff Preferences' => 'Diff 設定',
    
      'Differential Revision' => 'Differential リビジョン',
    
      'Directory' => 'ディレクトリ',
    
      'Directory Not Tracked' => 'ディレクトリは非追跡中',
    
      'Disable' => '無効化',
    
      'Disable "Re:" prefix' => '先頭文字 "Re:" の追加を無効化',
    
      'Disable %s? They will no longer be able to access Phabricator or receive email.' => '%24lang-%3E%27Disable+%25s%3F+They+will+no+longer+be+able+to+access+Phabricator+or+receive+email.%27
Disable %s?Email の受け取りや、 Phabricator へのアクセスができなくなります.',
    
      'Disable Autoclose' => '自動クローズを無効化',
    
      'Disable DarkConsole' => 'ダークコンソール非表示',
    
      'Disable Filetree' => 'ファイルツリー非表示',
    
      'Disable Macro' => 'マクロを無効にする',
    
      'Disable Notifications, Feed and Herald' => '通知, フィード, ヘラルド を無効化',
    
      'Disable Payment Method' => '支払い方法を無効化',
    
      'Disable Payment Method?' => '支払い方法を無効にしますか?',
    
      'Disable Plan' => 'プランを無効化',
    
      'Disable Prototypes' => 'プロトタイプを無効化',
    
      'Disable Provider' => 'プロバイダを無効化',
    
      'Disable Provider?' => 'プロバイダを無効化しますか?',
    
      'Disable Query' => 'クエリを無効化',
    
      'Disable Query?' => 'クエリを無効化しますか?',
    
      'Disable Real-Time Notifications' => 'リアルタイム通知を無効化',
    
      'Disable Recaptcha' => 'Recaptcha を無効化',
    
      'Disable Rule' => 'ルールを無効化',
    
      'Disable SSH log.' => 'SSH ログを無効化します.',
    
      'Disable User' => 'ユーザの無効化',
    
      'Disable User?' => 'ユーザを無効化しますか?',
    
      'Disabled' => '無効',
    
      'Dislike' => 'わるいね',
    
      'Display Name' => '名前を表示',
    
      'Display Preferences' => '表示設定',
    
      'Disqus authentication and integration options.' => 'Disqus との認証と, 連携のためのオプション項目.',
    
      'Do Not Play' => '再生しない',
    
      'Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.' => '過去をみてふさぎこんではいけない。未来を夢見てはいけない。今ある自分の心に耳を傾けなさい。',
    
      'Document Preview' => 'ドキュメントのプレビュー',
    
      'Document Status' => 'ドキュメントステータス',
    
      'Document Types' => 'ドキュメントタイプ',
    
      'Documentation' => 'ドキュメント',
    
      'Documents' => 'ドキュメント',
    
      'Domain' => 'ドメイン',
    
      'Domain must be unique.' => 'ドメインは他のドメインと重複してはなりません.',
    
      'Donate' => '寄付',
    
      'Done' => '完了',
    
      'Doubloon' => 'ダブロン金貨',
    
      'Download Private Key' => '秘密鍵をダウンロード',
    
      'Draft' => '下書き',
    
      'Draft Post' => '下書きポスト',
    
      'Drag and drop columns to reorder them.' => 'カラムをドラッグ＆ドロップすることで並び順を変更してください.',
    
      'Duplicate' => '重複',
    
      'Duplicate Message' => '重複メッセージ',
    
      'Edit' => '編集',
    
      'Edit "%s" source.' => '"%s" ソースを編集.',
    
      'Edit %s' => '%s を編集',
    
      'Edit %s %s' => '%s %s を編集',
    
      'Edit Account' => 'アカウントを編集',
    
      'Edit Actions' => 'アクションを編集',
    
      'Edit Actions (%s)' => 'アクションを編集 (%s)',
    
      'Edit Answer' => '回答を編集',
    
      'Edit Application' => 'アプリケーションを編集',
    
      'Edit Audio' => '音の再生を編集',
    
      'Edit Audio Behavior' => '音の再生方法を編集',
    
      'Edit Authentication Factor' => '認証ファクターを編集',
    
      'Edit Authentication Provider' => '認証プロバイダを編集',
    
      'Edit Basic Information' => '基本情報を編集',
    
      'Edit Basics' => '基本情報を編集',
    
      'Edit Blocking Tasks' => 'ブロックタスクを編集',
    
      'Edit Blog' => 'ブログを編集',
    
      'Edit Blueprint' => 'ブループリントを編集',
    
      'Edit Blueprint %d' => 'ブループリント %d を編集',
    
      'Edit Branch' => 'ブランチを編集',
    
      'Edit Branch %s' => 'ブランチ %s を編集',
    
      'Edit Branches' => 'ブランチを編集',
    
      'Edit Branches (%s)' => 'ブランチ (%s) を編集',
    
      'Edit Build Plan' => 'ビルドプランを編集',
    
      'Edit Column' => 'カラムを編集',
    
      'Edit Comment' => 'コメントを編集',
    
      'Edit Commit' => 'コミットを編集',
    
      'Edit Conflict!' => '衝突を編集!',
    
      'Edit Countdown' => 'カウントダウンを編集',
    
      'Edit Credential' => 'クレデンシャルを編集',
    
      'Edit Credential %s' => 'クレデンシャル %s を編集',
    
      'Edit Current Version' => '現在のバージョンを編集',
    
      'Edit Dashboard' => 'ダッシュボードを編集',
    
      'Edit Dashboard "%s"' => 'ダッシュボード "%s" を編集',
    
      'Edit Dashboard %d' => 'ダッシュボード %d を編集',
    
      'Edit Dependencies' => '依存関係を編集',
    
      'Edit Details' => '詳細を編集',
    
      'Edit Differential Revision' => 'Differential リビジョンを編集',
    
      'Edit Differential Revisions' => 'Differential リビジョンを編集',
    
      'Edit Diffusion Commit' => 'Diffusion コミットを編集',
    
      'Edit Document' => 'ドキュメントを編集',
    
      'Edit Encoding' => 'エンコードを編集',
    
      'Edit Event' => 'イベントを編集',
    
      'Edit Existing Document?' => 'ドキュメント編集を終了しますか?',
    
      'Edit Existing Provider' => '既存のプロバイダを編集',
    
      'Edit File' => 'ファイルを編集',
    
      'Edit Fragment Policies' => 'フラグメントポリシーを編集',
    
      'Edit Fragment Policies: %s' => 'フラグメントポリシーを編集: %s',
    
      'Edit History' => '履歴を編集',
    
      'Edit Hosting' => 'ホスティングを編集',
    
      'Edit Hosting (%s)' => 'ホスティング (%s) を編集',
    
      'Edit Image Macro' => '画像マクロを編集',
    
      'Edit Initiative' => 'イニシアチブを編集',
    
      'Edit Inline Comment' => 'インラインコメントを編集',
    
      'Edit Local' => 'ローカルを編集',
    
      'Edit Log' => 'ログを編集',
    
      'Edit Macro' => 'マクロを編集',
    
      'Edit Mailing List' => 'メーリングリストを編集',
    
      'Edit Maniphest Tasks' => 'Maniphest タスクを編集',
    
      'Edit Members' => 'メンバを編集',
    
      'Edit Merchant' => '商人を編集',
    
      'Edit Merchant %d %s' => '商人を編集 %d %s',
    
      'Edit Mirror' => 'ミラーを編集',
    
      'Edit Mock' => 'モックを編集',
    
      'Edit Multiple Files' => '複数のファイルを編集',
    
      'Edit Notes' => '編集ノート',
    
      'Edit OAuth Application: %s' => 'OAuth アプリケーションを編集: %s',
    
      'Edit Package' => 'パッケージを編集',
    
      'Edit Panel' => 'パネルを編集',
    
      'Edit Paste' => 'ペーストを編集',
    
      'Edit Payment Method' => '支払方法を編集',
    
      'Edit Payment Provider %d %s' => '支払プロバイダ %d %s を編集',
    
      'Edit Pholio Mocks' => 'Pholio モックを編集',
    
      'Edit Phriction Document' => 'Phriction ドキュメントを編集',
    
      'Edit Picture' => '画像を編集',
    
      'Edit Plan' => 'プランを編集',
    
      'Edit Policies' => 'ポリシーを編集',
    
      'Edit Policies: %s' => 'ポリシーを編集: %s',
    
      'Edit Policy' => 'ポリシーを編集',
    
      'Edit Poll' => '投票を編集',
    
      'Edit Post' => 'ポストを編集',
    
      'Edit Product' => '製品を編集',
    
      'Edit Profile' => 'プロフィールを編集',
    
      'Edit Profile Picture' => 'プロフィールの画像を編集',
    
      'Edit Project' => 'プロジェクトを編集',
    
      'Edit Project Picture' => 'プロジェクトの画像を編集',
    
      'Edit Protocols' => 'プロトコルを編集',
    
      'Edit Protocols (%s)' => 'プロトコル (%s) を編集',
    
      'Edit Provider' => 'プロバイダを編集',
    
      'Edit Provider %d' => 'プロバイダ %d を編集',
    
      'Edit Pull Request' => 'Pull リクエストを編集',
    
      'Edit Queries...' => 'クエリを編集...',
    
      'Edit Query...' => 'クエリを編集...',
    
      'Edit Question' => '質問を編集',
    
      'Edit Releeph Product' => 'Releeph 製品を編集',
    
      'Edit Remote' => 'リモートを編集',
    
      'Edit Repository' => 'レポジトリを編集',
    
      'Edit Revision' => 'リビジョンを編集',
    
      'Edit Rule' => 'ルールを編集',
    
      'Edit SSH Public Key' => 'SSH 公開鍵を編集',
    
      'Edit Saved Query' => '登録クエリを編集',
    
      'Edit Settings' => '設定の編集',
    
      'Edit Source' => 'ソースの編集',
    
      'Edit Step' => 'ステップの編集',
    
      'Edit Step: %s' => 'ステップ編集: %s',
    
      'Edit Subversion Info' => 'Subversion 情報を編集',
    
      'Edit Subversion Info (%s)' => 'Subversion 情報編集 (%s)',
    
      'Edit Task' => 'タスクの編集',
    
      'Edit Text Encoding' => 'テキストエンコードの編集',
    
      'Edit Variable' => '変数の編集',
    
      'Edit policy is not mutable.' => 'ポリシーは変更できません.',
    
      'Editable By' => '編集者の範囲',
    
      'Edited' => '編集済',
    
      'Edited Image' => '編集済イメージ',
    
      'Editor Link' => 'エディタへのリンク',
    
      'Effect' => '効果',
    
      'Effects' => '効果',
    
      'Email Addresses' => 'Email アドレス',
    
      'Email Always' => '常に Email 送信',
    
      'Email Body Text' => '本文を Email 送信',
    
      'Email Contains' => 'Email に含まれる',
    
      'Email Format' => 'Email フォーマット',
    
      'Email Notifications' => 'Email 通知',
    
      'Email Paste' => 'Email ペースト',
    
      'Email Preferences' => 'Email 設定',
    
      'Email Sent' => 'Email 送信済',
    
      'Email User' => 'ユーザに Email 送信',
    
      'Email field is required.' => 'Email フィールドは必須項目です.',
    
      'Email is required.' => 'Email は必須項目です.',
    
      'Email me every update.' => '毎回 Email で送信.',
    
      'Email: Add Address' => 'Email: アドレスの追加',
    
      'Email: Change Primary' => 'Email: メインアドレスの変更',
    
      'Email: Remove Address' => 'Email: アドレスの削除',
    
      'Email: Verify' => 'Email: 検証',
    
      'Embed YouTube videos' => 'YouTube 動画を埋め込む',
    
      'Empty' => '空',
    
      'Empty Answer' => '空の回答',
    
      'Empty Comment' => '空のコメント',
    
      'Empty Commit' => '空のコミット',
    
      'Empty Directory' => '空のディレクトリ',
    
      'Empty Document' => '空のドキュメント',
    
      'Empty List' => '空のリスト',
    
      'Empty Mail' => '空のメール',
    
      'Empty Page' => '空のページ',
    
      'Empty Parent Document' => '空の親ドキュメント',
    
      'Empty Repository' => '空のレポジトリ',
    
      'Empty Task' => '空のタスク',
    
      'Enable Autoclose' => '自動クローズを有効化',
    
      'Enable DarkConsole' => 'ダークコンソール表示',
    
      'Enable Filetree' => 'ファイルツリー表示',
    
      'Enable Notifications, Feed and Herald' => '通知, フィード, ヘラルド を有効化',
    
      'Enable Phabricator\'s debugging console.' => 'Phabricatorのデバッグコンソールを有効にします.',
    
      'Enable jump nav functionality in all search boxes.' => 'すべての検索ボックスでジャンプナビ機能を有効にする.',
    
      'Enable/Disable' => '有効化/無効化',
    
      'Enabled' => '有効',
    
      'Encoding' => 'エンコード',
    
      'End Date' => '終了日',
    
      'Ended' => '終了',
    
      'Ended %s' => '%s に終了',
    
      'Ended on %s' => '%s に終了しました',
    
      'Ends' => '終了予定',
    
      'Ends %s' => '%s に終了予定',
    
      'Engage in Deliberations' => '審議に参加する',
    
      'Enter Deliberations' => '審議に入る',
    
      'Enter value as JSON.' => '値はJSON形式で入力してください.',
    
      'Enter value in JSON.' => '値はJSON形式で入力してください.',
    
      'Error setting repository encoding \'%s\': %s\'' => 'レポジトリのエンコード設定エラー \'%s\': %s\'',
    
      'Evil Spooky Haunted Tree' => '邪悪で不気味なお化けの木',
    
      'Example' => '例',
    
      'Example Branch' => '例ブランチ',
    
      'Example: %s' => '例: %s',
    
      'Example: %s%sFor LDAPS, use: %s' => '例: %s%s LDAPS用には: %s',
    
      'Examples' => '例',
    
      'Excel Export Not Configured' => 'Excel 出力は設定されていません',
    
      'Execute Query' => 'クエリを実行',
    
      'Expected "<mode> <type> <hash> <size>\\t<name>", for ls-tree of "%s:%s", got: %s' => 'Expected "<mode> <type> <hash> <size>\t<name>", for ls-tree of "%s:%s", got: %s',
    
      'Experimental' => '実験的',
    
      'Expired' => '失効済',
    
      'Expires' => '失効',
    
      'Explore Applications' => 'アプリケーションを探索',
    
      'Explore More Applications' => '追加アプリケーションを探索',
    
      'Explore Phabricator' => 'Phabricatorを探索',
    
      'Export Tasks to Excel' => 'タスクをエクセル形式で出力',
    
      'Export to Excel' => 'エクセル形式で出力',
    
      'External Account' => '外部アカウント',
    
      'External Accounts' => '外部アカウント',
    
      'External Object' => '外部オブジェクト',
    
      'External accounts can only be edited by the account owner.' => 'アカウントの所有者のみ外部アカウントを変更できます.',
    
      'Extras' => 'エクストラ',
    
      'FILE DETAIL' => 'ファイルの詳細',
    
      'FILE LINKS' => 'ファイルリンク',
    
      'Factor Name: %s' => 'ファクタ名: %s',
    
      'Facts' => 'ファクト',
    
      'Failure Count' => '失敗数',
    
      'Failures' => '失敗',
    
      'Feb' => '2月',
    
      'Feed Stories' => 'Feed ストーリー',
    
      'Feed options.' => 'Feed のオプション項目.',
    
      'File' => 'ファイル',
    
      'File \'%s\'' => 'ファイル \'%s\'',
    
      'File (Deleted)' => 'ファイル (削除済)',
    
      'File Artifact' => 'ファイル アーティファクト',
    
      'File Contents' => 'ファイル コンテント',
    
      'File ID' => 'ファイル ID',
    
      'File Info' => 'ファイル情報',
    
      'File Link Has Expired' => 'ファイルリンクは期限切れです',
    
      'File Mode' => 'ファイル モード',
    
      'File Name' => 'ファイル名',
    
      'File PHID: %s' => 'ファイル PHID: %s',
    
      'File Renamed' => 'ファイル名は変更されました',
    
      'File Size' => 'ファイル サイズ',
    
      'File Visibility' => 'ファイル の可視範囲',
    
      'Files' => 'ファイル',
    
      'Filter By Project' => 'プロジェクトでフィルタ',
    
      'Filter IP' => 'IP フィルタ',
    
      'Filter: %s' => 'フィルタ: %s',
    
      'Find Backers' => 'Backers を見つける',
    
      'Flag %s' => '%s にフラグを立てる',
    
      'Flag Color' => 'フラグの色',
    
      'Flag For Later' => '後々のためにフラグを立てる',
    
      'Flagged' => 'フラグ付',
    
      'Flagged by Herald Rule "%s".' => 'Herald Rule "%s" によりフラグが立てられました.',
    
      'Flags' => 'フラグ',
    
      'Flags are private. Only you can view or edit your flags.' => 'フラグはプライベートです. Only you can view or edit your flags.',
    
      'Focus' => '集中する',
    
      'Folder' => 'フォルダ',
    
      'Forgot your password?' => 'パスワードを忘れましたか?',
    
      'Fork This Paste' => 'このペーストを Fork',
    
      'Fork of %s' => '%s の Fork',
    
      'Forked From' => 'Fork 元',
    
      'Forks' => 'フォーク',
    
      'Format for the HTTP access log. Use {{log.access.path}} to set the path. Available variables are:' => '%24lang-%3E%27Format+for+the+HTTP+access+log.+Use+%7B%7Blog.access.path%7D%7D+to+set+the+path.+Available+variables+are%3A%27
Format for the HTTP access log. Use {{log.access.path}} to set the path. 利用可能な変数は:',
    
      'Format for the SSH access log. Use {{log.ssh.path}} to set the path. Available variables are:' => '%24lang-%3E%27Format+for+the+SSH+access+log.+Use+%7B%7Blog.ssh.path%7D%7D+to+set+the+path.+Available+variables+are%3A%27
Format for the SSH access log. Use {{log.ssh.path}} to set the path. 利用可能な変数は:',
    
      'Format used when rendering a time of day.' => '時間の表示に使用されるフォーマットです.',
    
      'Format:' => 'フォーマット:',
    
      'Found Binary %s' => '%s バイナリを発見',
    
      'Freeing task leases...' => 'task leases...',
    
      'Fri' => '金',
    
      'Full-Text Search' => '全文検索',
    
      'Fullscreen Mode' => 'フルスクリーンモード',
    
      'Fully Imported' => '全インポート完了',
    
      'Garbage' => 'ゴミ箱',
    
      'Garbage Collector' => 'ガベージコレクタ',
    
      'Generate Keypair' => 'キーペアを生成',
    
      'Generate New Keypair' => '新規キーペアを生成',
    
      'Generate XHP AST' => 'XHP AST を生成',
    
      'Generate a meme.' => 'Meme を生成.',
    
      'Generate an SSH keypair.' => 'SSH キーペアを生成.',
    
      'Generate documentation.' => 'ドキュメントを生成.',
    
      'Generated' => '生成済',
    
      'Generated Key' => '生成キー',
    
      'Generating book "%s"...' => 'ブック "%s" を生成...',
    
      'Get Organized' => 'まとめ上げよう',
    
      'Get Patch' => 'パッチを取得',
    
      'Give Token' => 'トークンを与える',
    
      'Given by %s on %s' => '%sから貰った, %s',
    
      'Goal' => 'ゴール',
    
      'Good' => '良い',
    
      'Green' => '緑色',
    
      'Grey' => '灰色',
    
      'Grey Medal' => 'グレイメダル',
    
      'Group By' => '～でグループ化',
    
      'Grovel in Awe' => 'この偉大さにひれ伏す',
    
      'Hashtags' => 'ハッシュタグ',
    
      'Haypence' => '½ ペニー貨',
    
      'Heart' => 'ハート',
    
      'Heartbreak' => '失恋',
    
      'Help' => 'ヘルプ',
    
      'Help / Documentation' => 'ヘルプ / ドキュメント',
    
      'Help/Options' => 'ヘルプ / オプション',
    
      'Hide Column' => 'カラムを隠す',
    
      'Hide Copies/Branches' => 'コピー / ブランチ を隠す',
    
      'Hide Hidden Columns' => '隠されていたカラムを隠す',
    
      'Hide Query' => 'クエリを隠す',
    
      'Hide Search' => '検索を隠す',
    
      'High' => '高',
    
      'High-Volume Task Queues' => '大容量タスクキュー',
    
      'Highlight httpd.conf as "apacheconf".' => 'httpd.conf を "apacheconf" としてハイライトする.',
    
      'Highlighted' => 'ハイライト済',
    
      'Highlighting' => 'ハイライト',
    
      'Hisec: Enter' => 'Hisec: 入場',
    
      'Hisec: Exit' => 'Hisec: 出場',
    
      'Hisec: Failed Attempt' => 'Hisec: 試行失敗',
    
      'History' => '履歴',
    
      'History Beckons' => '歴史を綴る',
    
      'Home' => 'ホーム',
    
      'Home Page' => 'ホームページ',
    
      'Host Repository Elsewhere' => 'レポジトリを他の場所でホスト',
    
      'Host Repository on Phabricator' => 'レポジトリを Phabricator でホスト',
    
      'Host and Browse Repositories' => 'レポジトリのホストと一覧表示',
    
      'Host for SMTP.' => 'SMTP のためのホスト.',
    
      'Host: %s' => 'ホスト: %s',
    
      'Hosted' => 'ホスト',
    
      'Hosted Elsewhere' => 'リモートでレポジトリがホストされる',
    
      'Hosted Repositories' => 'ローカルでレポジトリをホストする',
    
      'Hosted and Remote Repositories' => 'ローカルと、リモートでレポジトリはホストされる',
    
      'Hosted on Phabricator' => 'Phabricator でホスト中',
    
      'Hosting' => 'ホスティング',
    
      'Hours' => '時',
    
      'IRC Logs' => 'IRC ログ',
    
      'Icon' => 'アイコン',
    
      'Icons' => 'アイコン',
    
      'Identity' => 'ID',
    
      'If No Rules Match' => 'もしルールに合致するものがなければ, ',
    
      'If no rules match, %s all other users.' => 'もしルールに合致するものがなければ, すべてのユーザを %s ',
    
      'If you have **Autoclose** enabled for this repository, Phabricator can close tasks and revisions when corresponding commits are pushed to the repository. If you want to autoclose objects only when commits appear on specific branches, you can list those branches in **Autoclose Only**. By default, all tracked branches will autoclose objects.' => '%24lang-%3E%27If+you+have+%2A%2AAutoclose%2A%2A+enabled+for+this+repository%2C+Phabricator+can+close+tasks+and+revisions+when+corresponding+commits+are+pushed+to+the+repository.+If+you+want+to+autoclose+objects+only+when+commits+appear+on+specific+branches%2C+you+can+list+those+branches+in+%2A%2AAutoclose+Only%2A%2A.+By+default%2C+all+tracked+branches+will+autoclose+objects.%27
If you have **Autoclose** enabled for this repository, Phabricator can close tasks and revisions when corresponding commits are pushed to the repository. ある特定のブランチにコミットが出現したとき, オブジェクトを自動クローズとしたい場合は, 以下の **自動クローズのみ** にそれらのブランチをリストで与えてください. デフォルトの状態では, 追跡中のブランチはオブジェクトを自動クローズします.',
    
      'Image' => '画像',
    
      'Image %d: %s' => '画像 %d: %s',
    
      'Image Dimensions' => '画像の寸法',
    
      'Image Macro' => '画像マクロ',
    
      'Image Macro "%s"' => '画像マクロ "%s"',
    
      'Image Macros and Memes' => '画像マクロと Meme',
    
      'Image URI' => '画像 URI',
    
      'Images' => '画像',
    
      'Import' => 'インポート',
    
      'Import Columns' => 'カラムをインポート',
    
      'Import Entire Repository' => 'レポジトリ全部をインポート',
    
      'Import an Existing External Repository' => '外部レポジトリをインポートする',
    
      'Import board columns from another project.' => '別のプロジェクトからカラムのインポートを行います.',
    
      'In All Projects' => 'すべてのプロジェクトにある',
    
      'In Any Project' => 'プロジェクトにある',
    
      'In Users\' Projects' => 'ユーザのプロジェクト',
    
      'In page titles, show Tool names as plain text: [Differential]' => 'ページタイトルのツールを、プレーンテキストで表示: [Differential]',
    
      'In page titles, show Tool names as unicode glyphs: \342\232\231' => 'ページタイトルのツールを、ユニコードアイコンで表示: \342\232\231',
    
      'Inactive' => '非アクティブ',
    
      'Inactive Products' => '非アクティブな製品',
    
      'Inactive Repositories' => '非アクティブなレポジトリ',
    
      'Include Projects' => 'プロジェクトを含む',
    
      'Include Users' => 'ユーザを含む',
    
      'Include patches in Diffusion mail as body text.' => 'Diffusion メールのパッチを本文テキストとして含む.',
    
      'Include stories about projects I am a member of.' => '自分がメンバとして参加中のプロジェクトのストーリーを含む.',
    
      'Index' => '目次',
    
      'Indigo' => 'インディゴ',
    
      'Initiative' => 'イニシアチブ',
    
      'Inline Comment' => 'インラインコメント',
    
      'Inline Comments' => 'インラインコメント',
    
      'Install' => 'インストール',
    
      'Install Certificate' => '証明書をインストール',
    
      'Install Dashboard' => 'ダッシュボードをインストール',
    
      'Install Instructions' => 'インストールの手引き',
    
      'Install Phabricator' => 'Phabricator のインストール',
    
      'Installed' => 'インストール済',
    
      'Invalid' => '不適切',
    
      'Issue' => '課題',
    
      'Issue Resolved' => '課題解決',
    
      'Issues' => '課題',
    
      'It is an experimental feature and may not work.' => '実験的な機能ですので, 動かないかもしれません.',
    
      'Italics' => '斜体',
    
      'Jan' => '1月',
    
      'Join Project' => 'プロジェクトに参加',
    
      'Join policy is not mutable.' => '参加ポリシーは変更可能ではありません.',
    
      'Joinable Blogs' => '参加可能なブログ',
    
      'Joinable By' => '参加可能な範囲',
    
      'Joined' => '参加済',
    
      'Joined After' => '～以降に参加',
    
      'Joined Before' => '～以前に参加',
    
      'Jul' => '7月',
    
      'Jun' => '6月',
    
      'Key' => 'キー',
    
      'Key/Value Configuration Store' => 'キー / バリュー型データの保持',
    
      'Keyboard Shortcuts' => 'キーボードショートカット',
    
      'Language' => '言語',
    
      'Languages' => '言語',
    
      'Last Author' => '最終作成者',
    
      'Last Updated' => '最終更新',
    
      'Last Updated %s' => '最終更新 %s',
    
      'Last Valid Account' => '最新の有効なアカウント',
    
      'Last pull failed!' => '最後の Pull が失敗しました!',
    
      'Last revert failed!' => '最後の Revert 処理が失敗しました!',
    
      'Last updated %s (%s ago).' => '最終更新 %s (%s ago).',
    
      'Latest Version' => '最終バージョン',
    
      'Latest Version %s' => '最終バージョン %s',
    
      'Launch daemons in \'trace\' mode by default.' => 'デーモン起動時には \'トレース出力 (trace)\' をデフォルトとする.',
    
      'Launch daemons in \'trace\' mode by default. This creates an ENORMOUS amount of output, but can help debug issues. Daemons launched in debug mode with \'phd debug\' are always launched in trace mdoe. See also \'phd.verbose\'.' => '%24lang-%3E%27Launch+daemons+in+%5C%27trace%5C%27+mode+by+default.+This+creates+an+ENORMOUS+amount+of+output%2C+but+can+help+debug+issues.+Daemons+launched+in+debug+mode+with+%5C%27phd+debug%5C%27+are+always+launched+in+trace+mdoe.+See+also+%5C%27phd.verbose%5C%27.%27
Launch daemons in \'trace\' mode by default. これにより, 信じられないほど大量の出力が生成されることになりますが, 問題をデバッグする助けにはなるでしょう.  \'phd debug\'によりデバッグモードで起動されたデーモンプロセスは、トレースモードで起動されることになります. \'phd.verbose\' 設定も確認してください.',
    
      'Launch daemons in \'verbose\' mode by default.' => 'デーモン起動時には \'冗長出力 (verbose)\' をデフォルトとする.',
    
      'Launchable' => 'ランチ可能',
    
      'Launcher' => 'ランチャ',
    
      'Layout Mode' => 'レイアウトモード',
    
      'Leader Board' => 'リーダボード',
    
      'Learn More' => 'もっと知る',
    
      'Leased Tasks' => 'リースされたタスク',
    
      'Leave Project' => 'プロジェクトを離れる',
    
      'Leave Project...' => 'プロジェクトを離れる...',
    
      'Legalpad Document' => 'Legalpad ドキュメント',
    
      'Legalpad Documents' => 'Legalpad ドキュメント',
    
      'Legalpad Signatures' => 'Legalpad 署名',
    
      'Like' => 'いいね',
    
      'Link' => 'リンク',
    
      'Link %s Account' => '%s アカウントをリンク',
    
      'Link Account' => 'アカウントをリンク',
    
      'Link Accounts' => 'アカウントをリンク',
    
      'Link External Account' => '外部アカウントをリンク',
    
      'Link LDAP Account' => 'LDAP アカウントをリンク',
    
      'Linked Accounts and Authentication' => 'リンクされたアカウント及び認証',
    
      'Lint Commit' => 'Lint コミット',
    
      'Lint Errors' => 'Lint エラー',
    
      'Lint Postponed' => 'Lint 延期済',
    
      'Lint Skipped' => 'Lint スキップ済',
    
      'Lint Warnings' => 'Lint 警告',
    
      'Lint not Available' => 'Lint は利用不可',
    
      'Lint was skipped when generating these changes.' => 'これらの変更が行われた際, Lint はスキップされました.',
    
      'Local' => 'ローカル',
    
      'Local Maniphest URL' => 'ローカル Maniphest URL',
    
      'Local Name' => 'ローカルの名前',
    
      'Local Path' => 'ローカルパス',
    
      'Local Version' => 'ローカルバージョン',
    
      'Local storage disk path.' => 'ローカル格納ディスクのパス.',
    
      'Lock Credential' => 'クレデンシャルをロックする',
    
      'Lock Permanently' => '永続的にロックする',
    
      'Lock Permanently:' => '永続的なロック:',
    
      'Lock Project' => 'プロジェクトのロック',
    
      'Locked Permanently' => '永続的にロック済',
    
      'Log out of Phabricator?' => 'Phabricator からログアウトしますか?',
    
      'Logged in users can take this action.' => 'ログイン中ユーザはこのアクションを起こせます.',
    
      'Login' => 'ログイン',
    
      'Login (%s)' => 'ログイン (%s)',
    
      'Login Failed' => 'ログインが失敗しました',
    
      'Login Failure' => 'ログイン失敗',
    
      'Login Required' => 'ログインが必要です',
    
      'Login and Registration' => 'ログインと登録',
    
      'Login or Register' => 'ログイン または 登録',
    
      'Login or Register with LDAP' => 'LDAP を利用して ログイン または 登録',
    
      'Login to Comment' => 'ログインしてコメントする',
    
      'Login to Phabricator' => 'Phabricator にログイン',
    
      'Login with LDAP' => 'LDAP を利用してログイン',
    
      'Login with Phabricator' => 'Phabricator を利用してログイン',
    
      'Login/Registration' => 'ログイン/ユーザ登録',
    
      'Login/Username' => 'ログイン/ユーザ名',
    
      'Login: %s' => 'ログイン:  %s',
    
      'Login: Failure' => 'ログイン: 失敗',
    
      'Login: Partial Login' => 'ログイン: 簡易ログイン',
    
      'Login: Upgrade to Full' => 'ログイン:  完全ログインに移行',
    
      'Logout' => 'ログアウト',
    
      'Louder is Better' => '大声であるほど良い',
    
      'Love' => '愛',
    
      'Low' => '低',
    
      'Lowercase letters, digits, dot and hyphen only.' => '英字小文字, 数字, ドット, ハイフン のみが使用できます.',
    
      'Macro' => 'マクロ',
    
      'Macro "%s"' => 'マクロ "%s"',
    
      'Macro %s: %s %s' => 'マクロ %s: %s %s',
    
      'Macro Disabled' => 'マクロ無効',
    
      'Macro must be at least three characters long and contain only lowercase letters, digits, hyphens, colons and underscores.' => 'マクロは最小が3文字で, 英数小文字/ハイフン/コロン/下線 のみが含められます.',
    
      'Macro name is not unique!' => 'マクロ名が重複しています!',
    
      'Macro name is required.' => 'マクロ名は必須です.',
    
      'Macros' => 'マクロ',
    
      'Magical Portal' => '魔法のポータル',
    
      'Mail' => 'メール',
    
      'Make Administrator' => '管理者にする',
    
      'Make Administrator?' => '管理者にしますか?',
    
      'Make HTTP Request' => 'HTTP リクエストを送る',
    
      'Make Phabricator even cooler!' => 'Phabricator をさらに恰好よく!',
    
      'Make Primary' => 'メインにする',
    
      'Manage' => '管理',
    
      'Manage Board' => 'ボードの管理',
    
      'Manage Build Plans' => 'ビルドプランの管理',
    
      'Manage Credentials' => 'クレデンシャルの管理',
    
      'Manage Dashboard' => 'ダッシュボードの管理',
    
      'Manage Document' => 'ドキュメントの管理',
    
      'Manage Panels' => 'パネルの管理',
    
      'Manage Phabricator Daemons' => 'Phabricator デーモンの管理',
    
      'Managing Daemons with phd' => 'phd を使ったデーモンプロセスの管理方法',
    
      'Maniphest Task' => 'Maniphest タスク',
    
      'Manufacturing Defect?' => '欠陥上等?',
    
      'Mar' => '3月',
    
      'Mark All Read' => 'すべて既読とする',
    
      'Maximum number of points of tasks allowed in the column.' => 'このタスク内の最大ポイント数です.',
    
      'May' => '5月',
    
      'Members' => 'メンバー',
    
      'Members of Project...' => 'プロジェクトのメンバー...',
    
      'Members of a project can always view it.' => 'プロジェクトのメンバーは常に閲覧可能です.',
    
      'Members of an account can always view and edit it.' => 'アカウントのメンバーは常に閲覧・編集可能です.',
    
      'Members of the project "%s" can take this action.' => 'プロジェクト "%s" のメンバーはこのアクションを行えます.',
    
      'Merge Duplicates In' => '重複タスクをマージ',
    
      'Message' => 'メッセージ',
    
      'Message ID Hash: %s' => 'メッセージ ID ハッシュ: %s',
    
      'Message: %s' => 'メッセージ: %s',
    
      'Messages' => 'メッセージ',
    
      'Minimum password length.' => 'パスワード長の下限.',
    
      'Minimum password length: %d characters.' => 'パスワード長の下限: %d 文字.',
    
      'Minutes' => '分',
    
      'Mirror %d %s' => 'ミラー %d %s',
    
      'Mirrors' => 'ミラー',
    
      'Missing' => '不足',
    
      'Missing \'%s\' Binary' => 'あるべきバイナリ \'%s\' が欠如しています',
    
      'Missing \'fileinfo\' Extension' => '\'fileinfo\' エクステンションが欠如しています',
    
      'Missing \'gd\' Extension' => '\'gd\' エクステンションが欠如しています',
    
      'Missing Binary %s' => 'あるべきバイナリ %s が欠如しています',
    
      'Missing Dependency' => '依存が満たされていません',
    
      'Missing Key' => 'キーが欠如しています',
    
      'Missing Panel' => 'パネルが欠如しています',
    
      'Missing Repository Local Path' => 'ローカルレポジトリのためのパス設定がされていません',
    
      'Missing Required Extensions' => '必要なエクステンションが欠如しています',
    
      'Missing Sendmail' => 'あるべき Sendmail が欠如しています',
    
      'Missing Special' => '特別なものが欠如しています',
    
      'Missing or malformed parameter.' => '未指定 または 不正な形式のパラメータ.',
    
      'Mobile' => 'モバイル',
    
      'Mobile App (TOTP)' => 'モバイルアプリ (TOTP)',
    
      'Mobile Phone App (TOTP)' => 'モバイル携帯アプリ (TOTP)',
    
      'Mock' => 'モック',
    
      'Mock History' => 'モック履歴',
    
      'Mock images or descriptions change.' => 'モック画像 または 説明が変更されます.',
    
      'Mode' => 'モード',
    
      'Mode is required.' => 'モードは必須項目です.',
    
      'Modern Methods' => 'モダンなメソッド',
    
      'Modified' => '変更',
    
      'Mon' => '月',
    
      'Monday' => '月曜日',
    
      'Monospaced' => '固定幅',
    
      'Monospaced Font' => '固定幅フォント',
    
      'Monospaced Textareas' => '固定幅フォント テキストエリア',
    
      'More...' => 'もっと見る...',
    
      'Most Recent Change' => '最近の変更',
    
      'Mountain of Wealth' => '富の山',
    
      'Move Document' => 'ドキュメントを移動',
    
      'Move Post' => 'ポストを移動',
    
      'Multi-Factor Auth' => '多段階認証',
    
      'Multi-Factor Authentication Configured' => '多段階認証が設定されました',
    
      'Multi-Factor Login' => '多段階認証ログイン',
    
      'Multi-Factor Required' => '多段階認証が必要です',
    
      'Multi-Factor: Add Factor' => '多段階認証: ファクタを追加',
    
      'Multi-Factor: Remove Factor' => '多段階認証: ファクタを削除',
    
      'Multiple Matching Commits' => 'マッチした複数のコミット',
    
      'Multiple Receivers' => '複数の受信者',
    
      'Must Verify Email' => 'Email の検証が必要',
    
      'My Drafts' => '自分の下書き',
    
      'My Events' => '自分のイベント',
    
      'My Posts' => '自分のポスト',
    
      'MySQL InnoDB Engine Not Available' => 'MySQL InnoDB Engine が利用可能ではありません',
    
      'MySQL May Run Slowly' => 'MySQL の処理が遅くなるかもしれません',
    
      'MySQL STRICT_ALL_TABLES Mode Not Set' => 'MySQL STRICT_ALL_TABLES モードが設定されていません',
    
      'MySQL database hostname.' => 'MySQL データベースのホスト名.',
    
      'MySQL ft_stopword_file Not Supported' => 'MySQL の ft_stopword_file はサポートされません',
    
      'MySQL is Using Default Minimum Word Length' => 'MySQL が, デフォルトの Minimum Word Length を使用しています',
    
      'MySQL is Using Default Stopword File' => 'MySQL が, デフォルトの Stopword ファイルを使用しています',
    
      'MySQL is configured to only index words with at least %d characters.' => 'MySQL が、%d 字以上の単語のみがインデックス対象になるよう設定されています.',
    
      'NOTE: The configuration setting [[ %s | %s ]] is currently disabled. You must enable it to activate authenticated access to repositories over HTTP.' => '%24lang-%3E%27NOTE%3A+The+configuration+setting+%5B%5B+%25s+%7C+%25s+%5D%5D+is+currently+disabled.+You+must+enable+it+to+activate+authenticated+access+to+repositories+over+HTTP.%27
NOTE: The configuration setting [[ %s | %s ]] is currently disabled. HTTP 経由のレポジトリ利用では、認証付のアクセスが有効にされていなければなりません.',
    
      'NOTE: This provider **only supports JIRA 6**. It will not work with JIRA 5 or earlier.' => '%24lang-%3E%27NOTE%3A+This+provider+%2A%2Aonly+supports+JIRA+6%2A%2A.+It+will+not+work+with+JIRA+5+or+earlier.%27
NOTE: This provider **only supports JIRA 6**. JIRA 5 以前のバージョンでは正常動作を保証しません.',
    
      'Name' => '名称',
    
      'Name Contains' => '名前に含まれる',
    
      'Name field is required.' => '名称フィールドは必須項目です.',
    
      'Name is required.' => '名称は必須項目です.',
    
      'Name must not contain spaces or commas.' => '名称にスペースやコンマを含むことはできません.',
    
      'Nameless Tab' => '無名のタブ',
    
      'Names must match to compare schemata!' => '名称は, スキーマと対応付けがなされていなければなりません!',
    
      'Natural' => '自然に',
    
      'Natural SVN root should work properly.' => '動作には通常使う SVN ルートでも十分です.',
    
      'Navel Orange' => 'オレンジが必要',
    
      'Need Attention' => '対応が必要',
    
      'Need Help with Setup?' => 'セットアップに助けが必要ですか?',
    
      'Needs Approval' => '承認が必要',
    
      'Needs Pull' => 'Pull が必要',
    
      'Needs Revert' => 'リバートが必要',
    
      'Needs Review' => 'レビューが必要',
    
      'Needs Revision' => 'リビジョンが必要',
    
      'Needs Triage' => '応急処置を求む',
    
      'Never miss an episode ever again.' => '絶対に次回のエピソードを見逃さない.',
    
      'Never send email notifications' => '絶対に Email 通知を送らない',
    
      'New' => '新規',
    
      'New Action' => '新規アクション',
    
      'New Address' => '新規アドレス',
    
      'New Blog' => '新規ブログ',
    
      'New Blueprint' => '新規ブループリント',
    
      'New Branch' => '新規ブランチ',
    
      'New Build Plan' => '新規ビルドプラン',
    
      'New Calendar Item' => '新規カレンダーアイテム',
    
      'New Condition' => '新規条件',
    
      'New Credential' => '新規クレデンシャル',
    
      'New Diff' => '新規Diff',
    
      'New Document' => '新規ドキュメント',
    
      'New Empty Board' => '新しい空のボード',
    
      'New Inline Comment' => '新規インラインコメント',
    
      'New Message' => '新規メッセージ',
    
      'New Package' => '新規パッケージ',
    
      'New Panel' => '新規パネル',
    
      'New Password' => '新規パスワード',
    
      'New Post' => '新規ポスト',
    
      'New Product' => '新規製品',
    
      'New Provider' => '新規プロバイダ',
    
      'New Pull Request' => '新規 Pull Request',
    
      'New Repository' => '新規レポジトリ	',
    
      'New Rule' => '新規ルール',
    
      'New Rule for' => '新規ルール for',
    
      'New Simple Dashboard' => '新規シンプルダッシュボード',
    
      'New Step: %s' => '新規ステップ: %s',
    
      'New Task' => '新規タスク',
    
      'New URI' => '新規 URI',
    
      'New User "%s" Awaiting Approval' => '新しいユーザ "%s" が承認を待っています',
    
      'New Username' => '新規ユーザ名',
    
      'New VCS Password' => '新規 VCS パスワード',
    
      'New Value' => '新規の値',
    
      'New Workboard' => '新規ワークボード',
    
      'New password and confirmation do not match.' => '新しいパスワードと, 確認のためのパスワードが一致しません.',
    
      'New task created.' => '新しいタスクが作成されました.',
    
      'New username is required.' => '新しいユーザ名が必須です.',
    
      'New username must be different from old username.' => '新しいユーザ名は, 古いユーザ名と異なっていなければなりません.',
    
      'No Account Linked' => 'アカウントはリンクされていません',
    
      'No Auth Providers' => '認証プロバイダがありません',
    
      'No Authentication Providers Configured' => 'ログイン認証のための追加プロバイダが一つもありません',
    
      'No Base URI' => 'ベース URI はありません',
    
      'No Branches' => 'ブランチはありません',
    
      'No Chartable Facts' => 'チャートにできるファクトがありません',
    
      'No Commits' => 'コミットはありません',
    
      'No Description Given' => '説明は与えられていません',
    
      'No Dot Character in Domain' => 'ドメインにドットがありません',
    
      'No Edits' => '編集記録がありません',
    
      'No Enabled Providers' => '有効なプロバイダはありません',
    
      'No Encoding Support' => 'エンコードサポートがありません',
    
      'No Events Scheduled.' => 'イベントの予定はありません.',
    
      'No Limit' => '制限なし',
    
      'No Match' => 'マッチがありません',
    
      'No Matching Sessions' => 'マッチするセッションがありません',
    
      'No Matching Tokens' => 'マッチするトークンがありません',
    
      'No OAuth Access Token' => 'OAuth アクセストークンはありません',
    
      'No One' => '誰もいない',
    
      'No Projects' => 'プロジェクトはありません',
    
      'No Providers' => 'プロバイダはありません',
    
      'No Providers Configured:' => 'プロバイダが未設定:',
    
      'No SES From Address Configured' => 'SES From アドレスが設定されていません',
    
      'No Schema Issues' => 'スキーマに問題はありません',
    
      'No Sendmail Binary Found' => 'Sendmail バイナリファイルが見つかりません',
    
      'No Storage Directory' => 'ストレージディレクトリがありません',
    
      'No Subject' => '無題',
    
      'No Such Account' => 'そのようなアカウントはありません',
    
      'No Such Branch' => 'そのようなブランチはありません',
    
      'No Such Object' => 'そのようなオブジェクトはありません',
    
      'No Such Task' => 'そのようなタスクはありません',
    
      'No Tags' => 'タグはありません',
    
      'No Unit Test Coverage' => 'Unit テストカバレージがありません',
    
      'No Valid Phortune Merchant Accounts' => '有効な Phortune 商人アカウントがありません',
    
      'No Working Copy Yet' => 'ローカルコピー未作成',
    
      'No attachments.' => 'アタッチメントはありません',
    
      'No conpherences.' => 'Conpherences はありません.',
    
      'No content here!' => '項目はありません!',
    
      'No cursors.' => 'カーソルがありません.',
    
      'No daemon(s) with id(s) "%s" exist!' => 'ID が "%s" のデーモンプロセスが存在しません!',
    
      'No daemons to kill.' => 'Kill 対象となるデーモンはありません.',
    
      'No data available.' => 'データがありません.',
    
      'No data.' => 'データがありません.',
    
      'No description provided.' => '説明が与えられていません.',
    
      'No files.' => 'ファイルはありません.',
    
      'No matching audits.' => 'マッチする監査はありません.',
    
      'No messages for this build target.' => 'このビルドターゲットに対してメッセージはありません.',
    
      'No messages.' => 'メッセージはありません.',
    
      'No notifications.' => '通知はありません.',
    
      'No results found for this query.' => 'このクエリに対する結果はありません.',
    
      'None' => 'なし',
    
      'None of these policy rules have any effect.' => '以下のポリシーのルールには、実行内容が欠けています.',
    
      'Normal' => '普通',
    
      'Normally, Phabricator publishes notifications when it discovers new commits. You can disable publishing for this repository by turning off **Notify/Publish**. This will disable notifications, feed, and Herald (including audits and build plans) for this repository.\n\nWhen Phabricator discovers a new commit, it can automatically close associated revisions and tasks. If you don\'t want Phabricator to close objects when it discovers new commits in this repository, you can disable **Autoclose**.' => '%24lang-%3E%27Normally%2C+Phabricator+publishes+notifications+when+it+discovers+new+commits.+You+can+disable+publishing+for+this+repository+by+turning+off+%2A%2ANotify%2FPublish%2A%2A.+This+will+disable+notifications%2C+feed%2C+and+Herald+%28including+audits+and+build+plans%29+for+this+repository.%5Cn%5CnWhen+Phabricator+discovers+a+new+commit%2C+it+can+automatically+close+associated+revisions+and+tasks.+If+you+don%5C%27t+want+Phabricator+to+close+objects+when+it+discovers+new+commits+in+this+repository%2C+you+can+disable+%2A%2AAutoclose%2A%2A.%27
Normally, Phabricator publishes notifications when it discovers new commits. You can disable publishing for this repository by turning off **Notify/Publish**. この設定は, このレポジトリでの 通知, フィード, ヘラルド (監査とビルドプランを含む) が無効化されます.\n\nこれにより Phabricator が新しいコミットを発見したとき, それに紐付いているリビジョンやタスクが自動的にクローズされえます. If you don\'t want Phabricator to close objects when it discovers new commits in this repository, you can disable **Autoclose**.',
    
      'Not Activated' => 'アクティブではありません',
    
      'Not Allowed' => '許可されていません',
    
      'Not Applicable' => '適用可能ではありません',
    
      'Not Approved' => '承認されていません',
    
      'Not Completed' => '完了していません',
    
      'Not Configured' => '設定されていません',
    
      'Not Editable' => '編集可能ではありません',
    
      'Not In Projects' => 'プロジェクトにありません',
    
      'Not Installed' => 'インストールされていません',
    
      'Not Leased' => 'リースされていません',
    
      'Not Linked' => 'リンクされていません',
    
      'Not On A Blog' => 'ブログにありません',
    
      'Not Signed' => '署名されていません',
    
      'Not Submitted Yet' => 'まだ提出されていません',
    
      'Not Supported' => 'サポートされていません',
    
      'Not Tracking Time' => '時間追跡はしていません',
    
      'Not Unique' => 'ユニークではありません',
    
      'Not Visible' => '可視ではありません',
    
      'Not Working Now' => '動いていません',
    
      'Not a Hosted Repository' => 'ホストされているレポジトリではありません',
    
      'Note' => 'ノート',
    
      'Notes' => 'ノート',
    
      'Notification' => '通知',
    
      'Notification Server Down' => '通知サーバ がダウン',
    
      'Notification Server Out of Date' => '通知サーバ が古い',
    
      'Notification Server Status' => '通知サーバ ステータス',
    
      'Notification Server Version' => '通知サーバ バージョン',
    
      'Notification Server not enabled.' => '通知サーバがありません.',
    
      'Notifications' => '通知',
    
      'Notifications Only' => '通知のみ',
    
      'Notifications only.' => '通知のみ.',
    
      'Nov' => '11月',
    
      'Numbered List' => '番号付きリスト',
    
      'OAuth Application' => 'OAuth アプリケーション',
    
      'OAuth Application Authorizations' => 'OAuth アプリケーションの認証',
    
      'OAuth Application: %s' => 'OAuth アプリケーション: %s',
    
      'OAuth Authorization' => 'OAuth 認証',
    
      'OAuth Authorizations' => 'OAuth 認証',
    
      'OAuth Clients' => 'OAuth クライアント',
    
      'OAuth Login Provider' => 'OAuth ログインプロバイダ',
    
      'OAuth Not Available' => 'OAuth は利用可能ではありません',
    
      'OAuth Server' => 'OAuth サーバ',
    
      'Object' => 'オブジェクト',
    
      'Oct' => '10月',
    
      'Off' => 'オフ',
    
      'Oink' => 'ブヒ',
    
      'Oink Oink' => 'ブヒ ブヒ',
    
      'Okay' => 'いいかも',
    
      'Old' => '旧',
    
      'Old (%s day(s))' => '経過 (%s 日)',
    
      'Old Password' => '古いパスワード',
    
      'Old Username' => '古いユーザネーム',
    
      'Old Value' => '古い値',
    
      'On' => 'オン',
    
      'One full-width column' => '1列, 横幅は画面長',
    
      'One-Time Login Token' => '１回のみ有効のログイントークン',
    
      'Only I can see the responses' => '私だけが結果を見ることができます',
    
      'Only you can edit your information.' => '自分の情報は, 自分だけが変更することができます.',
    
      'Only you can see the results.' => 'あなただけが結果を見ることができます.',
    
      'Open Audits' => 'Open な監査',
    
      'Open Branches' => 'Open なブランチ',
    
      'Open Documents' => 'Open なドキュメント',
    
      'Open Initiatives' => 'Open なイニシアチブ',
    
      'Open Mocks' => 'Open なモック',
    
      'Open Phabricator Setup Issues' => '未解決の Phabricator セットアップ課題',
    
      'Open Polls' => '投票を開く',
    
      'Open Questions' => '質問を開く',
    
      'Open Requests' => 'リクエストを開く',
    
      'Open Tasks' => 'Open なタスク',
    
      'Open Tasks by Project and Priority (%s)' => 'Open なタスク (プロジェクト/優先度) (%s)',
    
      'Open Tasks by User and Priority (%s)' => 'Open なタスク (ユーザ/優先度) (%s)',
    
      'Options for Phabricator developers, including debugging.' => 'デバッグ等を含む, Phabricator 開発者のためのオプション項目.',
    
      'Options for configuring Releeph, the release branch tool.' => 'リリースブランチのためのツールである, Releeph を設定するためのオプション項目.',
    
      'Options related to Phriction (wiki).' => 'Phriction (Wiki) 周りのオプション項目.',
    
      'Options relating to PHD (daemons).' => 'PHD (デーモンプロセス) 周りのオプション項目.',
    
      'Options relating to Search.' => '検索周りのオプション項目.',
    
      'Options relating to authentication.' => '認証周りのオプション項目.',
    
      'Options relating to object visibility.' => 'オブジェクトの可視範囲についてのオプション項目.',
    
      'Options relating to syntax highlighting source code.' => 'ソースコードのシンタックスハイライトについてのオプション項目.',
    
      'Options relating to translations.' => '翻訳周りのオプション項目.',
    
      'Oragami' => 'オラガミ',
    
      'Orange' => '橙色',
    
      'Orange Medal' => 'オレンジメダル',
    
      'Order' => '並び',
    
      'Order By' => '～で並べる',
    
      'Order Detail' => 'オーダーの詳細',
    
      'Order History' => 'オーダー履歴',
    
      'Order Name' => 'オーダー名',
    
      'Order Not in Review' => 'レビューされていないオーダー',
    
      'Orders' => 'オーダー',
    
      'Overrides default fonts in tools like Differential.' => 'Differential 等の様なツールで使用されるデフォルトフォントを上書きします.',
    
      'Own Source Code' => 'ソースコードの所有',
    
      'Owned' => '所有中',
    
      'Owned Initiatives' => '所有されたイニシアチブ',
    
      'Owned Packages' => '所有パッケージ',
    
      'Owner' => '所有者',
    
      'Owner: %s' => '所有者: %s',
    
      'Owners' => '所有者',
    
      'Owners Package' => '所有者の Package',
    
      'PHP Documentation' => 'PHP ドキュメント',
    
      'PHP Extension \'APC\' Not Enabled' => 'PHP の \'APC\' 拡張が有効化されていません',
    
      'PHP Extension \'APC\' Not Installed' => 'PHP に \'APC\' 拡張がインストールされていません',
    
      'PHP Profiling Tool' => 'PHP プロファイリングツール',
    
      'PHP Timezone' => 'PHP タイムゾーン',
    
      'PHP Timezone Invalid' => 'PHP タイムゾーンが無効',
    
      'PHP also loaded these configuration file(s):' => 'PHP はこの設定ファイルも読み込んでいます:',
    
      'PHP bugs' => 'PHP バグ',
    
      'PREVIEW' => 'プレビュー',
    
      'PROPERTIES' => 'プロパティ',
    
      'PUBLISHING DOCUMENTATION' => 'ドキュメントの出版',
    
      'Package' => 'パッケージ',
    
      'Package %s' => 'パッケージ %s',
    
      'Package Details for "%s"' => 'パッケージ "%s" の詳細',
    
      'Package Index' => 'パッケージ目次',
    
      'Package must have a primary owner.' => 'パッケージには代表となる所有者が必要です.',
    
      'Package must include at least one path.' => 'パッケージにはパスが少なくとも1つ必要です.',
    
      'Package name is required.' => 'パッケージ名は必須項目です.',
    
      'Package name must be unique.' => 'パッケージ名は他のパッケージ名と衝突してはなりません.',
    
      'Packages' => 'パッケージ',
    
      'Page 1' => '1 ページ目',
    
      'Page 2' => '2 ページ目',
    
      'Page 3' => '3 ページ目',
    
      'Page 4' => '4 ページ目',
    
      'Page Not Found' => 'ページが見つかりません',
    
      'Page Size' => 'ページサイズ',
    
      'Page Titles' => 'ページタイトル',
    
      'Panel' => 'パネル',
    
      'Panel Type' => 'パネルタイプ',
    
      'Panel name is required.' => 'パネル名が必須です.',
    
      'Panels' => 'パネル',
    
      'Parameter "%s" is named "%s" in the documentation. The documentation may be out of date.' => '%24lang-%3E%27Parameter+%22%25s%22+is+named+%22%25s%22+in+the+documentation.+The+documentation+may+be+out+of+date.%27
Parameter "%s" is named "%s" in the documentation. ドキュメントは古く、旧版かと思われます.',
    
      'Parameters' => 'パラメータ',
    
      'Parent Path' => '親のパス',
    
      'Parent Task' => '親のタスク',
    
      'Parents' => '親',
    
      'Parse commit messages for Differential fields.' => 'Differential フィールド用にコミットメッセージを解析.',
    
      'Partially Audited' => '一部監査済',
    
      'Participants' => '参加者',
    
      'Passed' => '合格',
    
      'Passphrase' => 'パスフレーズ',
    
      'Passphrase Credentials' => 'パスフレーズ クレデンシャル',
    
      'Password' => 'パスワード',
    
      'Password Hash Algorithms' => 'パスワードハッシュ アルゴリズム',
    
      'Password Reset Token' => 'パスワードリセット用トークン',
    
      'Password Updated' => 'パスワード更新',
    
      'Password and confirmation do not match.' => 'パスワードと確認パスワードが一致しません.',
    
      'Password and confirmation must match.' => 'パスワードと確認パスワードは一致しなければなりません.',
    
      'Password for SMTP.' => 'SMTP のためのパスワード.',
    
      'Password is pathologically weak. This password is one of the most common passwords in use, and is extremely easy for attackers to guess. You must choose a stronger password.' => 'パスワードが病的な弱さです. このパスワードは良く使用されるパスワードの1つであり, 攻撃者にとって推測が非常に容易です. 強いパスワード.',
    
      'Password is required.' => 'パスワードは必須項目です.',
    
      'Password is too short (must be at least %d characters long).' => 'パスワードが短すぎます (少なくとも %d 文字必要です).',
    
      'Paste' => 'ペースト',
    
      'Pastes' => 'ペースト',
    
      'Path' => 'パス',
    
      'Path "%s" is not known to Phabricator.' => 'パス "%s" は Phabricator によって認識されません.',
    
      'Path Does Not Exist' => 'パスは存在しません',
    
      'Paths' => 'パス',
    
      'Permanently Delete User' => 'ユーザの永久的な削除',
    
      'Permanently Linked' => '永続的にリンク済',
    
      'Personal Account' => '個人アカウント',
    
      'Personal Bookmarks' => '個人毎に使えるしおり',
    
      'Personal Home Page Dashboard' => '個人ホームページのダッシュボード',
    
      'Personal Rule' => '個人ルール',
    
      'Phabricator Account "%s" Approved' => 'Phabricator アカウント "%s" は認可されました',
    
      'Phabricator Configuration' => 'Phabricator 設定一覧',
    
      'Phabricator Daemons Are Not Running' => 'Phabricator デーモンプロセスが走っていません',
    
      'Phabricator Form' => 'Phabricator フォーム',
    
      'Phabricator Mail' => 'Phabricator メール',
    
      'Phabricator Registration' => 'Phabricator 登録',
    
      'Phabricator Username' => 'Phabricator ユーザ名',
    
      'Phabricator will not retain a copy of the private key.' => 'Phabricator が秘密鍵を保持することはありません.',
    
      'Phame Title' => 'Phame タイトル',
    
      'Pholio Mock' => 'Pholio モック',
    
      'Pholio Mocks' => 'Pholio モック',
    
      'Piece of Eight' => '８レアル銀貨',
    
      'Pin Application' => 'アプリケーションをピン止め',
    
      'Pink' => 'ピンク',
    
      'Pinned Applications' => 'アプリケーションのピン止め一覧',
    
      'Plaintext' => '生テキスト',
    
      'Plan name is required.' => 'プラン名は必須項目です.',
    
      'Play Continuously' => '連続再生',
    
      'Play Once' => '一度きりの再生',
    
      'Plurality (Single Choice)' => '得票差 (単一選択式)',
    
      'Point Limit' => 'ポイント制限',
    
      'Policies' => 'ポリシー',
    
      'Policy' => 'ポリシー',
    
      'Policy Details: %s' => 'ポリシーの詳細: %s',
    
      'Policy Error' => 'ポリシーエラー',
    
      'Press %s to show keyboard shortcuts.' => '%s キーを押下でショートカットを表示.',
    
      'Press \'/\' to focus the search input.' => '\'/\' キー押下で検索語入力を開始',
    
      'Prevent Conduit Access' => 'Conduit のアクセスを不許可',
    
      'Prevent Conduit access?' => 'Conduit 経由のアクセスを不許可としますか?',
    
      'Prevent Dangerous Changes' => '危険な変更を防ぐ',
    
      'Prevent Dangerous changes?' => '危険な変更を防ぎますか?',
    
      'Prevent editing' => '編集を防ぐ',
    
      'Prevent members from leaving this project.' => 'このプロジェクトからメンがーが離れるのを阻止.',
    
      'Prevent the secret from being revealed or changed.' => '秘密の情報が表示 / 変更されることから守ります.',
    
      'Preview' => 'プレビュー',
    
      'Preview / Publish' => 'プレビュー / 出版',
    
      'Preview Post' => 'ポストのプレビュー',
    
      'Primary' => 'メイン',
    
      'Primary Hashtag' => 'メインのハッシュタグ',
    
      'Primary Owner' => 'メインの所有者',
    
      'Priority' => '優先度',
    
      'Priority Type' => '優先度タイプ',
    
      'Private Key' => '秘密鍵',
    
      'Problem Commits' => '問題のあるコミット',
    
      'Problems' => '問題',
    
      'Progress on this build will be discarded and the build will restart. Side effects of the build will occur again. Really restart build?' => '%24lang-%3E%27Progress+on+this+build+will+be+discarded+and+the+build+will+restart.+Side+effects+of+the+build+will+occur+again.+Really+restart+build%3F%27
Progress on this build will be discarded and the build will restart. Side effects of the build will occur again. 本当にビルドを再実行しますか?',
    
      'Project' => 'プロジェクト',
    
      'Project Column' => 'プロジェクトカラム',
    
      'Project Info' => 'プロジェクト情報',
    
      'Project Reviewers' => 'プロジェクトレビュアー',
    
      'Project hashtag %s is already the primary hashtag.' => 'プロジェクトのハッシュタグ %s は既にメインのハッシュタグとして指定されています.',
    
      'Project name can not be used due to hashtag collision.' => 'ハッシュタグの衝突により, そのプロジェクト名を使用することができません.',
    
      'Project name is already used.' => 'プロジェクト名が既に使われています.',
    
      'Project name is required.' => 'プロジェクト名は必須項目です.',
    
      'Project: %s' => 'プロジェクト: %s',
    
      'Projects' => 'プロジェクト',
    
      'Pronoun' => '人称表現',
    
      'Properties' => 'プロパティ',
    
      'Properties Changed' => '変更のあったプロパティ',
    
      'Property' => 'プロパティ',
    
      'Protocol for URI "%s" MUST be "svn+ssh".' => 'URI "%s" に対してのプロトコルは, "svn+ssh" でなくてはなりません.',
    
      'Prototype' => 'プロトタイプ',
    
      'Prototypes' => 'プロトタイプ',
    
      'Prototypes Not Enabled' => 'プロトタイプは有効化されていません',
    
      'Provenance' => '出所',
    
      'Provider' => 'プロバイダ',
    
      'Provider Already Configured' => 'プロバイダは既に設定済',
    
      'Provider Implementation Missing!' => 'プロバイダの実装が足りていません!',
    
      'Provider Type' => 'プロバイダタイプ',
    
      'Pterodactyl' => 'プテロダクティルス',
    
      'Public Feed' => '公開 Feed',
    
      'Public Key' => '公開鍵',
    
      'Public Key (%s)' => '公開鍵 (%s)',
    
      'Publish Post' => 'ポストを出版',
    
      'Publish/Notify' => '出版 / 通知',
    
      'Published' => '出版',
    
      'Published on %s by %s' => '%s に %s が出版した',
    
      'Publishes File' => 'ファイルを出版',
    
      'Pull Daemon Not Running' => 'Pull デーモンプロセス無',
    
      'Pull Daemon Running' => 'Pull デーモンプロセス有',
    
      'Pull Requests' => 'Pull リクエスト',
    
      'Purple' => '紫',
    
      'Push Log' => 'Push ログ',
    
      'Push Log %d' => 'Push ログ %d',
    
      'Push Log (Content)' => 'Push ログ (Content)',
    
      'Push Log (Ref)' => 'Push ログ (Ref)',
    
      'Push Logs' => 'Push ログ',
    
      'Pushable By' => 'Push できる範囲',
    
      'Pushed At' => 'Push 先',
    
      'Pushed By' => 'Push した人',
    
      'Pushed Commits' => 'Push されたコミット',
    
      'Pushed Via' => 'Push 経路',
    
      'Pusher' => 'Push 人',
    
      'Pusher same as committer' => 'Push 人は、コミット人と同じ',
    
      'Pusher\'s projects' => 'Push 人のプロジェクト',
    
      'Pushers' => 'Push 人',
    
      'Pushing "%s" to mirrors...' => '"%s" をミラーに Push しています...',
    
      'Pushing to remote "%s"...' => 'リモートの "%s" に Push しています...',
    
      'Queries' => 'クエリ',
    
      'Query' => 'クエリ',
    
      'Query: %s' => 'クエリ: %s',
    
      'Question' => '質問',
    
      'Question File Integrity' => 'ファイルの整合性に疑問を呈す',
    
      'Question History' => '質問履歴',
    
      'Question Preview' => '質問のプレビュー',
    
      'Questions and Answers' => '質問と回答',
    
      'Queued Tasks' => 'キューに入ったタスク',
    
      'Quick Start Guides' => 'クイックスタートガイド',
    
      'Quick Start: Bugs and Tasks' => 'クイックスタート: バグとタスク',
    
      'Quick Start: Code Review' => 'クイックスタート: コードレビュー',
    
      'Quick Start: Design Review' => 'クイックスタート: デザインレビュー',
    
      'Quick Start: Repositories' => 'クイックスタート: レポジトリ',
    
      'Real Name' => '実名',
    
      'Real name is required.' => '実名は必須項目です.',
    
      'Really Close Branch?' => '本当にブランチを閉じますか?',
    
      'Really Deactivate Product?' => '本当に製品を非アクティブにしますか?',
    
      'Really Delete Query?' => '本当にクエリを削除しますか?',
    
      'Really Delete Step?' => '本当にステップを削除しますか?',
    
      'Really Remove Member?' => '本当にメンバを削除しますか?',
    
      'Really Reopen Branch?' => '本当にブランチをサイド開きますか?',
    
      'Really archive project?' => '本当にプロジェクトをアーカイブしますか?',
    
      'Really cancel task?' => '本当にタスクをキャンセルしますか?',
    
      'Really cancel this order? Any payment will be refunded.' => '本当にこのオーダーをキャンセルしますか?支払いはリファンドされます.',
    
      'Really close resource?' => '本当にリソースを閉じますか?',
    
      'Really close the branch "%s"?' => '本当にブランチ "%s" を閉じますか?',
    
      'Really close this initiative? Users will no longer be able to back it.' => '本当にイニシアチブを閉じますか?ユーザが支援することができなくます.',
    
      'Really deactivate the product %s?' => '本当に製品 %s を非アクティブ化しますか?',
    
      'Really delete SSH Public Key?' => '本当に SSH 公開鍵を削除しますか?',
    
      'Really delete address \'%s\'?' => '本当にアドレス \'%s\' を削除しますか?',
    
      'Really delete mirror?' => '本当にミラーを削除しますか?',
    
      'Really delete status?' => '本当にステータスを削除しますか?',
    
      'Really delete the OAuth application %s?' => '本当に OAuth アプリケーション %s を削除しますか?',
    
      'Really delete the blog "%s"? It will be gone forever.' => '本当にブログ "%s" を削除しますか?永遠に消去されます.',
    
      'Really delete the post "%s"? It will be gone forever.' => '本当にポスト "%s" を削除しますか?永遠に消去されます.',
    
      'Really delete this comment?' => '本当にこのコメントを削除しますか?',
    
      'Really delete this countdown?' => '本当にこのカウントダウンを削除しますか?',
    
      'Really delete this snapshot?' => '本当にこのスナップショットを削除しますか?',
    
      'Really destroy credential?' => '本当にクレデンシャルを破壊しますか?',
    
      'Really disable macro?' => '本当にマクロを無効にしますか?',
    
      'Really disable the much-beloved image macro %s? It will be sorely missed.' => '%24lang-%3E%27Really+disable+the+much-beloved+image+macro+%25s%3F+It+will+be+sorely+missed.%27
Really disable the much-beloved image macro %s?この喪失は後々に惜しまれることでしょう.',
    
      'Really leave project?' => '本当にプロジェクトを離れますか?',
    
      'Really lock credential?' => '本当にクレデンシャルをロックしますか?',
    
      'Really pause build?' => '本当にビルドを一時停止しますか?',
    
      'Really refund this order?' => '本当にこのオーダーをリファンドしますか?',
    
      'Really regenerate session?' => '本当にセッションを再生成しますか?',
    
      'Really release lease?' => '本当にリースをリリースしますか?',
    
      'Really remove %s from the project %s?' => '本当に %s をプロジェクト %s から削除しますか?',
    
      'Really remove this comment?' => '本当にこのコメントを削除しますか?',
    
      'Really rescind this lovely token?' => 'この素敵なトークンを取り消すというのですか?',
    
      'Really restart build?' => '本当にビルドを再実行しますか?',
    
      'Really show secret?' => '本当に秘密情報を表示しますか?',
    
      'Reassign / Claim' => '再アサイン / アサイン要求',
    
      'Reassigned' => '再アサイン済',
    
      'Recent Activity' => '最近の活動',
    
      'Recent Commits' => '最近のコミット',
    
      'Recent Commits in Package' => 'パッケージ内の最近のコミット',
    
      'Recent Tasks' => '最近のタスク',
    
      'Recently Closed' => '最近の Close',
    
      'Recently Completed Tasks (Last 15m)' => '最近完了したタスク ( 15分以内 )',
    
      'Recently Means' => '最近の範囲',
    
      'Red' => '赤色',
    
      'Ref "%s" is ambiguous or does not exist.' => 'Ref "%s" は曖昧もしくは存在しません.',
    
      'Regenerate' => '再生成',
    
      'Regenerate Certificate' => '証明書を再生成',
    
      'Register' => '登録',
    
      'Register New Account' => '新しいアカウントの登録',
    
      'Register Phabricator Account' => 'Phabricator アカウントの登録',
    
      'Related Commits' => '関連コミット',
    
      'Release' => 'リリース',
    
      'Release Lease' => 'Lease をリリース',
    
      'Releasing a lease may cause trouble for the lease holder and trigger cleanup of the underlying resource. It can not be undone. Continue?' => '%24lang-%3E%27Releasing+a+lease+may+cause+trouble+for+the+lease+holder+and+trigger+cleanup+of+the+underlying+resource.+It+can+not+be+undone.+Continue%3F%27
Releasing a lease may cause trouble for the lease holder and trigger cleanup of the underlying resource. 元に戻すことはできません. 続けますか?',
    
      'Remove' => '削除',
    
      'Remove %s Flag' => '%s フラグをたたむ',
    
      'Remove Administrator' => '管理者権限を外す',
    
      'Remove Comment' => 'コメントを削除',
    
      'Remove Factor' => 'ファクターを削除',
    
      'Remove PHP %s' => 'PHP %s を削除',
    
      'Remove Panel' => 'パネルを削除',
    
      'Remove Panel %s' => 'パネル %s を削除',
    
      'Remove Participants' => '参加者を削除',
    
      'Remove Password' => 'パスワードを削除',
    
      'Remove Project Member' => 'プロジェクトメンバを削除',
    
      'Remove VCS Password' => 'VCS パスワードを削除',
    
      'Remove as Administrator?' => '管理者権限を外しますか?',
    
      'Remove emails from CC' => 'CC からの Email を削除',
    
      'Remove me from CC' => 'CC から自分を削除',
    
      'Rename User' => 'ユーザ名を変更',
    
      'Renamed' => '名前変更されました',
    
      'Reopen' => '再度オープン',
    
      'Reorder Columns' => 'カラム順序の変更',
    
      'Reports' => 'レポート',
    
      'Repositories' => 'レポジトリ',
    
      'Repository' => 'レポジトリ',
    
      'Repository Active' => 'レポジトリはアクティブ',
    
      'Require a vote to see the responses' => '投票すると結果を見ることができます',
    
      'Required' => '必須',
    
      'Required Input' => '必須項目',
    
      'Rescind Token' => 'トークンを取り消す',
    
      'Reset Password' => 'パスワードのリセット',
    
      'Resolve Setup Issues' => 'セットアップ上の課題を解決',
    
      'Resolve issues and build consensus through protracted deliberation.' => '長い長い審議を重ねた後の、総意の決定と問題解決を待ちましょう.',
    
      'Resolved' => '解決',
    
      'Response %d' => '回答 %d',
    
      'Responses' => '回答結果',
    
      'Responsible Users' => '担当ユーザ',
    
      'Restore Macro' => 'マクロを復活させる',
    
      'Review' => 'レビュー',
    
      'Review Code' => 'コードのレビュー',
    
      'Review Mocks and Design' => 'モックやデザインのレビュー',
    
      'Review Recent Activity' => '最近の活動をレビュー',
    
      'Reviewer' => 'レビュアー',
    
      'Reviewers' => 'レビュアー',
    
      'Reviewers: %s' => 'レビュアー: %s',
    
      'Revision' => 'リビジョン',
    
      'Revision Update History' => 'リビジョン更新履歴',
    
      'Revoke' => '無効化',
    
      'Revoke All' => 'すべて無効化',
    
      'Revoke Token' => 'トークンを無効化',
    
      'Revoke Token?' => 'トークンを無効化しますか?',
    
      'Revoke Tokens' => 'トークンを無効化',
    
      'Revoke Tokens?' => 'トークンを無効化しますか?',
    
      'Risks/Challenges' => 'リスク / チャレンジ',
    
      'Roles' => '役割 (Role)',
    
      'Royal Crest' => '王家の紋章',
    
      'Royal Flush!' => 'ロイヤルフラッシュ!',
    
      'Rule %d' => 'ルール %d',
    
      'Rule Description' => 'ルールの説明',
    
      'Rule Details' => 'ルールの詳細',
    
      'Rule Edit History' => 'ルールの編集履歴',
    
      'Rule Name' => 'ルール名',
    
      'Rule Status' => 'ルールステータス',
    
      'Rule Type' => 'ルールタイプ',
    
      'Rule failed automatically because it has no conditions.' => '条件がないため、ルールは自動的に失敗となりました.',
    
      'Rule must have a name.' => 'ルールには名前が必要です.',
    
      'Rules' => 'ルール',
    
      'Rules I Own' => '所有するルール',
    
      'Rules that Affected Me' => '自分に影響のあるルール',
    
      'Run Build Plan Manually' => '手動でビルドプランを実行',
    
      'Run Command' => 'コマンドを実行',
    
      'Run Plan Manually' => '手動でプランを実行',
    
      'Run build plans' => 'ビルドプランを実行',
    
      'Running' => '実行中',
    
      'SSH Key' => 'SSH 鍵',
    
      'SSH Private Key' => 'SSH 秘密鍵',
    
      'SSH Private Key (Generated)' => 'SSH 秘密鍵 (生成済)',
    
      'SSH Private Key File' => 'SSH 秘密鍵ファイル',
    
      'SSH Public Keys' => 'SSH 公開鍵',
    
      'SSH keys are now actually useful, so they are always enabled.' => '有用性を考慮し, SSH 鍵は常に有効としています.',
    
      'SSH log format.' => 'SSH ログのフォーマット.',
    
      'SSH log location.' => 'SSH ログの場所.',
    
      'Sat' => '土',
    
      'Save' => '保存',
    
      'Save Account Settings' => 'アカウント設定を保存',
    
      'Save Actions' => 'アクションを保存',
    
      'Save Application' => 'アプリケーションを保存',
    
      'Save Audio Behavior' => '音の再生方法を保存',
    
      'Save Blocking Tasks' => 'ブロックタスクを保存',
    
      'Save Blueprint' => 'ブループリントを保存',
    
      'Save Branch' => 'ブランチを保存',
    
      'Save Branches' => 'ブランチを保存',
    
      'Save Build Plan' => 'ビルドプランを保存',
    
      'Save Build Step' => 'ビルドステップを保存',
    
      'Save Changes' => '変更を保存',
    
      'Save Column' => 'カラムを保存',
    
      'Save Config Entry' => '設定エントリを保存',
    
      'Save Custom Query...' => 'カスタムクエリを保存...',
    
      'Save Draft' => '下書きを保存',
    
      'Save Encoding' => 'エンコードを保存',
    
      'Save Fragment Policies' => 'フラグメントポリシーを保存',
    
      'Save Image' => 'イメージを保存',
    
      'Save Image Macro' => 'イメージマクロを保存',
    
      'Save Package' => 'パッケージを保存',
    
      'Save Panel' => 'パネルを保存',
    
      'Save Paste' => 'ペーストを保存',
    
      'Save Policies' => 'ポリシーを保存',
    
      'Save Policy' => 'ポリシーを保存',
    
      'Save Preferences' => '設定を保存',
    
      'Save Profile' => 'プロフィールを保存',
    
      'Save Query' => 'クエリを保存',
    
      'Save Rule' => 'ルールを保存',
    
      'Save Subversion Info' => 'Subversion 情報を保存',
    
      'Save Task' => 'タスクを保存',
    
      'Save and Continue' => '保存して続行',
    
      'Saved %s bytes (%s).' => '%s バイトを保存 (%s).',
    
      'Saved Draft' => '下書きを保存',
    
      'Saved Queries' => 'クエリを保存',
    
      'Saved application.' => 'アプリケーションを保存.',
    
      'Saved object.' => 'オブジェクトを保存.',
    
      'Saving Draft...' => '下書きを保存中...',
    
      'Schedule Update' => '更新の予約をする',
    
      'Scheduling repository "%s" for an initial update.' => 'レポジトリ "%s" の初期更新の予約をしています.',
    
      'Scheduling repository "%s" for an update (%s seconds overdue).' => 'レポジトリ "%s" の更新の予約をしています. (%s 秒 遅れ).',
    
      'Schema Status' => 'スキーマ ステータス',
    
      'Scope' => 'スコープ',
    
      'Search' => '検索',
    
      'Search Error' => '検索エラー',
    
      'Search Preferences' => '検索設定',
    
      'Search Results' => '検索結果',
    
      'Search for Packages' => 'パッケージを検索',
    
      'Seconds' => '秒',
    
      'Security' => 'セキュリティ',
    
      'Security Checkpoint' => 'セキュリティ チェックポイント',
    
      'Security options.' => 'セキュリティのオプション項目.',
    
      'Select All' => 'すべて選択',
    
      'Select a panel to add.' => '追加するパネルを選択してください.',
    
      'Select access policies for this repository.' => 'このレポジトリのアクセスポリシーを選択してください.',
    
      'Select all branches which do not start with "temp-".' => '"temp-" で始まる全てのブランチを選択.',
    
      'Select master, and all branches which start with "release-".' => 'master と "release-" で始まる全てのブランチを選択.',
    
      'Select master, develop, and release.' => 'master, develop, release を選択.',
    
      'Select only master.' => 'master のみを選択.',
    
      'Selected' => '選択済',
    
      'Selected File' => '選択済ファイル',
    
      'Self Actions' => 'セルフアクション',
    
      'Send "Welcome to Phabricator" email with login instructions.' => '"ようこそ Phabricator へ" メッセージを, ログイン手引書と一緒にEmail 送信',
    
      'Send Another Email' => 'もう一通 Email 送信',
    
      'Send Another Verification Email?' => 'もう一度確認メールを送りましょうか?',
    
      'Send Email' => 'Email 送信',
    
      'Send HTML Email' => 'HTML で Email 送信',
    
      'Send Mail To All Recipients' => 'メールを全ての受信者に送る',
    
      'Send Mail To Each Recipient' => 'メールを各受信者に送る',
    
      'Send Message' => 'メッセージ送信',
    
      'Send Messages' => 'メッセージ送信',
    
      'Send Plain Text Email' => 'プレーンテキストで Email 送信',
    
      'Send Welcome Email' => 'ようこそメールを送信',
    
      'Send a Message' => 'メッセージを送信',
    
      'Send another copy of the verification email to %s?' => 'Email アドレス検証用のメールをもう一通, %s に送信し	ますか?',
    
      'Sep' => '9月',
    
      'Serious business title.' => 'まじめな役職 / 称号.',
    
      'Serve over HTTP' => 'HTTP 経由のサービス',
    
      'Serve over SSH' => 'SSH 経由のサービス',
    
      'Server Error' => 'サーバエラー',
    
      'Server Timezone Not Configured' => 'サーバのタイムゾーンが設定されていません',
    
      'Service Directory' => 'サービスディレクトリ',
    
      'Session' => 'セッション',
    
      'Sessions' => 'セッション',
    
      'Sessions and Logs' => 'セッションとログ',
    
      'Settings' => '設定',
    
      'Setup' => 'セットアップ',
    
      'Setup Admin Account' => '管理者アカウントのセットアップ',
    
      'Setup Issues' => 'セットアップ課題',
    
      'Setup MySQL Schema' => 'MySQL スキーマのセットアップ',
    
      'Setup and Configuration' => 'セットアップと設定',
    
      'Severe Security Vulnerability: Unpatched Bash' => '深刻なセキュリティ上の脆弱性: パッチの当てられていない Bash',
    
      'Share Text Snippets' => 'テキストの断片を共有',
    
      'Short UPPERCASE identifier.' => '大文字の短いIDで指定してください.',
    
      'Short blurb about the user.' => 'ユーザについての短い自賛広告.',
    
      'Short project description.' => 'プロジェクトの短い説明.',
    
      'Should Conpherence send emails for updates or notifications only? This global setting can be overridden on a per-thread basis within Conpherence.' => '%24lang-%3E%27Should+Conpherence+send+emails+for+updates+or+notifications+only%3F+This+global+setting+can+be+overridden+on+a+per-thread+basis+within+Conpherence.%27
Should Conpherence send emails for updates or notifications only?これはグローバル設定です. Conpherence のスレッド設定が優先されますｓ.',
    
      'Should the feed be public?' => 'フィードを広く公開しますか?',
    
      'Show Active Documents' => 'アクティブなドキュメントのみ表示',
    
      'Show All Applications' => 'すべてのアプリケーションを表示',
    
      'Show All Branches' => '全てのブランチを表示',
    
      'Show All Changes' => '全ての変更を表示',
    
      'Show All Context' => '全てのコンテクストを表示',
    
      'Show All Credentials' => '全てのクレデンシャルを表示',
    
      'Show All Documents' => '全てのドキュメントを表示',
    
      'Show All Files Inline' => 'インラインにてすべてのファイルを表示',
    
      'Show All Projects' => '全てのプロジェクトを表示',
    
      'Show All Tags' => '全てのタグを表示',
    
      'Show Branches' => '全てのブランチを表示',
    
      'Show Change' => '変更を表示',
    
      'Show Column' => 'カラムを表示',
    
      'Show Copies/Branches' => 'コピー / ブランチ を表示',
    
      'Show Diff' => 'Diff を表示',
    
      'Show Filetree' => 'ファイルツリー表示',
    
      'Show First 20 Lines' => '最初の20行を表示',
    
      'Show First-Party Applications' => 'ファーストパーティからのアプリケーションを表示',
    
      'Show Hidden Columns' => '隠れたカラムを表示',
    
      'Show Installed Applications' => 'インストールされたアプリケーションを表示',
    
      'Show Last 20 Lines' => '最後の20行を表示',
    
      'Show Launchable Applications' => 'ランチ可能なアプリケーションを表示',
    
      'Show Non-Launchable Applications' => 'ランチ不可能なアプリケーションを表示',
    
      'Show Older Messages' => '古いメッセージを表示',
    
      'Show Only Active Credentials' => 'アクティブなクレデンシャルのみを表示',
    
      'Show Only Active Projects' => 'アクティブなプロジェクトのみを表示',
    
      'Show Only Destroyed Credentials' => '破棄されたクレデンシャルのみ表示',
    
      'Show Only Disabled Rules' => '無効にされたルールのみ表示',
    
      'Show Only Enabled Rules' => '有効なルールのみを表示',
    
      'Show Products' => '製品の表示',
    
      'Show Search' => '検索を表示',
    
      'Show Secret' => '秘密情報を見る',
    
      'Show Third-Party Applications' => 'サードパーティからのアプリケーションを表示',
    
      'Show Uninstalled Applications' => '未インストールのアプリケーションを表示',
    
      'Show a log of permanently destroyed objects.' => '永久削除されたオブジェクトのログを表示.',
    
      'Show additional debugging information.' => '全ての追加でバッグ情報を表示.',
    
      'Show all changes.' => '全ての変更を表示.',
    
      'Show all logs.' => 'すべてのログを表示.',
    
      'Show all textareas using the monospaced font defined above.' => 'すべてのテキストエリアで上記設定の固定幅フォントを使用.',
    
      'Show choices in random order.' => '選択肢の並び順をランダムにする.',
    
      'Show only administrators.' => '管理者のみを表示.',
    
      'Show only bots.' => 'ボットのみを表示.',
    
      'Show only countdowns that are still counting down.' => 'カウントダウン中のカウントダウンのみを表示.',
    
      'Show only disabled users.' => '無効なユーザのみを表示.',
    
      'Show only documents I have signed.' => '自分の署名したドキュメントのみを表示.',
    
      'Show only local daemons.' => 'ローカルデーモンプロセスのみを表示.',
    
      'Show only manually uploaded files.' => 'ユーザによってアップロードされたファイルのみを表示.',
    
      'Show only polls I\'ve voted in.' => '自分の投票したもののみを表示.',
    
      'Show only revisions with a draft comment.' => '下書きコメントのあるリビジョンのみを表示.',
    
      'Show only tasks with no projects.' => 'プロジェクトに紐づけのないタスクのみを表示.',
    
      'Show only unassigned tasks.' => 'アサインされていないタスクのみを表示.',
    
      'Show only unowned documents.' => '所有者のないドキュメントのみを表示.',
    
      'Show only unread notifications.' => '未読の通知のみを表示.',
    
      'Show only upcoming events.' => '未開催のイベントのみを表示.',
    
      'Show only users who need approval.' => '承認を必要としているユーザのみを表示.',
    
      'Show status of fact data.' => 'ファクトデータの状態を表示.',
    
      'Show status of running daemons.' => '実行中のデーモンプロセスの状態を表示.',
    
      'Show the status of the notifications server.' => '通知サーバーの状態を表示.',
    
      'Show what would be compacted.' => '何か内包されるかを表示.',
    
      'Showing %d branches.' => '%d ブランチを表示しています.',
    
      'Showing results for query "%s".' => 'クエリ "%s" の検索結果を表示しています.',
    
      'Showing results for saved query "%s".' => '登録クエリ "%s" の検索結果を表示しています.',
    
      'Showing the %d most recent tags.' => '%d 件の最新タグを表示しています.',
    
      'Shows arcanist project name.' => 'Arcanist プロジェクト名を表示します.',
    
      'Shows associated commits.' => '関連づけられたコミットを表示します.',
    
      'Shows errors and warnings.' => 'エラーと警告を表示します.',
    
      'Shows lint results.' => 'Lint に通した結果を表示します.',
    
      'Shows revision representation in Asana.' => 'Asana 形式でリビジョンを表示します.',
    
      'Shows roles like "Administrator" and "Disabled".' => '"管理者" や "利用不可" のような割り当てを表示します.',
    
      'Shows the branch a diff came from.' => 'Diff が作られたブランチを表示します.',
    
      'Shows the local host where the diff came from.' => 'Diff が作られたホストを表示します.',
    
      'Shows the local path where the diff came from.' => 'Diff が作られたローカルのパスを表示します.',
    
      'Shows unit test results.' => 'ユニットテスト結果を表示します.',
    
      'Shows user join date.' => '参加日時を表示します.',
    
      'Shows when a user is away or busy.' => 'ユーザーが、離席中または多忙かを表示します.',
    
      'Shuffle' => 'シャッフル',
    
      'Shutting down.' => 'シャットダウン中.',
    
      'Side Navigation' => 'サイドナビゲーション',
    
      'Sign Document' => 'ドキュメントに署名',
    
      'Signature Already Verified' => '署名の有効性確認はされています',
    
      'Signature Details' => '署名の詳細',
    
      'Signature Type' => '署名の種類',
    
      'Signature Verified' => '署名は有効性確認済',
    
      'Signatures' => '署名',
    
      'Signed' => '署名されています',
    
      'Signed Documents' => '署名付きドキュメント',
    
      'Signers' => '署名人',
    
      'Simple Template' => 'シンプルなテンプレート',
    
      'Skin' => 'スキン',
    
      'Something Stays Your Hand' => 'ちょっと手を止めてもらえますか',
    
      'Something magical occurred.' => 'なにか魔法のようなことが起こりました.',
    
      'Sort by Priority' => '優先度で並べる',
    
      'Sort of a social utility.' => 'ソーシャルツールのようなもの.',
    
      'Sort: %s' => '並び順: %s',
    
      'Source' => 'ソース',
    
      'Specify a comma-separated list of additional hashtags.' => 'コンマ区切りで、追加のハッシュタグを指定してください.',
    
      'Spite' => 'ポイ捨て',
    
      'Spited' => 'ポイ捨て済',
    
      'Standalone View' => 'スタンドアローン ビュー',
    
      'Start' => '開始',
    
      'Start Import Now' => '今すぐインポートする',
    
      'Start Now' => '今すぐ始める',
    
      'Start TLS after binding to the LDAP server.' => 'LDAP サーバとのバインド後に Start TLS を使用する.',
    
      'Start Time' => '時間開始',
    
      'Start Timer' => 'タイマーを開始',
    
      'Start Tracking' => '追跡開始',
    
      'Start Tracking Time' => '時間追跡を開始',
    
      'Start must be before end.' => '開始 と 終了 の前後関係が不正です.',
    
      'Start the notifications server.' => '通知サーバを開始.',
    
      'Start tracking time on an object by pushing it on the tracking stack.' => 'オブジェクトの時間追跡を開始します (追跡スタックを利用).',
    
      'Start with a blank canvas.' => '真っ白なキャンバスから始めます.',
    
      'States' => '状態',
    
      'Status' => 'ステータス',
    
      'Status Details' => 'ステータス詳細',
    
      'Status Story' => 'ステータスのストーリー',
    
      'Status Tabs' => 'ステータスタブ',
    
      'Status Unknown' => 'ステータス不明',
    
      'Status can not be set!' => 'ステータスは設定できません!',
    
      'Status: %s' => 'ステータス: %s',
    
      'Statuses' => 'ステータス',
    
      'Stop Time' => '時間開始',
    
      'Stop Timer' => 'タイマーを停止',
    
      'Stop Tracking' => '追跡を停止',
    
      'Stop Tracking Time' => '時間追跡を停止',
    
      'Stop the notifications server.' => '通知サーバを停止.',
    
      'Stop tracking time on an object by popping it from the stack.' => '時間追跡を停止 (追跡トラックを利用).',
    
      'Storage' => '格納場所',
    
      'Storage Directory OK' => '格納ディレクトリ OK',
    
      'Store a plaintext password.' => 'パスワードのテキストを保持します.',
    
      'Store the plaintext of an SSH private key.' => 'SSH 秘密鍵のテキストを保持します.',
    
      'Story' => 'ストーリー',
    
      'Strength' => '強度',
    
      'Stronger algorithms are listed first. The highlighted algorithm will be used when storing new hashes. Older hashes will be upgraded to the best algorithm over time.' => '下のリストでは, 強度の高いアルゴリズムが上位に挙げられています. ハイライトされているアルゴリズムが, 新しいハッシュ生成時に使用さ.れることになります. そのため, 古いハッシュで保存されたパスワードは、ベストのアルゴリズムを使うよう, 徐々に更新がなされます.',
    
      'Subject prefix for Conpherence mail.' => 'Conpherence メールの題名につける先頭文字列.',
    
      'Subject prefix for Differential mail.' => 'Differential メールの題名につける先頭文字列.',
    
      'Subject prefix for Diffusion mail.' => 'Diffusion メールの題名につける先頭文字列.',
    
      'Subject prefix for Files email.' => 'Files  メールの題名につける先頭文字列.',
    
      'Subject prefix for Legalpad email.' => 'Legalpad が送信する Email のタイトル先頭に付ける文字.',
    
      'Subject prefix for Macro email.' => 'Macro  メールの題名につける先頭文字列.',
    
      'Subject prefix for Maniphest mail.' => 'Maniphest メールの題名につける先頭文字列.',
    
      'Subject prefix for Owners email.' => 'Owners メールの題名につける先頭文字列.',
    
      'Subject prefix for Paste email.' => 'Paste メールの題名につける先頭文字列.',
    
      'Subject prefix for Pholio email.' => 'Pholio メールの題名につける先頭文字列.',
    
      'Subject prefix for Phriction email.' => 'Phriction メールの題名につける先頭文字列.',
    
      'Submit' => '提出',
    
      'Submit Payment' => '支払いを提出',
    
      'Subscribe' => '購読',
    
      'Subscribed' => '購読済',
    
      'Subscribers' => '購読者',
    
      'Subscriptions' => '購読リスト',
    
      'Sun' => '日',
    
      'Table' => '表',
    
      'Tag' => 'タグ',
    
      'Task' => 'タスク',
    
      'Task %d' => 'タスク %d',
    
      'Task %d (%s)' => 'タスク %d (%s)',
    
      'Task Burn Rate for All Tasks' => 'すべてのタスクにおけるタスク消化率',
    
      'Task Burn Rate for Project %s' => 'プロジェクト %s におけるタスク消化率',
    
      'Task Class' => 'タスククラス',
    
      'Task Daemon Not Running' => 'タスクデーモンは未実行中です',
    
      'Task Daemon Running' => 'タスク デーモン実行中',
    
      'Task Does Not Exist' => 'タスクは存在しません',
    
      'Task IDs' => 'タスク ID',
    
      'Task Status' => 'タスクステータス',
    
      'Task T123' => 'タスク T123',
    
      'Task priority' => 'タスク優先度',
    
      'Task queue is empty.' => 'タスクキューは空です',
    
      'Task(s)' => 'タスク',
    
      'Tasks' => 'タスク',
    
      'Tasks and Bugs' => 'タスクとバグ',
    
      'Team' => 'チーム',
    
      'Temporary' => 'テンポラリ',
    
      'Temporary Failures' => '一時的な失敗',
    
      'Temporary Tokens' => '一時トークン',
    
      'Terminate' => '停止',
    
      'Terminate All Sessions' => 'すべてのセッションを停止',
    
      'Terminate Session' => 'セッションを停止',
    
      'Terminate Session?' => 'セッションを停止しますか?',
    
      'Terminate Sessions' => 'セッションを停止',
    
      'Terminate Sessions?' => 'セッションを停止しますか?',
    
      'Terminating daemon \'%s\' (%s)...' => 'デーモンプロセス \'%s\' (%s) を停止しています...',
    
      'Test' => 'テスト',
    
      'Test Console' => 'テスト コンソール',
    
      'Text' => 'テキスト',
    
      'Text Encoding' => 'テキストエンコード',
    
      'The Cloud' => 'クラウド',
    
      'The author of a blog post can always view and edit it.' => 'ブログポストの作成者自身は常に閲覧と編集が可能です.',
    
      'The author of a countdown can always view and edit it.' => 'カウントダウンの作成者自身は常に閲覧と編集が可能です.',
    
      'The author of a document can always view and edit it.' => 'ドキュメントの作成者自身は常に閲覧と編集が可能です.',
    
      'The author of a paste can always view and edit it.' => 'ペーストの作成者自身は常に閲覧と編集が可能です.',
    
      'The author of a poll can always view and edit it.' => '投票の作成者自身は常に閲覧と編集が可能です.',
    
      'The author of a revision can not be a reviewer.' => 'リビジョンの作成者自身は常に閲覧と編集が可能です.',
    
      'The author of an answer can always view and edit it.' => '回答の作成者自身は常に閲覧と編集が可能です.',
    
      'The old password you entered is incorrect.' => '入力された古いパスワードが違います.',
    
      'The owner of a revision can always view and edit it.' => 'リビジョンの作成者自身は常に閲覧と編集が可能です.',
    
      'The owner of a task can always view and edit it.' => 'タスクの作成者自身は常に閲覧と編集が可能です.',
    
      'The owner of an initiative can always view and edit it.' => 'イニシアチブの作成者自身は常に閲覧と編集が可能です.',
    
      'The primary hashtag is derived from the name.' => 'メインとなるハッシュタグはプロジェクト名から生成されます.',
    
      'The public key has been associated with the %s account. Use the button below to download the private key.' => '%24lang-%3E%27The+public+key+has+been+associated+with+the+%25s+account.+Use+the+button+below+to+download+the+private+key.%27
The public key has been associated with the %s account. 下のボタンを押して秘密鍵をダウンロードしてください.',
    
      'The public key has been associated with your Phabricator account. Use the button below to download the private key.' => '%24lang-%3E%27The+public+key+has+been+associated+with+your+Phabricator+account.+Use+the+button+below+to+download+the+private+key.%27
The public key has been associated with your Phabricator account. 下のボタンを押して秘密鍵をダウンロードしてください.',
    
      'The secret associated with this credential will be shown in plain text on your screen. Before continuing, wrap your arms around your monitor to create a human shield, keeping it safe from prying eyes. Protect company secrets!' => '%24lang-%3E%27The+secret+associated+with+this+credential+will+be+shown+in+plain+text+on+your+screen.+Before+continuing%2C+wrap+your+arms+around+your+monitor+to+create+a+human+shield%2C+keeping+it+safe+from+prying+eyes.+Protect+company+secrets%21%27
The secret associated with this credential will be shown in plain text on your screen. ここから進む前に, あなたがしなければならないことがあります. 覗き見を防ぐために, 自分の腕でモニターを抱きしめ人の壁となるのです. Protect company secrets!',
    
      'There are no facts that can be plotted yet.' => 'まだ,グラフ化できるファクトはありません.',
    
      'These paths get appended to your \\$PATH envrionment variable.' => 'These paths get appended to your \$PATH envrionment variable.',
    
      'These rules are processed in order.' => 'これらのルールは順番通りに処理されます.',
    
      'This application is a prototype. %s' => 'このアプリケーションはプロトタイプです. %s',
    
      'This blog has no visible posts.' => 'このブログに表示できるポストはありません.',
    
      'This credential has been locked and the secret is hidden forever. Anything relying on this credential will still function. This operation can not be undone.' => '%24lang-%3E%27This+credential+has+been+locked+and+the+secret+is+hidden+forever.+Anything+relying+on+this+credential+will+still+function.+This+operation+can+not+be+undone.%27
This credential has been locked and the secret is hidden forever. Anything relying on this credential will still function. この処理は元に戻すことはできません.',
    
      'This credential will be deactivated and the secret will be unrecoverably destroyed. Anything relying on this credential will cease to function. This operation can not be undone.' => '%24lang-%3E%27This+credential+will+be+deactivated+and+the+secret+will+be+unrecoverably+destroyed.+Anything+relying+on+this+credential+will+cease+to+function.+This+operation+can+not+be+undone.%27
This credential will be deactivated and the secret will be unrecoverably destroyed. Anything relying on this credential will cease to function. この処理は元に戻すことはできません.',
    
      'This credential will be locked and the secret will be hidden forever. Anything relying on this credential will still function. This operation can not be undone.' => '%24lang-%3E%27This+credential+will+be+locked+and+the+secret+will+be+hidden+forever.+Anything+relying+on+this+credential+will+still+function.+This+operation+can+not+be+undone.%27
This credential will be locked and the secret will be hidden forever. Anything relying on this credential will still function. この処理は元に戻すことはできません.',
    
      'This is a binary file.' => 'バイナリーファイルです.',
    
      'This is a binary file. It is %s byte(s) in length.' => 'バイナリーファイルです. It is %s byte(s) in length.',
    
      'This is a simple template dashboard. You can edit this panel to change this text and replace it with a welcome message, or leave this placeholder text as-is to give your dashboard a rustic, authentic feel.\n\nYou can drag, remove, add, and edit panels to customize the rest of this dashboard to show the information you want.\n\nTo install this dashboard on the home page, use the **Install Dashboard** action link above.' => 'これは, テンプレートボードですこのメッセージは	変更可能です. パネルを編集し, 任意のようこそメッセージに書き変えましょう. ( そのままにすることで, 厳正に放置された雰囲気を残すこともできます .)\n\n 残りのパネルについてもドラッグ・削除・追加・編集を通して, 表示内容の調整が可能です.\n\nこのダッシュボードをホームページにインストールするには、上にある **ダッシュボードをインストール** アクションリンクを使用してください.',
    
      'This merchant does not have any payment providers configured yet, so it can not accept payments. Add a provider.' => '%24lang-%3E%27This+merchant+does+not+have+any+payment+providers+configured+yet%2C+so+it+can+not+accept+payments.+Add+a+provider.%27
This merchant does not have any payment providers configured yet, so it can not accept payments. プロバイダを追加.',
    
      'This post is not associated with a blog (the blog may have been deleted). Use "Move Post" to move it to a new blog.' => '%24lang-%3E%27This+post+is+not+associated+with+a+blog+%28the+blog+may+have+been+deleted%29.+Use+%22Move+Post%22+to+move+it+to+a+new+blog.%27
This post is not associated with a blog (the blog may have been deleted). 新しいブログに移動させるには, "ポストを移動" を使ってください.',
    
      'This project does not have any members.' => 'このプロジェクトはメンバがいません.',
    
      'This project will be moved to the archive.' => 'このプロジェクトはアーカイブに移動されます.',
    
      'This project will become active again.' => 'このプロジェクトは再びアクティブになります.',
    
      'This repository does not have any commits yet.' => 'このレポジトリにはまだ何もコミットされていません.',
    
      'This repository has no branches.' => 'このレポジトリにはブランチがありません.',
    
      'This repository has no configured mirrors.' => 'このレポジトリにはミラーが設定されていません.',
    
      'This repository has no tags.' => 'このレポジトリにはタグがありません.',
    
      'This repository is inactive.' => 'このレポジトリは非アクティブです.',
    
      'This repository is not available over HTTP.' => 'このレポジトリは HTTP 経由で利用できません.',
    
      'This repository is not available over SSH.' => 'このレポジトリは SSH 経由で利用できません.',
    
      'This repository is read-only over HTTP.' => 'このレポジトリは HTTP 経由では読み取り専用です.',
    
      'This repository is read-only over SSH.' => 'このレポジトリは SSH 経由では読み取り専用です.',
    
      'This repository is still importing. History is not yet available.' => 'このレポジトリはまだインポート処理中です. 履歴はまだ利用可能ではありません.',
    
      'This repository requires authentication, which is forbidden over HTTP.' => 'このレポジトリは認証が必要です. (認証は HTTP 経由では利用できません)',
    
      'This repository will be updated soon!' => 'このレポジトリはもうすぐ更新されます!',
    
      'This request had an invalid CSRF token.' => 'このリクエストには無効な CSRF トークンが付けられていました.',
    
      'This request had no CSRF token.' => 'このリクエストには CSRF トークンが付けられていませんでした.',
    
      'This resource has no leases.' => 'このリソースにはリースがありません.',
    
      'This revision already requires changes.' => 'このリビジョンは変更を必要としています.',
    
      'This revision has already been abandoned.' => 'このリビジョンは既に破棄されました.',
    
      'This revision is already closed.' => 'このリビジョンは閉じられました.',
    
      'This revision is now accepted and ready to land.' => 'このリビジョンは承諾され, 投入準備ができています.',
    
      'This revision needs review, but there are no reviewers specified.' => 'このリビジョンはレビューを必要としていますが, レビュアーが誰も指定されていません.',
    
      'This revision now requires changes to proceed.' => 'このリビジョンを処理するには変更が必要になっています.',
    
      'This revision now requires review to proceed.' => 'このリビジョンを処理するにはレビューが必要となっています.',
    
      'This will be displayed as the header of the column.' => 'カラムのヘッダに表示されるテキストです.',
    
      'This word or phrase will be replaced with the image.' => 'この単語もしくは文節が画像と差し替えられます.',
    
      'This workboard has not been setup yet.' => 'このワークボードはまだセットアップ完了していません.',
    
      'Thu' => '木',
    
      'Thursday' => '木曜日',
    
      'Time' => '時間',
    
      'Time Spent' => '経過した時間',
    
      'Time-of-Day Format' => '日付・時間のフォーマット',
    
      'Timezone' => 'タイムゾーン',
    
      'Title' => 'タイトル',
    
      'Title / Text Story' => 'タイトル / テキスト ストーリー',
    
      'Title is required.' => 'タイトルが必須です.',
    
      'Title is too long.' => 'タイトルが長過ぎます.',
    
      'Title must be nonempty.' => 'タイトルがなにか指定されなければなりません.',
    
      'Title must not be empty.' => 'タイトルを空にはできません.',
    
      'Title was changed from "%s" to "%s"' => 'タイトルが "%s" から "%s" に変更された',
    
      'To permanently destroy this user, run this command:' => 'ユーザを永久的に削除するために, 以下のコマンドを実行してください:',
    
      'Today' => '今日',
    
      'Today, I went to the store. I bought an apple. I bought a banana. I bought a cherry. I paid for my goods, then I returned home.' => '%24lang-%3E%27Today%2C+I+went+to+the+store.+I+bought+an+apple.+I+bought+a+banana.+I+bought+a+cherry.+I+paid+for+my+goods%2C+then+I+returned+home.%27
Today, I went to the store. りんごを一つ, 買いました. バナナを一つ, 買いました. サクランボを一つ, 買いました. I paid for my goods, then I returned home.',
    
      'Token' => 'トークン',
    
      'Token Leader Board' => 'トークン リーダボード',
    
      'Token Query' => 'トークン クエリ',
    
      'Token Results (%s)' => 'トークン結果 (%s)',
    
      'Token Story' => 'トークンのストーリー',
    
      'Tokens' => 'トークン',
    
      'Tokens Given' => '与えられたトークン',
    
      'Tokens: %s' => 'トークン: %s',
    
      'Too Long' => '長すぎます',
    
      'Too Short' => '短すぎます',
    
      'Track All Branches' => '全てのブランチを追跡',
    
      'Track Only' => '追跡のみ',
    
      'Track Time Spent' => '消費時間の追跡',
    
      'Tracked %s so far' => '追跡から今のところ %s 経過',
    
      'Tracked: %s' => '追跡者: %s',
    
      'Translation' => '翻訳',
    
      'Translation class that should be used for strings.' => '文字リソースのために使用されるべきTranslationクラス.',
    
      'Translations' => '翻訳',
    
      'Trunk' => 'トランク',
    
      'Tue' => '火',
    
      'Tuesday' => '火曜日',
    
      'Two columns, 1/2 and 1/2' => '2列, 1/2 と 1/2',
    
      'Two columns, 1/3 and 2/3' => '2列, 1/3 と 2/3',
    
      'Two columns, 2/3 and 1/3' => '2列, 2/3 と 1/3',
    
      'Type' => 'タイプ',
    
      'Type "none"...' => '"none" を入力...',
    
      'Type a build plan name...' => 'ビルドプラン名を入力...',
    
      'Type a document name...' => 'ドキュメント名を入力...',
    
      'Type a macro name...' => 'マクロ名を入力...',
    
      'Type a mailing list name...' => 'メーリングリスト名を入力...',
    
      'Type a package name...' => 'パッケージ名を入力...',
    
      'Type a project name...' => 'プロジェクト名を入力...',
    
      'Type a repository name...' => 'レポジトリ名を入力...',
    
      'Type a symbol name...' => 'シンボル名を入力...',
    
      'Type a task priority name...' => 'タスク優先度名を入力...',
    
      'Type a user name or "none"...' => 'ユーザ名か"none"を入力...',
    
      'Type a user or project name...' => 'ユーザ名またはプロジェクト名を入力...',
    
      'Type a user, project or package name...' => 'ユーザ名, プロジェクト名, またはパッケージ名を入力...',
    
      'Type a user, project, or mailing list name...' => 'ユーザ名, プロジェクト名, またはメーリングリスト名を入力...',
    
      'Type a username...' => 'ユーザ名を入力...',
    
      'Type an application name...' => 'アプリケーション名を入力...',
    
      'Type an arcanist project name...' => 'Arcanist プロジェクト名を入力...',
    
      'Type an object name...' => 'オブジェクト名を入力...',
    
      'Type another build step name...' => '別のビルドステップの名前を入力...',
    
      'Types' => 'タイプ',
    
      'URL' => 'URL アドレス',
    
      'USERS' => 'ユーザ',
    
      'Unable to Generate Keys' => 'Keys が生成できません',
    
      'Unarchive Project' => 'プロジェクトの非アーカイブ化',
    
      'Unblock' => 'アンブロック',
    
      'Unbreak Now!' => '今すぐ直せ!',
    
      'Unbreak!' => '直す!',
    
      'Unexpected Error' => '想定外のエラー',
    
      'Unexpected currency!' => '想定外の通貨です!',
    
      'Unhandled Exception' => '未処理の例外',
    
      'Unhandled Exception: %s' => '未処理の例外: %s',
    
      'Uninstall' => 'アンインストール',
    
      'Uninstall Dashboard' => 'ダッシュボードをアンインストール',
    
      'Uninstalled' => '未インストール',
    
      'Unknown Account ("%s")' => '不明なアカウント ("%s")',
    
      'Unknown Object (%s)' => '不明なオブジェクト (%s)',
    
      'Unknown Policy' => '不明なポリシー',
    
      'Unknown Sender' => '不明な送信者',
    
      'Unknown Status' => '不明なステータス',
    
      'Unknown Type' => '不明なタイプ',
    
      'Unknown URI type "%s"!' => '不明な URI タイプ "%s"!',
    
      'Unknown VCS "%s"!' => '不明な VCS "%s"!',
    
      'Unknown VCS \'%s!\'' => '不明な VCS \'%s!\'',
    
      'Unknown cart status "%s"!' => '不明なカートステータス "%s"!',
    
      'Unknown column type "%s"!' => '不明なカラムタイプ "%s"!',
    
      'Unknown commit "%s"!' => '不明なコミット "%s"!',
    
      'Unknown condition "%s"!' => '不明な条件 "%s"!',
    
      'Unknown constraint condition "%s"!' => '不明な制限条件 "%s"!',
    
      'Unknown dashboard application class "%s"!' => '不明なダッシュボードアプリケーションクラス "%s"!',
    
      'Unknown dashboard template %s!' => '不明なダッシュボードテンプレート %s!',
    
      'Unknown edge constant "%s"!' => '不明な edge 定数 "%s"!',
    
      'Unknown index type "%s"!' => '不明な目次タイプ "%s"!',
    
      'Unknown order "%s"!' => '不明なオーダー "%s"!',
    
      'Unknown part type \'%s\'!' => '不明な part タイプ \'%s\'!',
    
      'Unknown patch "%s" in "%s", expected ".php" or ".sql" suffix.' => '不明なパッチ "%s" ( パッチ対象 "%s" は ".php" か ".sql" 拡張子であるべき).',
    
      'Unknown phase "%s"!' => '不明なフェーズ "%s"!',
    
      'Unknown repository VCS type.' => '不明なレポジトリ VCS タイプp.',
    
      'Unknown request type.' => '不明なリクエストタイプ.',
    
      'Unknown rule type "%s"!' => '不明なルールタイプ "%s"!',
    
      'Unknown schema adjustment kind "%s"!' => '不明なスキーマ調整タイプ "%s"!',
    
      'Unknown schema issue "%s"!' => '不明なスキーマ課題 "%s"!',
    
      'Unknown schema status "%s"!' => '不明なスキーマステータス "%s"!',
    
      'Unknown session type "%s".' => '不明なセッションタイプ "%s".',
    
      'Unknown setting.' => '不明な設定.',
    
      'Unknown version control system.' => '不明なバージョン管理システム.',
    
      'Unlimited' => '無制限',
    
      'Unlink "%s" Account?' => '"%s" アカウントとのリンクを解除しますか?',
    
      'Unlink Account' => 'リンク解除',
    
      'Unlink Account?' => 'リンクを解除しますか?',
    
      'Unpin Application' => 'アプリケーションのピンを外す',
    
      'Unpublish' => '取り下げ',
    
      'Unpublish Post?' => 'ポストの取り下げをしますか?',
    
      'Unpublished Drafts' => '出版されていない下書き',
    
      'Unread Notifications' => '未読の通知',
    
      'Unsubscribe' => '購読解除',
    
      'Untitled Article "%s"' => '無題の記事 "%s"',
    
      'Untitled Document' => '無題ドキュメント',
    
      'Untitled Story' => '無題のストーリー',
    
      'Untitled Task' => '無題のタスク',
    
      'Unused Output' => '未使用の出力',
    
      'Unverified' => '未検証',
    
      'Unverified Email' => '未検証済 Email',
    
      'Unwatch Project' => 'プロジェクトのウォッチ中止',
    
      'Unwatch Project?' => 'プロジェクトのウォッチをやめますか?',
    
      'Up For Grabs' => 'ぶら下がり',
    
      'Upcoming' => '近日の予定',
    
      'Upcoming Events' => '近日予定のイベント',
    
      'Update Frequency' => '更新頻度',
    
      'Update Now' => '今すぐ更新',
    
      'Update Repository Now' => 'レポジトリを今すぐ更新',
    
      'Update Status' => '更新ステータス',
    
      'Update Tasks' => 'タスクの更新',
    
      'Update Variable' => '変数を更新',
    
      'Updated' => '更新済',
    
      'Updated After' => '～以降に更新',
    
      'Updated Before' => '～以前に更新',
    
      'Updated By' => '～によって更新',
    
      'Upgrade to PHP 5.5.0 or newer.' => 'PHP 5.5.0 以降のバージョンにアップグレードしてください.',
    
      'Upgrading partial session of user with no session!' => '簡易ログインセッションを, 無セッションにアップグレードしています!',
    
      'Upload' => 'アップロード',
    
      'Upload %s from %s.' => '%s を %s からアップロード.',
    
      'Upload Complete...' => 'アップロード完了...',
    
      'Upload File' => 'ファイルを アップロード',
    
      'Upload From Host' => 'ホストから アップロード',
    
      'Upload Limit' => 'アップロード量リミット',
    
      'Upload Limit Not Yet Configured' => 'アップロード量にリミットが設定されていません',
    
      'Upload New Audio' => '新しい音をアップロード',
    
      'Upload New File' => '新しいファイルを アップロード',
    
      'Upload New Picture' => '新しい画像を アップロード',
    
      'Upload Picture' => '画像を アップロード',
    
      'Upload Public Key' => '公開鍵を アップロード',
    
      'Upload a file from a host to Phabricator.' => 'ホストから Phabricator にファイルをアップロード.',
    
      'Uploaded by %s on %s' => '%s によってアップロードされた, %s',
    
      'Uploading Image...' => '画像をアップロードしています...',
    
      'Use %s to start daemons. See %s.' => 'デーモンを起動するには %s を使用してください.  %s も参考に.',
    
      'Use Default (UTF-8)' => 'デフォルトを使用 (UTF-8)',
    
      'Use Picture' => '画像を使う',
    
      'Use the button below to log in as: %s' => '下のボタンを押すと, ユーザー "%s" としてログインします.',
    
      'User' => 'ユーザ',
    
      'User Account' => 'ユーザアカウント',
    
      'User Accounts and Profiles' => 'ユーザアカウントとプロファイル',
    
      'User Activity Logs' => 'ユーザの活動ログ',
    
      'User Administration' => 'ユーザ管理',
    
      'User Guide: Amazon RDS' => 'ユーザガイド: Amazon RDS',
    
      'User Guide: Configuring an External Editor' => 'ユーザガイド: 外部エディタを設定する',
    
      'User Guide: Prototype Applications' => 'ユーザガイド: アプリケーションのプロトタイプ',
    
      'User Interface' => 'ユーザインターフェース',
    
      'User Mismatch' => 'ユーザミスマッチ',
    
      'User Policies' => 'ユーザポリシー',
    
      'User Preferences' => 'ユーザ設定',
    
      'User Profiles' => 'ユーザプロファイル',
    
      'User Since' => 'ユーザ作成日',
    
      'User profiles configuration.' => 'ユーザープロフィールの設定.',
    
      'User since' => 'ユーザー登録日 ',
    
      'User title, like "CEO" or "Assistant to the Manager".' => 'ユーザのタイトル ( 例えば "CEO" や "マネージャ…のアシスタント".',
    
      'Username' => 'ユーザ名',
    
      'Username Attribute' => 'ユーザ名属性',
    
      'Username and email must be unique.' => 'ユーザ名および Email はユニークであることが必要です.',
    
      'Username for SMTP.' => 'SMTP に使用するユーザ名.',
    
      'Username is required.' => 'ユーザ名は必須です.',
    
      'Username or password are incorrect.' => 'ユーザ名またはパスワードが正しくありません.',
    
      'Username/Password' => 'ユーザ名 / パスワード',
    
      'Usernames' => 'ユーザ名',
    
      'Users' => 'ユーザ',
    
      'Users who can edit a project can always join a project.' => 'プロジェクトの編集者は参加可能でもあります.',
    
      'Users with the "%s" capability:' => '"%s" の権限があるユーザとは:',
    
      'Utilities' => 'ユーティリティ',
    
      'Valid Input' => '正しい入力',
    
      'Valid Output' => '正しい出力',
    
      'Valid Setting' => '正しい設定値',
    
      'Value' => '値',
    
      'Variable' => '変数',
    
      'Variable "%s"' => '変数 "%s"',
    
      'Variable List' => '変数リスト',
    
      'Verification Email Sent' => '検証のためのメールが送られました',
    
      'Verified' => '検証済',
    
      'Verified, Corporate' => '検証済, 会社',
    
      'Verified, Current' => '検証済, 現在',
    
      'Verify' => '検証',
    
      'Verify %s' => '%s を検証',
    
      'Verify Email' => 'Email を検証',
    
      'Verify Email Address' => 'Email アドレスを検証',
    
      'Verify Signature' => '署名を検証',
    
      'Verify Signature?' => '署名を検証しますか?',
    
      'Verify this email address (%s) and attach it to your account?' => 'この Email アドレス (%s) を検証して自分のアカウントに紐付けますか?',
    
      'Verifying database schemata...' => 'データベーススキーマを検証中...',
    
      'Version %d (%s)' => 'バージョン %d (%s)',
    
      'Version %s' => 'バージョン %s',
    
      'Version %s vs %s' => 'バージョン %s vs %s',
    
      'Versioned Artifact Storage' => 'バージョン管理された格納庫',
    
      'Versions' => 'バージョン',
    
      'Very Weak' => 'とても弱い',
    
      'Via' => '経路',
    
      'View All' => 'すべて見る',
    
      'View All Problem Commits' => '問題のあるコミットを全て見る',
    
      'View As List' => 'リストを閲覧',
    
      'View Backers' => 'Backers を見る',
    
      'View Child Fragments' => '子フラグメントを見る',
    
      'View Commits' => 'コミットを見る',
    
      'View Dashboard' => 'ダッシュボードを見る',
    
      'View Edit History' => '編集履歴を見る',
    
      'View Email Body' => 'Email 本文を見る',
    
      'View File' => 'ファイルを見る',
    
      'View Full History' => '全履歴を見る',
    
      'View Full Logs' => '全ログを見る',
    
      'View Full Transcript' => 'すべての Transcript を見る',
    
      'View Herald Transcript' => 'Herald Transcript を見る',
    
      'View History' => '履歴を見る',
    
      'View Live' => 'Live で見る',
    
      'View Options' => 'オプションを見る',
    
      'View Orders' => 'オーダーを見る',
    
      'View Policy' => 'ポリシーを見る',
    
      'View Push Logs' => 'Push ログを見る',
    
      'View Raw' => 'Raw を見る',
    
      'View Raw File' => 'Raw ファイルを見る',
    
      'View Revisions' => 'リビジョンを見る',
    
      'View Side-by-Side' => '横分割の比較画面で見る',
    
      'View Signatures' => '署名を見る',
    
      'View Snapshot' => 'スナップショットを見る',
    
      'View Standalone' => 'スタンド亜ローンを見る',
    
      'View Task' => 'タスクを見る',
    
      'View Tasks' => 'タスクを見る',
    
      'View Unified (Barely Works!)' => 'Unified で見る (めったに動かないけど!)',
    
      'View Version' => 'バージョンを見る',
    
      'View Version %d' => 'バージョンを見る',
    
      'View Wiki' => 'Wiki を見る',
    
      'View logs.' => 'ログを見る.',
    
      'Violet' => '紫色',
    
      'Visible To' => '公開度',
    
      'Vote Type' => '投票タイプ',
    
      'Wait For Approval' => '承認をお待ちください',
    
      'Wait For Message' => 'メッセージをお待ちください',
    
      'Wait Patiently' => '辛抱強く待つ',
    
      'Wait for Approval' => '承認をお待ちください',
    
      'Waiting on Others' => '他を待機中',
    
      'Watch Project' => 'プロジェクトを ウォッチ',
    
      'Watch Project?' => 'プロジェクトをウォッチしますか?',
    
      'Watchers' => 'ウォッチャー',
    
      'Wed' => '水',
    
      'Wednesday' => '水曜日',
    
      'Weigh In' => '踏み入る',
    
      'Welcome' => 'ようこそ',
    
      'Welcome Screen' => 'ようこそ 画面',
    
      'Welcome to Phabricator' => 'Phabricator にようこそ',
    
      'What time did you start working?' => 'いつ頃から始めましたか?',
    
      'What time did you stop working?' => 'いつ頃まで続けていましたか?',
    
      'Wiki Document' => 'Wiki ドキュメント',
    
      'Wiki Documents' => 'Wiki ドキュメント',
    
      'Wish' => '欲しいもの',
    
      'Wishlist' => '欲しいものリスト',
    
      'Wontfix' => '直さない',
    
      'Workboard Columns' => 'ワークボード カラム',
    
      'Workboards' => 'ワークボード',
    
      'Working Copy' => 'ローカルコピー',
    
      'Working Copy Error' => 'ローカルコピー エラー',
    
      'Working Copy OK' => 'ローカルコピー OK',
    
      'Write Post' => 'ポストを書く',
    
      'Yellow' => '黄色',
    
      'Yellow Medal' => 'イエローメダル',
    
      'Yesterday' => '昨日',
    
      'You Shall Not Pass: %s' => 'ここは通らせぬ: %s',
    
      'You are already logged in.' => '既にログインしています.',
    
      'You are creating a new **bot/script** user account.' => '新しい **ボット/スクリプト** ユーザアカウントを作成します.',
    
      'You are creating a new **standard** user account.' => '新しい **標準** ユーザアカウントを作成します.',
    
      'You are not currently tracking time on this object.' => '現在このオブジェクトを時間追跡していません.',
    
      'You can choose a **Default Branch** for viewing this repository.' => 'このレポジトリを閲覧するときの, **デフォルトブランチ** を選べます.',
    
      'You can flag this %s if you want to remember to look at it later.' => '後で見直すために, この %s にフラグを立てておくことができます.',
    
      'You can not create an empty document.' => '空のドキュメントは作成できません.',
    
      'You can not hide the default/backlog column on a board.' => 'デフォルト / バックログ カラムを隠すことはできません.',
    
      'You can not update the Lock Project setting.' => 'あなたはプロジェクトのロック設定を変更することはできません.',
    
      'You can update the Lock Project setting.' => 'あなたがプロジェクトのロック設定を変更できます.',
    
      'You can update these %d value(s) here:' => 'あなたは, これら %d つの値を変更できます:',
    
      'You do not have permission to access this repository.' => 'このレポジトリにアクセスする権限がありません.',
    
      'You do not have permission to assign tasks.' => 'タスクをアサインする権限がありません.',
    
      'You do not have permission to browse the user directory.' => 'ユーザーの一覧を見る権限がありません.',
    
      'You do not have permission to bulk edit tasks.' => 'タスクをバルク編集する権限がありません.',
    
      'You do not have permission to create Drydock blueprints.' => 'Drydock ブループリントを作成する権限がありません.',
    
      'You do not have permission to create Fund initiatives.' => 'イニシアチブにファンドする権限がありません.',
    
      'You do not have permission to create OAuth applications.' => 'OAuth アプリケーションを作成する権限がありません.',
    
      'You do not have permission to create Phortune merchant accounts.' => 'Phortune 商人アカウントを作成する権限がありません.',
    
      'You do not have permission to create fragments.' => 'フラグメントを作成する権限がありません.',
    
      'You do not have permission to create new documents.' => '新しくドキュメントを作成する権限がありません.',
    
      'You do not have permission to create new projects.' => '新しくプロジェクトを作成する権限がありません.',
    
      'You do not have permission to create new repositories.' => '新しくレポジトリを作成する権限がありません.',
    
      'You do not have permission to create or manage global rules.' => 'グローバルルールを作成・管理するための権限がありません.',
    
      'You do not have permission to edit task policies.' => 'タスクポリシーを編集する権限がありません.',
    
      'You do not have permission to edit task projects.' => 'タスクプロジェクトを編集する権限がありません.',
    
      'You do not have permission to edit task status.' => 'タスクステータスを編集する権限がありません.',
    
      'You do not have permission to edit this dashboard. If you want to make changes, make a copy first.' => '%24lang-%3E%27You+do+not+have+permission+to+edit+this+dashboard.+If+you+want+to+make+changes%2C+make+a+copy+first.%27
You do not have permission to edit this dashboard. 変更を加えたい場合はまずコピーを作成してください.',
    
      'You do not have permission to edit this object.' => 'このオブジェクトを編集する権限がありません.',
    
      'You do not have permission to join any blogs. Create a blog first, then you can post to it.' => '%24lang-%3E%27You+do+not+have+permission+to+join+any+blogs.+Create+a+blog+first%2C+then+you+can+post+to+it.%27
You do not have permission to join any blogs. ブログをまず作成し, ポストを投稿してください.',
    
      'You do not have permission to join this object.' => 'このオブジェクトに参加する権限がありません.',
    
      'You do not have permission to lock project membership.' => 'プロジェクトメンバをロックするための権限がありません.',
    
      'You do not have permission to manage Harbormaster build plans.' => 'Harbormaster ビルドプランの管理権限がありません.',
    
      'You do not have permission to manage global Herald rules.' => 'グローバル Herald ルールの管理権限がありません.',
    
      'You do not have permission to manage image macros.' => 'イメージマクロの管理権限がありません.',
    
      'You do not have permission to manage sources.' => 'ソースの管理権限がありません.',
    
      'You do not have permission to prioritize tasks.' => 'タスクの優先度付けのための権限がありません.',
    
      'You do not have permission to push to this repository.' => 'このレポジトリに Push するための権限がありません.',
    
      'You do not have permission to use those credentials.' => 'これらのクレデンシャルを使用する権限がありません.',
    
      'You do not have permission to view this object.' => 'このオブジェクトを見る権限がありません.',
    
      'You do not have permissions to push to this repository.' => 'このレポジトリに Push するための権限を満たしていません.',
    
      'You do not have privileges to access the requested page.' => '要求されたページに対して、アクセス権限がありません',
    
      'You don\'t have any active sessions.' => 'アクティブなセッションはありません.',
    
      'You don\'t have any active tokens.' => 'アクティブなトークンを持っていません.',
    
      'You have %d unresolved setup issue(s)...' => '%d 件のセットアップ上の課題が残っています...',
    
      'You have no linked accounts.' => 'リンクされたアカウントはありません.',
    
      'You have no messages.' => '受け取ったメッセージはありません.',
    
      'You have no notifications.' => '受け取った通知はありません.',
    
      'You have not written any posts.' => 'まだポストが1つもか書かれていません.',
    
      'You haven\'t added any SSH Public Keys.' => 'SSH 公開鍵は, まだ追加されていません.',
    
      'You haven\'t added any authentication factors to your account yet.' => '認証ファクタは, まだ追加されていません.',
    
      'You haven\'t authorized any OAuth applications.' => 'OAuth アプリケーションは, まだ認証されていません.',
    
      'You must add at least one image to the mock.' => 'モックには少なくとも1つ画像が追加されなくてはなりません.',
    
      'You must ask a poll question.' => '投票者のために質問を1つ作らなくてはなりません.',
    
      'You must call setParentPanelPHIDs() before rendering panels.' => 'パネルが表示される前には, setParentPanelPHIDs() が呼び出されていなければなりません.',
    
      'You must call setType() before render()!' => 'render() の前には, setType() が呼び出されていなければなりません.!',
    
      'You must choose a password.' => 'パスワードを1つ選んでください.',
    
      'You must give the countdown a name.' => 'カウントダウンには名前を付けなければなりません.',
    
      'You must give the countdown a valid end date.' => 'カウントダウンには正しい終了時間の指定が必要です.',
    
      'You must give the mock a name.' => 'モックには名前を付けなければなりません.',
    
      'You must offer at least one response.' => '回答を最低1つは用意する必要があります.',
    
      'You must upload an audio file.' => '音声ファイルがアップロードされていません.',
    
      'Your account has been created, but needs to be approved by an administrator. You\'ll receive an email once your account is approved.' => 'あなたのアカウントが作成されましたが、管理者による承認を待たなければなりません. アカウント承認後に, あなたの元へ Email が届きます.',
    
      'Your account has been disabled.' => 'あなたのアカウントは無効化されています.',
    
      'Your account is linked with all available providers.' => 'このアカウントは、使用可能なすべてプロバイダとリンク済です.',
    
      'Your new password is too short.' => '新しいパスワードが短すぎます.',
    
      'Your tremendous contributions to this project will be sorely missed. Are you sure you want to leave?' => '%24lang-%3E%27Your+tremendous+contributions+to+this+project+will+be+sorely+missed.+Are+you+sure+you+want+to+leave%3F%27
Your tremendous contributions to this project will be sorely missed. 本当に離れたいのですか?',
    
      '[Legalpad] Signature Verification' => '[Legalpad] 署名の確認',
    
      '[Phabricator] Password Reset' => '[Phabricator] パスワードリセット',
    
      '[Request, %d lines]' => '[Request, %d 行]',
    
      'administrators' => '管理者',
    
      'dangerous change' => '危険な変更',
    
      'is full' => 'が満月の時',
    
      'is new' => 'が新月の時',
    
      'is waning' => '十八夜の時',
    
      'is waxing' => '三日月 / 十三夜 の時',
    
      'members of projects' => 'プロジェクトのメンバー',
    
      'rofllolo!!~' => 'ゲハデゥフフ!!',
    
      'security.alternate-file-domain must be configured!' => 'security.alternate-file-domain プロパティが設定されている必要があります!',
    
      'signers of legalpad documents' => 'Legalpad ドキュメントの署名者',
    
      'users' => 'ユーザ',
    
      'when the moon' => 'お月さま',
    
      '\342\207\252 Drop Files to Upload' => null,
    
      'No daemon(s) with id(s) "%s" exist!' => 'ID %s のデーモンプロセスが存在しません!',
      'These %d configuration value(s) are related:' => 'この設定値は以下に関連しています:',
      'Differential Revision(s)' => 'Differential リビジョン',
      'file(s)' => 'ファイル',
      'Maniphest Task(s)' => 'Maniphest タスク',
      'Task(s)' => 'タスク',

      'Please fix these errors and try again.' => 'このエラーを修正し、もう一度試してください.',

      '%d Error(s)' => '%d 件のエラー',
      '%d Warning(s)' => '%d 件の警告',
      '%d Auto-Fix(es)' => '%d 件の自動修正',
      '%d Advice(s)' => '%d 件のアドバイス',
      '%d Detail(s)' => '%d 件の詳細',

      '(%d line(s))' => '(%d 行)',

      'COMMIT(S)' => 'コミット',

      '%d line(s)' => '%d 行',
      '%d path(s)' => '%d パス',
      '%d diff(s)' => '%d Diff',

      'added %d commit(s): %s' => 'コミットが追加された: %2$s',

      'removed %d commit(s): %s' => 'コミットが削除された: %2$s',

      'changed %d commit(s)\, added %d: %s; removed %d: %s' => 'コミットが変更された, 追加: %3$s; 削除: %5$s',

      'ATTACHED %d COMMIT(S)' => '添付されたコミット',

      'added %d mock(s): %s' => 'モックが追加された: %2$s',

      'removed %d mock(s): %s' => 'モックが削除された: %2$s',

      'changed %d mock(s)\, added %d: %s; removed %d: %s' => 'モックが変更された, 追加: %3$s; 削除: %5$s',

      'ATTACHED %d MOCK(S)' => '添付されたモック',

      'added %d dependencie(s): %s' => '依存が追加された: %2$s',

      'added %d dependent task(s): %s' => '依存タスクが追加された: %2$s',

      'removed %d dependencie(s): %s' => '依存が削除された: %2$s',

      'removed %d dependent task(s): %s' => '依存タスクが削除された: %2$s',

      'changed %d dependencie(s)\, added %d: %s; removed %d: %s' => '依存が変更された, 追加: %3$s; 削除: %5$s',

      'changed %d dependent task(s)\, added %d: %s; removed %d: %s' => '依存タスクが変更された, 追加: %3$s; 削除: %5$s',

      'DEPENDENT %d TASK(s)' => '依存タスク',

      'DEPENDS ON %d TASK(S)' => '依存しているタスク',

      'DIFFERENTIAL %d REVISION(S)' => 'DIFFERENTIAL リビジョン',

      'added %d revision(s): %s' => 'リビジョンが追加された: %2$s',

      'removed %d revision(s): %s' => 'リビジョンが削除された: %2$s',

      'changed %d revision(s)\, added %d: %s; removed %d: %s' => 'リビジョンが変更された, 追加: %3$s; 削除: %5$s',

      '%s edited revision(s)\, added %d: %s; removed %d: %s.' => 'リビジョンが編集された, 追加: %3$s; 削除: %5$s',

      'There are %d raw fact(s) in storage.' => 'ストレージには、ファクトが %d 件あります.',

      'There are %d aggregate fact(s) in storage.' => 'ストレージには、取得済みのファクトが %d 件あります.',

      '%d Commit(s) Awaiting Audit' => '%d 件のコミットが監査待ち',

      '%d Problem Commit(s)' => '%d 件の問題のあるコミット',

      '%d Review(s) Blocking Others' => '%d 件のレビューが他の作業をブロック',

      '%d Review(s) Need Attention' => '%d 件のレビューに注意が必要',

      '%d Review(s) Waiting on Others' => '%d 件のレビューが他レビュー待ち',

      '%d Flagged Object(s)' => '%d 件の要注意オブジェクト',

      '%d Unbreak Now Task(s)!' => '%d 件の今すぐ直せタスク!',

      '%d Assigned Task(s)' => '%d 件のタスクがアサイン済',

      'Show %d Lint Message(s)' => '%d 件の Lint メッセージを表示',
      'Hide %d Lint Message(s)' => '%d 件の Lint メッセージを非表示',
      'Switch for %d Lint Message(s)' => '%d 件の Lint メッセージにスイッチ',
      '%d Lint Message(s)' => '%d 件の Lint メッセージ',

      'This is a binary file. It is %s byte(s) in length.' => 'バイナリーファイルです. %s バイトの長さです.',

      '%d Action(s) Have No Effect' => 'アクションは、何の変化ももたらしません',

      '%d Action(s) With No Effect' => '空のアクション',

      'Some of your %d action(s) have no effect:' => 'アクションの一つに効力がありません:',

      'Apply remaining %d action(s)?' => '残りのアクションを適用しますか?',

      'Apply %d Other Action(s)' => '残りのアクションを適用',

      'The %d action(s) you are taking have no effect:' => 'アクションに効力がありません:',

      '%s edited post(s)\, added %d: %s; removed %d: %s.' => '%s がポストを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d post(s): %s.' => '%s がポストを追加した: %3$s.',

      '%s removed %d post(s): %s.' => '%s がポストを削除した: %3$s.',

      '%s edited blog(s)\, added %d: %s; removed %d: %s.' => '%s がブログを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d blog(s): %s.' => '%s がブログを追加した: %3$s.',

      '%s removed %d blog(s): %s.' => '%s がブログを削除した: %3$s.',

      '%s edited blogger(s)\, added %d: %s; removed %d: %s.' => '%s がブロガーを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d blogger(s): %s.' => '%s がブロガーを追加した: %3$s.',

      '%s removed %d blogger(s): %s.' => '%s がブロガーを削除した: %3$s.',

      '%s edited member(s)\, added %d: %s; removed %d: %s.' => '%s がメンバーを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d member(s): %s.' => '%s がメンバーを追加した: %3$s.',

      '%s removed %d member(s): %s.' => '%s がメンバーを削除した: %3$s.',

      '%s edited project(s)\, added %d: %s; removed %d: %s.' => '%s がプロジェクトを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d project(s): %s.' => '%s がプロジェクトを追加した: %3$s.',

      '%s removed %d project(s): %s.' => '%s がプロジェクトを削除した: %3$s.',

      '%s changed project(s) of %s, added %d: %s; removed %d: %s' => '%s がプロジェクト %s を編集した, 追加: %4$s; 削除: %6$s',

      '%s added %d project(s) to %s: %s' => '%s が %3$s にプロジェクトを追加した: %4$s',

      '%s removed %d project(s) from %s: %s' => '%s が %3$s からプロジェクトを削除した: %4$s',

      '%s merged %d task(s): %s.' => '%s がタスクをマージした: %3$s.',

      '%s merged %d task(s) %s into %s.' => '%s が %3$s タスクを %4$s にマージした.',

      '%s edited voting user(s)\, added %d: %s; removed %d: %s.' => '%s が投票ユーザを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d voting user(s): %s.' => '%s が投票ユーザを追加した: %3$s.',

      '%s removed %d voting user(s): %s.' => '%s が投票ユーザを削除した: %3$s.',

      '%s added %d blocking task(s): %s.' => '%s がブロックを起こしているタスクを追加した: %3$s.',

      '%s added %d blocked task(s): %s.' => '%s がブロックされているタスクを追加した: %3$s.',

      '%s removed %d blocking task(s): %s.' => '%s がブロックを起こしているタスクを削除した: %3$s.',

      '%s removed %d blocked task(s): %s.' => '%s がブロックされているタスクを削除した: %3$s.',

      '%s edited answer(s)\, added %d: %s; removed %d: %s.' => '%s が回答を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d answer(s): %s.' => '%s が回答を追加した: %3$s.',

      '%s removed %d answer(s): %s.' => '%s が回答を削除した: %3$s.',

      '%s edited question(s)\, added %d: %s; removed %d: %s.' => '%s が質問を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d question(s): %s.' => '%s が質問を追加した: %3$s.',

      '%s removed %d question(s): %s.' => '%s が質問を削除した: %3$s.',

      '%s edited mock(s)\, added %d: %s; removed %d: %s.' => '%s がモックを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d mock(s): %s.' => '%s がモックを追加した: %3$s.',

      '%s removed %d mock(s): %s.' => '%s がモックを削除した: %3$s.',

      '%s edited task(s)\, added %d: %s; removed %d: %s.' => '%s がタスクを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d task(s): %s.' => '%s がタスクを追加した: %3$s.',

      '%s removed %d task(s): %s.' => '%s がタスクを削除した: %3$s.',

      '%s edited file(s)\, added %d: %s; removed %d: %s.' => '%s がファイルを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d file(s): %s.' => '%s がファイルを追加した: %3$s.',

      '%s removed %d file(s): %s.' => '%s がファイルを削除した: %3$s.',

      '%s edited account(s)\, added %d: %s; removed %d: %s.' => '%s がアカウントを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d account(s): %s.' => '%s がアカウントを追加した: %3$s.',

      '%s removed %d account(s): %s.' => '%s がアカウントを削除した: %3$s.',

      '%s edited charge(s)\, added %d: %s; removed %d: %s.' => '%s がチャージを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d charge(s): %s.' => '%s がチャージを追加した: %3$s.',

      '%s removed %d charge(s): %s.' => '%s がチャージを削除した: %3$s.',

      '%s edited purchase(s)\, added %d: %s; removed %d: %s.' => '%s が購入を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d purchase(s): %s.' => '%s が購入を追加した: %3$s.',

      '%s removed %d purchase(s): %s.' => '%s が購入を削除した: %3$s.',

      '%s edited contributor(s)\, added %d: %s; removed %d: %s.' => '%s が貢献者を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d contributor(s): %s.' => '%s が貢献者を追加した: %3$s.',

      '%s removed %d contributor(s): %s.' => '%s が貢献者を削除した: %3$s.',

      '%s edited reviewer(s)\, added %d: %s; removed %d: %s.' => '%s がレビュアーを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d reviewer(s): %s.' => '%s がレビュアーを追加した: %3$s.',

      '%s removed %d reviewer(s): %s.' => '%s がレビュアーを削除した: %3$s.',

      '%s edited object(s)\, added %d: %s; removed %d: %s.' => '%s がオブジェクトを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d object(s): %s.' => '%s がオブジェクトを追加した: %3$s.',

      '%s removed %d object(s): %s.' => '%s がオブジェクトを削除した: %3$s.',

      '%d other(s)' => 'その他 %d 件',

      '%s edited subscriber(s)\, added %d: %s; removed %d: %s.' => '%s が購読者を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d subscriber(s): %s.' => '%s が購読者を追加した: %3$s.',

      '%s removed %d subscriber(s): %s.' => '%s が購読者を削除した: %3$s.',

      '%s edited unsubscriber(s)\, added %d: %s; removed %d: %s.' => '%s が非購読者を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d unsubscriber(s): %s.' => '%s が非購読者を追加した: %3$s.',

      '%s removed %d unsubscriber(s): %s.' => '%s が非購読者を削除した: %3$s.',

      '%s edited participant(s)\, added %d: %s; removed %d: %s.' => '%s が参加者を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d participant(s): %s.' => '%s が参加者を追加した: %3$s.',

      '%s removed %d participant(s): %s.' => '%s が参加者を削除した: %3$s.',

      '%s edited image(s)\, added %d: %s; removed %d: %s.' => '%s がイメージを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d image(s): %s.' => '%s イメージを追加した: %3$s.',

      '%s removed %d image(s): %s.' => '%s イメージを削除した: %3$s.',

      '%d people(s)' => '%d 人',

      '%s Line(s)' => '%s 行',

      'Indexing %d object(s) of type %s.' => '%s タイプの %d 件のオブジェクトをインデックス中です.',

      'Run these %d command(s):' => 'このコマンドを実行して:',

      'Install these %d PHP extension(s):' => 'この PHP 拡張をインストールして:',

      'The current Phabricator configuration has these %d value(s):' => '現状の Phabricator 設定値:',

      'The current MySQL configuration has these %d value(s):' => '現状の MySQL 設定値:',

      'To update these %d value(s)\, run these command(s) from the command line:' =>  'この値を更新するには、以下のコマンドをコマンドラインで実行して:',

      'You can update these %d value(s) here:' => '値は、この場所で更新することができます:',

      'The current PHP configuration has these %d value(s):' => '現状の PHP 設定値:',

      'To update these %d value(s)\, edit your PHP configuration file.' => '%d の値を更新するために、 PHP 設定ファイルを編集してください.',

      'To update these %d value(s)\, edit your PHP configuration file, located here:' => '値を更新するために、以下の場所にある PHP設定ファイルを編集してください:',

      'PHP also loaded these configuration file(s):' => 'PHP はこの設定ファイルも読み込んでいます:',

      'You have %d unresolved setup issue(s)...' => '解決されていない設定上の課題があります...',

      '%s added %d inline comment(s).' => '%s がインラインコメントを追加した.',

      '%d comment(s)' => '%d 件のコメント',
      '%d rejection(s)' => '%d 件の却下',
      '%d update(s)' => '%d 件の更新',

      'This configuration value is defined in these %d configuration source(s): %s.' => '設定値は、以下の設定元で定義されています: %2$s.',

      '%d Open Pull Request(s)' => '%d 件の Pull Request が Open',

      'Stale (%s day(s))' => '非活動 (%s 日)',

      'Old (%s day(s))' => '経過 (%s 日)',

      '%s Commit(s)' => '%s コミット',

      '%s added %d project(s): %s' => '%s がプロジェクトを追加した: %3$s',

      '%s removed %d project(s): %s' => '%s がプロジェクトを削除した: %3$s',

      '%s changed project(s)\, added %d: %s; removed %d: %s' => '%s がプロジェクトを変更した, 追加: %3$s; 削除: %5$s',

      '%s attached %d file(s): %s' => '%s がファイルを添付した: %3$s',

      '%s detached %d file(s): %s' => '%s が添付ファイルを外した: %3$s',

      '%s changed file(s)\, attached %d: %s; detached %d: %s' => '%s がファイルを変更した, 添付: %3$s; 削除: %5$s',

      '%s added %d dependencie(s): %s.' => '%s が依存を追加した: %3$s',

      '%s added %d dependent task(s): %s.' => '%s が依存タスクを追加した: %3$s',

      '%s removed %d dependencie(s): %s.' => '%s が依存を削除した: %3$s.',

      '%s removed %d dependent task(s): %s.' => '%s が依存タスクを削除した: %3$s.',

      '%s added %d revision(s): %s.' => '%s がリビジョンを追加した: %3$s.',

      '%s removed %d revision(s): %s.' => '%s がリビジョンを削除した: %3$s.',

      '%s added %d commit(s): %s.' => '%s がコミットを追加した: %3$s.',

      '%s removed %d commit(s): %s.' => '%s がコミットを削除した: %3$s.',

      '%s edited commit(s)\, added %d: %s; removed %d: %s.' => '%s がコミットを編集した, 追加: %3$s; 削除: %5$s',

      '%s changed project member(s)\, added %d: %s; removed %d: %s' => '%s がプロジェクトメンバを変更した, 追加: %3$s; 削除: %5$s',

      '%s added %d project member(s): %s' => '%s がメンバを追加した: %3$s',

      '%s removed %d project member(s): %s' => '%s がメンバを削除した: %3$s',

      '%d project hashtag(s) are already used: %s' => 'プロジェクトハッシュタグ %2$s は既に使用されています.',

      '%s changed project hashtag(s)\, added %d: %s; removed %d: %s' => '%s がプロジェクトハッシュタグを変更した, 追加: %3$s; 削除: %5$s',

      '%s added %d project hashtag(s): %s' => '%s がハッシュタグを追加した: %3$s',

      '%s removed %d project hashtag(s): %s' => '%s がハッシュタグを削除した: %3$s',

      '%d User(s) Need Approval' => '%d 人のユーザーが承認待ち',

      '%s older changes(s) are hidden.' => '%d 件の古い変更が非表示.',

      '%s, %s line(s)' => '%s, %s 行',

      '%s pushed %d commit(s) to %s.' => '%s がコミットを %3$s に Push した.',

      '%s commit(s)' => '1 件のコミット',

      '%s removed %d JIRA issue(s): %s.' => '%s が JIRA の Issue を削除した: %3$s.',

      '%s added %d JIRA issue(s): %s.' => '%s が JIRA の Issue を追加した: %3$s.',

      '%s added %d required legal document(s): %s.' => '%s が、必須の法的書類を追加した: %3$s.',

      '%s updated JIRA issue(s): added %d %s; removed %d %s.' => '%s が JIRA の Issue を更新した: 追加 %3$s; 削除 %5$s.',

      '%s added %s task(s): %s.' => '%s がタスクを追加した: %3$s.',

      '%s removed %s task(s): %s.' => '%s がタスクを削除した: %3$s.',

      '%s edited %s task(s)\, added %s: %s; removed %s: %s.' => '%s がタスク %4$s を編集した; 削除 %6$s.',

      '%s added %s task(s) to %s: %s.' => '%s がタスクを %3$s に追加した: %4$s.',

      '%s removed %s task(s) from %s: %s.' => '%s がタスクを %3$s から削除した: %4$s.',

      '%s edited %s task(s) for %s, added %s: %s; removed %s: %s.' => '%s がタスク %3$s を編集した, 追加: %5$s; 削除 %7$s.',

      '%s added %s commit(s): %s.' => '%s がコミットを追加した: %3$s.',

      '%s removed %s commit(s): %s.' => '%s がコミットを削除した: %3$s.',

      '%s edited %s commit(s)\, added %s: %s; removed %s: %s.' => '%s edited commits, added %4$s; removed %6$s.',

      '%s added %s commit(s) to %s: %s.' => '%s がコミットを %3$s に追加した: %4$s.',

      '%s removed %s commit(s) from %s: %s.' => '%s がコミットを %3$s から削除した: %4$s.',

      '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' => '%s がコミット %3$s を編集した, 追加: %5$s; 削除 %7$s.',

      '%s added %s revision(s): %s.' => '%s がリビジョンを追加した: %3$s.',

      '%s removed %s revision(s): %s.' => '%s がリビジョンを削除した: %3$s.',

      '%s edited %s revision(s)\, added %s: %s; removed %s: %s.' => '%s がリビジョンを編集した, 追加 %4$s; 削除 %6$s.',

      '%s added %s revision(s) to %s: %s.' => '%s がリビジョンを %3$s に追加した: %4$s.',

      '%s removed %s revision(s) from %s: %s.' => '%s がリビジョンを %3$s から削除した: %4$s.',

      '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' => '%s がリビジョン %3$s を編集した, 追加: %5$s; 削除 %7$s.',

      '%s added %s project(s): %s.' => '%s がプロジェクトを追加した: %3$s.',

      '%s removed %s project(s): %s.' => '%s がプロジェクトを削除した: %3$s.',

      '%s edited %s project(s)\, added %s: %s; removed %s: %s.' => '%s がプロジェクトを編集した, 追加 %4$s; 削除 %6$s.',

      '%s added %s project(s) to %s: %s.' => '%s がプロジェクトを %3$s に追加した: %4$s.',

      '%s removed %s project(s) from %s: %s.' => '%s がプロジェクトを %3$s から削除した: %4$s.',

      '%s edited %s project(s) for %s, added %s: %s; removed %s: %s.' => '%s がプロジェクト %3$s を編集した, 追加: %5$s; 削除 %7$s',

      'Workboard' => 'ワークボード',

    );
  }
}
