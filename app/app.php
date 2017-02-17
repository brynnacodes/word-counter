<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), ["twig.path" => __DIR__."/../views"]);

    $app->get('/', function() use($app) {

        return $app["twig"]->render("root.html.twig");
    });

    $app->post('/see_count', function() use($app) {
        $new_repeat_counter = new RepeatCounter;
        $input1 = strtolower($_POST['userinput1']);
        $input2 = strtolower($_POST['userinput2']);
        $result = $new_repeat_counter->CountRepeats($input1, $input2);
        $definition = $new_repeat_counter->CheckWord($input2);
        return $app["twig"]->render("see_count.html.twig", ['result' => $result, 'input1' => $input1, 'input2' => $input2, 'definition' =>$definition]);
    });

    return $app;
?>
