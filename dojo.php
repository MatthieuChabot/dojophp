<?php


function generateArticle (int $index): string {
    $index++;
  return "<article>
  <h2 class='titreArticle'>Titre $index</h2>
  <img class='imageArticle' src='https://picsum.photos/300/200'>
  <p class='description'>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
      sed do eiusmod tempor incididunt ut labore et dolore magna 
      aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
      ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      Duis aute irure dolor in reprehenderit in voluptate velit 
      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
      occaecat cupidatat non proident, sunt in culpa qui officia 
      deserunt mollit anim id est laborum.
  </p>
  </article>";
}

$_GET['number'];
$userDefinedNumber= $_GET['number'];
if($userDefinedNumber){
    for($i=0;$i<$userDefinedNumber;$i++){
        echo generateArticle($i);
    }
} else{
    $numberOfArticles = 200;
    for($i=0; $i<$numberOfArticles; $i++)
{
    echo generateArticle($i);
}
}



