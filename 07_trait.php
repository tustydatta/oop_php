<?php

trait java{
    public function javaCoder(){
        return "I love JAVA<br/>";
    }
}

trait php{
    public function phpCoder(){
        return "I love PHP<br/>";
    }
}
trait JavaPhp{
    use java, php;
}
class CoderOne{
    use java, php;
}
class CoderTwo{
    use java;
}
class CoderThree{
    use JavaPhp;
}
class CoderFour{
    use java;
    public function javaCoder(){
        return "I love java and php<br/>";
    }
}

$c1 = new CoderOne;
echo $c1->javaCoder();
echo $c1->phpCoder();
$c2 = new CoderTwo;
echo $c2->javaCoder();
$c3 = new CoderThree;
echo $c3->javaCoder();
echo $c3->phpCoder();
$c4 = new CoderFour;
echo $c4->javaCoder();

?>