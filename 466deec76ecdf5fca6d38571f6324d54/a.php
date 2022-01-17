<?php


function makeJsonDoc($num) {
  $newnum=str_pad($num,4,"0",STR_PAD_LEFT);  

  // $doc = '{"attributes": [],"name": "YAYAU DAO#' . $newnum . '","description": "YAYAUDAO is a communication project that aims to revolutionize the way how fans and popular stars interact.\tYAYAUDAO establishes communication for all collaborators.We started from a sticker pack, but more excitement will happen. \tOur core values are caring, expression and infinity.","image": "https://cloudflare-ipfs.com/ipfs/bafybeicjctq6eyfxkuud72z5m2lbon7mbkknkytq24rqddyqbe6bsw2tvq/metadata/'. $num.'.json"}';

    // direct to cover
    $doc = '{"attributes": [],"name": "YAYAU DAO#' . $newnum . '","description": "YAYAUDAO is a communication project that aims to revolutionize the way how fans and popular stars interact.\tYAYAUDAO establishes communication for all collaborators.We started from a sticker pack, but more excitement will happen. \tOur core values are caring, expression and infinity.","image": "https://arweave.net/8HgUNGhUGy5CnT8gAQgr1nlKfjmNRY9ljCKw6Veom-0"}';


  $myfile = fopen($num . ".json", "w") or die("Unable to open file!");
  fwrite($myfile, $doc);
  fclose($myfile);

}


function make() {
  $i = 1;
  while($i < 2) {
    makeJsonDoc($i);
    $i++;
  }
}
make() ;



?>

//https://arweave.net/8HgUNGhUGy5CnT8gAQgr1nlKfjmNRY9ljCKw6Veom-0
// 30000000000000000