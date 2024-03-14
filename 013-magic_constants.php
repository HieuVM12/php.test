<?php

namespace myArea;

function myValue()
{
    return __NAMESPACE__;
}
?>
<?php

namespace myArea1;

class Fruits2
{
    public function myValue()
    {
        return Fruits2::class;
    }
}
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    class Fruits
    {
        public function myValue()
        {
            return __CLASS__;
        }
    }
    $kiwi = new Fruits();
    echo $kiwi->myValue();
    echo "<br>";
    echo __DIR__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __LINE__;

    class Fruits1
    {
        public function myValue()
        {
            return __METHOD__;
        }
    }
    $kiwi = new Fruits1();
    echo $kiwi->myValue();

    echo "<br>";
    trait message1
    {
        public function msg1()
        {
            echo __TRAIT__;
        }
    }

    class Welcome
    {
        use message1;
    }

    $obj = new Welcome();
    $obj->msg1();

    $kiwi = new Fruits2();
    echo $kiwi->myValue();
    ?>

</body>

</html>