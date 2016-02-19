<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __dIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array(
        "twig.path"=>__DIR__."/../views/"
    ));

    $app->get("/", function() use ($app)
    {
        return $app["twig"]->render("form.html.twig");
    });

    $app->get("/results", function() use ($app)
    {
        $new_word_match = new RepeatCounter;
        $string_input = $_GET["string"];
        $word_input = $_GET["word"];
        $counter = $new_word_match->CountRepeats($string_input, $word_input);
        return $app["twig"]->render("results.html.twig", array("result"=>$counter, "word"=>$word_input, "string"=>$string_input));
    });


    return $app;
?>
