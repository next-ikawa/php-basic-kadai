<?php
// Foodクラスの定義
class Food {
    // プロパティの定義
    private $name;
    private $price;

    // プロパティに値を代入するコンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }
}

// Animalクラスの定義
class Animal {
    // プロパティの定義
    private $name;
    private $height;
    private $weight;

    // プロパティに値を代入するコンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    public function show_height() {
        echo $this->height . "<br>";
    }
}

// それぞれのクラスを元に任意の引数を渡してインスタンスを作成
$food = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);

// print_r関数を使いそれぞれのインスタンスを出力
echo str_replace("", "", print_r($food, true)) . "<br>";
echo str_replace("", "", print_r($animal, true)) . "<br>";

// それぞれのクラスに作成したメソッドにアクセスしメソッドを実行
$food->show_price();
$animal->show_height();
?>

</body>
</html>

