# Learning PHP 8.3

[PHP 8.3.0 Release Announcement](https://www.php.net/releases/8.3/ja.php)

[PHP 8.2.x から PHP 8.3.x への移行](https://www.php.net/manual/ja/migration83.php)

## 新機能

- [クラス定数の型付け](./src/new-features/typed-class-constants.php)
- [クラス定数への動的なアクセス構文](./src/new-features/fetch-class-constant-dynamically-syntax.php)
- [Override アトリビュート](./src/new-features/override-attribute.php)
- 読み取り専用の修正
    - [読み取り専用プロパティのディープクローン](./src/new-features/readonly-properties-can-be-reinitialized-during-cloning.php)
- [static変数の初期化](./src/new-features/static-variable-initializers.php)

## 新しく追加された関数

- JSON
    - [json_validate()](./src//new-functions/json-validate.php)
- MBString
    - [mb_str_pad()](./src/new-functions/mb-str-pad.php)
- Random
    - [Random\Randomizer::getBytesFromString()](./src/new-functions/random-randomizer-getbytesfromstring.php)
    - [Random\Randomizer::getFloat()](./src/new-functions/random-randomizer-getfloat.php)

## 下位互換性のない変更点

- PHPコア
    - [空の配列に負のインデックスを割り当てる](./src/incompatible/negative-index-to-empty-array.php)
- 標準ライブラリ
    - [range() 関数に対するさまざまな変更](./src/incompatible/range-function.php)

## 推奨されなくなる機能

- マルチバイト文字列
    - [mb_strimwidth() に負の $width を渡すこと](./src/deprecated/mb-strimwidth.php)
