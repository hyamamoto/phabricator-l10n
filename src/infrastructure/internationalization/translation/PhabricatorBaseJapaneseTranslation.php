<?php

abstract class PhabricatorBaseJapaneseTranslation extends PhabricatorTranslation {

  final public function getLanguage() {
    return 'ja';
  }

  public function getTranslations() {
    return array(

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

      'changed %d commit(s), added %d: %s; removed %d: %s' => 'コミットが変更された, 追加: %3$s; 削除: %5$s',

      'ATTACHED %d COMMIT(S)' => '添付されたコミット',

      'added %d mock(s): %s' => 'モックが追加された: %2$s',

      'removed %d mock(s): %s' => 'モックが削除された: %2$s',

      'changed %d mock(s), added %d: %s; removed %d: %s' => 'モックが変更された, 追加: %3$s; 削除: %5$s',

      'ATTACHED %d MOCK(S)' => '添付されたモック',

      'added %d dependencie(s): %s' => '依存が追加された: %2$s',

      'added %d dependent task(s): %s' => '依存タスクが追加された: %2$s',

      'removed %d dependencie(s): %s' => '依存が削除された: %2$s',

      'removed %d dependent task(s): %s' => '依存タスクが削除された: %2$s',

      'changed %d dependencie(s), added %d: %s; removed %d: %s' => '依存が変更された, 追加: %3$s; 削除: %5$s',

      'changed %d dependent task(s), added %d: %s; removed %d: %s' => '依存タスクが変更された, 追加: %3$s; 削除: %5$s',

      'DEPENDENT %d TASK(s)' => '依存タスク',

      'DEPENDS ON %d TASK(S)' => '依存しているタスク',

      'DIFFERENTIAL %d REVISION(S)' => 'DIFFERENTIAL リビジョン',

      'added %d revision(s): %s' => 'リビジョンが追加された: %2$s',

      'removed %d revision(s): %s' => 'リビジョンが削除された: %2$s',

      'changed %d revision(s), added %d: %s; removed %d: %s' => 'リビジョンが変更された, 追加: %3$s; 削除: %5$s',

      '%s edited revision(s), added %d: %s; removed %d: %s.' => 'リビジョンが編集された, 追加: %3$s; 削除: %5$s',

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

      '%s edited post(s), added %d: %s; removed %d: %s.' => '%s がポストを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d post(s): %s.' => '%s がポストを追加した: %3$s.',

      '%s removed %d post(s): %s.' => '%s がポストを削除した: %3$s.',

      '%s edited blog(s), added %d: %s; removed %d: %s.' => '%s がブログを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d blog(s): %s.' => '%s がブログを追加した: %3$s.',

      '%s removed %d blog(s): %s.' => '%s がブログを削除した: %3$s.',

      '%s edited blogger(s), added %d: %s; removed %d: %s.' => '%s がブロガーを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d blogger(s): %s.' => '%s がブロガーを追加した: %3$s.',

      '%s removed %d blogger(s): %s.' => '%s がブロガーを削除した: %3$s.',

      '%s edited member(s), added %d: %s; removed %d: %s.' => '%s がメンバーを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d member(s): %s.' => '%s がメンバーを追加した: %3$s.',

      '%s removed %d member(s): %s.' => '%s がメンバーを削除した: %3$s.',

      '%s edited project(s), added %d: %s; removed %d: %s.' => '%s がプロジェクトを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d project(s): %s.' => '%s がプロジェクトを追加した: %3$s.',

      '%s removed %d project(s): %s.' => '%s がプロジェクトを削除した: %3$s.',

      '%s changed project(s) of %s, added %d: %s; removed %d: %s' => '%s がプロジェクト %s を編集した, 追加: %4$s; 削除: %6$s',

      '%s added %d project(s) to %s: %s' => '%s が %3$s にプロジェクトを追加した: %4$s',

      '%s removed %d project(s) from %s: %s' => '%s が %3$s からプロジェクトを削除した: %4$s',

      '%s merged %d task(s): %s.' => '%s がタスクをマージした: %3$s.',

      '%s merged %d task(s) %s into %s.' => '%s が %3$s タスクを %4$s にマージした.',

      '%s edited voting user(s), added %d: %s; removed %d: %s.' => '%s が投票ユーザを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d voting user(s): %s.' => '%s が投票ユーザを追加した: %3$s.',

      '%s removed %d voting user(s): %s.' => '%s が投票ユーザを削除した: %3$s.',

      '%s added %d blocking task(s): %s.' => '%s がブロックを起こしているタスクを追加した: %3$s.',

      '%s added %d blocked task(s): %s.' => '%s がブロックされているタスクを追加した: %3$s.',

      '%s removed %d blocking task(s): %s.' => '%s がブロックを起こしているタスクを削除した: %3$s.',

      '%s removed %d blocked task(s): %s.' => '%s がブロックされているタスクを削除した: %3$s.',

      '%s edited answer(s), added %d: %s; removed %d: %s.' => '%s が解答を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d answer(s): %s.' => '%s が解答を追加した: %3$s.',

      '%s removed %d answer(s): %s.' => '%s が解答を削除した: %3$s.',

      '%s edited question(s), added %d: %s; removed %d: %s.' => '%s が質問を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d question(s): %s.' => '%s が質問を追加した: %3$s.',

      '%s removed %d question(s): %s.' => '%s が質問を削除した: %3$s.',

      '%s edited mock(s), added %d: %s; removed %d: %s.' => '%s がモックを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d mock(s): %s.' => '%s がモックを追加した: %3$s.',

      '%s removed %d mock(s): %s.' => '%s がモックを削除した: %3$s.',

      '%s edited task(s), added %d: %s; removed %d: %s.' => '%s がタスクを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d task(s): %s.' => '%s がタスクを追加した: %3$s.',

      '%s removed %d task(s): %s.' => '%s がタスクを削除した: %3$s.',

      '%s edited file(s), added %d: %s; removed %d: %s.' => '%s がファイルを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d file(s): %s.' => '%s がファイルを追加した: %3$s.',

      '%s removed %d file(s): %s.' => '%s がファイルを削除した: %3$s.',

      '%s edited account(s), added %d: %s; removed %d: %s.' => '%s がアカウントを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d account(s): %s.' => '%s がアカウントを追加した: %3$s.',

      '%s removed %d account(s): %s.' => '%s がアカウントを削除した: %3$s.',

      '%s edited charge(s), added %d: %s; removed %d: %s.' => '%s がチャージを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d charge(s): %s.' => '%s がチャージを追加した: %3$s.',

      '%s removed %d charge(s): %s.' => '%s がチャージを削除した: %3$s.',

      '%s edited purchase(s), added %d: %s; removed %d: %s.' => '%s が購入を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d purchase(s): %s.' => '%s が購入を追加した: %3$s.',

      '%s removed %d purchase(s): %s.' => '%s が購入を削除した: %3$s.',

      '%s edited contributor(s), added %d: %s; removed %d: %s.' => '%s が貢献者を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d contributor(s): %s.' => '%s が貢献者を追加した: %3$s.',

      '%s removed %d contributor(s): %s.' => '%s が貢献者を削除した: %3$s.',

      '%s edited reviewer(s), added %d: %s; removed %d: %s.' => '%s がレビュアーを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d reviewer(s): %s.' => '%s がレビュアーを追加した: %3$s.',

      '%s removed %d reviewer(s): %s.' => '%s がレビュアーを削除した: %3$s.',

      '%s edited object(s), added %d: %s; removed %d: %s.' => '%s がオブジェクトを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d object(s): %s.' => '%s がオブジェクトを追加した: %3$s.',

      '%s removed %d object(s): %s.' => '%s がオブジェクトを削除した: %3$s.',

      '%d other(s)' => 'その他 %d 件',

      '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s が購読者を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d subscriber(s): %s.' => '%s が購読者を追加した: %3$s.',

      '%s removed %d subscriber(s): %s.' => '%s が購読者を削除した: %3$s.',

      '%s edited unsubscriber(s), added %d: %s; removed %d: %s.' => '%s が非購読者を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d unsubscriber(s): %s.' => '%s が非購読者を追加した: %3$s.',

      '%s removed %d unsubscriber(s): %s.' => '%s が非購読者を削除した: %3$s.',

      '%s edited participant(s), added %d: %s; removed %d: %s.' => '%s が参加者を編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d participant(s): %s.' => '%s が参加者を追加した: %3$s.',

      '%s removed %d participant(s): %s.' => '%s が参加者を削除した: %3$s.',

      '%s edited image(s), added %d: %s; removed %d: %s.' => '%s がイメージを編集した, 追加: %3$s; 削除: %5$s',

      '%s added %d image(s): %s.' => '%s イメージを追加した: %3$s.',

      '%s removed %d image(s): %s.' => '%s イメージを削除した: %3$s.',

      '%d people(s)' => '%d 人',

      '%s Line(s)' => '%s 行',

      'Indexing %d object(s) of type %s.' => '%s タイプの %d 件のオブジェクトをインデックス中です.',

      'Run these %d command(s):' => 'このコマンドを実行して:',

      'Install these %d PHP extension(s):' => 'この PHP 拡張をインストールして:',

      'The current Phabricator configuration has these %d value(s):' => '現状の Phabricator 設定値:',

      'The current MySQL configuration has these %d value(s):' => '現状の MySQL 設定値:',

      'To update these %d value(s), run these command(s) from the command line:' => 'この値を更新するには、以下のコマンドをコマンドラインで実行して:',

      'You can update these %d value(s) here:' => '値は、この場所で更新することができます:',

      'The current PHP configuration has these %d value(s):' => '現状の PHP 設定値:',

      'To update these %d value(s), edit your PHP configuration file.' => '%d の値を更新するために、 PHP 設定ファイルを編集してください.',

      'To update these %d value(s), edit your PHP configuration file, located here:' => '値を更新するために、以下の場所にある PHP設定ファイルを編集してください:',

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

      '%s changed project(s), added %d: %s; removed %d: %s' => '%s がプロジェクトを変更した, 追加: %3$s; 削除: %5$s',

      '%s attached %d file(s): %s' => '%s がファイルを添付した: %3$s',

      '%s detached %d file(s): %s' => '%s が添付ファイルを外した: %3$s',

      '%s changed file(s), attached %d: %s; detached %d: %s' => '%s がファイルを変更した, 添付: %3$s; 削除: %5$s',

      '%s added %d dependencie(s): %s.' => '%s が依存を追加した: %3$s',

      '%s added %d dependent task(s): %s.' => '%s が依存タスクを追加した: %3$s',

      '%s removed %d dependencie(s): %s.' => '%s が依存を削除した: %3$s.',

      '%s removed %d dependent task(s): %s.' => '%s が依存タスクを削除した: %3$s.',

      '%s added %d revision(s): %s.' => '%s がリビジョンを追加した: %3$s.',

      '%s removed %d revision(s): %s.' => '%s がリビジョンを削除した: %3$s.',

      '%s added %d commit(s): %s.' => '%s がコミットを追加した: %3$s.',

      '%s removed %d commit(s): %s.' => '%s がコミットを削除した: %3$s.',

      '%s edited commit(s), added %d: %s; removed %d: %s.' => '%s がコミットを編集した, 追加: %3$s; 削除: %5$s',

      '%s changed project member(s), added %d: %s; removed %d: %s' => '%s がプロジェクトメンバを変更した, 追加: %3$s; 削除: %5$s',

      '%s added %d project member(s): %s' => '%s がメンバを追加した: %3$s',

      '%s removed %d project member(s): %s' => '%s がメンバを削除した: %3$s',

      '%d project hashtag(s) are already used: %s' => 'プロジェクトハッシュタグ %2$s は既に使用されています.',

      '%s changed project hashtag(s), added %d: %s; removed %d: %s' => '%s がプロジェクトハッシュタグを変更した, 追加: %3$s; 削除: %5$s',

      '%s added %d project hashtag(s): %s' => '%s がハッシュタグを追加した: %3$s',

      '%s removed %d project hashtag(s): %s' => '%s がハッシュタグを削除した: %3$s',

      '%d User(s) Need Approval' => '%d 人のユーザーが承認待ち',

      '%s older changes(s) are hidden.' => '%d 件の古い変更が非表示.',

      '%s, %s line(s)' => '%s, %s 行',

      '%s pushed %d commit(s) to %s.' => '%s がコミットを %3$s にプッシュした.',

      '%s commit(s)' => '1 件のコミット',

      '%s removed %d JIRA issue(s): %s.' => '%s が JIRA の Issue を削除した: %3$s.',

      '%s added %d JIRA issue(s): %s.' => '%s が JIRA の Issue を追加した: %3$s.',

      '%s added %d required legal document(s): %s.' => '%s が、必須の法的書類を追加した: %3$s.',

      '%s updated JIRA issue(s): added %d %s; removed %d %s.' => '%s が JIRA の Issue を更新した: 追加 %3$s; 削除 %5$s.',

      '%s added %s task(s): %s.' => '%s がタスクを追加した: %3$s.',

      '%s removed %s task(s): %s.' => '%s がタスクを削除した: %3$s.',

      '%s edited %s task(s), added %s: %s; removed %s: %s.' => '%s がタスク %4$s を編集した; 削除 %6$s.',

      '%s added %s task(s) to %s: %s.' => '%s がタスクを %3$s に追加した: %4$s.',

      '%s removed %s task(s) from %s: %s.' => '%s がタスクを %3$s から削除した: %4$s.',

      '%s edited %s task(s) for %s, added %s: %s; removed %s: %s.' => '%s がタスク %3$s を編集した, 追加: %5$s; 削除 %7$s.',

      '%s added %s commit(s): %s.' => '%s がコミットを追加した: %3$s.',

      '%s removed %s commit(s): %s.' => '%s がコミットを削除した: %3$s.',

      '%s edited %s commit(s), added %s: %s; removed %s: %s.' => '%s edited commits, added %4$s; removed %6$s.',

      '%s added %s commit(s) to %s: %s.' => '%s がコミットを %3$s に追加した: %4$s.',

      '%s removed %s commit(s) from %s: %s.' => '%s がコミットを %3$s から削除した: %4$s.',

      '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' => '%s がコミット %3$s を編集した, 追加: %5$s; 削除 %7$s.',

      '%s added %s revision(s): %s.' => '%s がリビジョンを追加した: %3$s.',

      '%s removed %s revision(s): %s.' => '%s がリビジョンを削除した: %3$s.',

      '%s edited %s revision(s), added %s: %s; removed %s: %s.' => '%s がリビジョンを編集した, 追加 %4$s; 削除 %6$s.',

      '%s added %s revision(s) to %s: %s.' => '%s がリビジョンを %3$s に追加した: %4$s.',

      '%s removed %s revision(s) from %s: %s.' => '%s がリビジョンを %3$s から削除した: %4$s.',

      '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' => '%s がリビジョン %3$s を編集した, 追加: %5$s; 削除 %7$s.',

      '%s added %s project(s): %s.' => '%s がプロジェクトを追加した: %3$s.',

      '%s removed %s project(s): %s.' => '%s がプロジェクトを削除した: %3$s.',

      '%s edited %s project(s), added %s: %s; removed %s: %s.' => '%s がプロジェクトを編集した, 追加 %4$s; 削除 %6$s.',

      '%s added %s project(s) to %s: %s.' => '%s がプロジェクトを %3$s に追加した: %4$s.',

      '%s removed %s project(s) from %s: %s.' => '%s がプロジェクトを %3$s から削除した: %4$s.',

      '%s edited %s project(s) for %s, added %s: %s; removed %s: %s.' => '%s がプロジェクト %3$s を編集した, 追加: %5$s; 削除 %7$s',

    );
  }
}