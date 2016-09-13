<?php
 require_once __DIR__."/../vendor/autoload.php";
 require_once __DIR__."/../src/CoinCombination.php";
 date_default_timezone_set('America/Los_Angeles');

 $app = new Silex\Application();

 $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
  ));
 $app->get("/", function() use ($app){
   return $app['twig']->render('home.html.twig');
 });

 $app->post('results', function() use($app) {
   $input = $_POST['inputNum'];
   $newCoinCombination = new CoinCombination;
   $newCoinCombination->countChange($input);
   return $app['twig']->render('results.html.twig', array('output'=>$newCoinCombination));
 });
return $app;
?>
