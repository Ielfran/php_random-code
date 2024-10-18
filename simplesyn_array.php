<?php
    $juices=array("array","orange","grapes"=>"purple");
    echo "He drank some $juices[0] juice".PHP_EOL;
    echo "He drank some $juices[1] juice".PHP_EOL;
    echo "He drank some $juices[grapes] juice".PHP_EOL;
    class people{
        public $john="John Smith";
        public $jane="Jane Smith";
        public $gagan="Gagan Rai";
        public $smith="Smith";
    }
    $people=new people();
    echo "$people->john drank some $juices[0] juice.".PHP_EOL;
    echo "$people->john then said hello to $people->jane.".PHP_EOL;
    echo "$people->john's wife greeted $people->gagan.".PHP_EOL;
    echo "$people->john greeted the two {$people->smith}s.";
?>
