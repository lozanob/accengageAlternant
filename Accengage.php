<?php
/**
 * Created by PhpStorm.
 * User: fernandol
 * Date: 06/08/2018
 * Time: 15:15
 */


/********************************************************* Question 1 ***************************************************************/

/**
 * Returns ordered given $array ascending or descending
 *
 * @param $array
 * @param string $ascOrDesc
 * @return mixed
 */
$array = array(7,6,40,4,6);

function order( $array , $ascOrDesc = 'asc' )
{
    // suprimmer les spaces
    trim($ascOrDesc);

    if($ascOrDesc == 'asc'){
        asort($array);
    }else{
        arsort($array);
    }
    return $array;
}



echo 'Test :: ';
echo '<pre>';
print_r( order($array , $ascOrDesc = 'desc') );
echo '</pre>';





/********************************************************* Question 2***************************************************************/

/**
 * Returns odd or even number from given $array
 *
 * @param $array
 * @param string $oddOrEven
 * @return mixed
 */


$array=array(2,8,7,3,9,4,7,6);

	function oddOrEven( $array , $oddOrEven='pair' ) {
        trim($oddOrEven);
        $arrayImp =array();
        $arrayPair = array();

        foreach($array as $key => $val){
            if ($val%2 == 1){
                $arrayImp[] = $val;
            }else{
                $arrayPair[]=$val;
            }
        }

        return ($oddOrEven == 'pair') ? $arrayPair:$arrayImp;
    }


echo '<pre>';
print_r(oddOrEven($array ,$oddOrEven='pair'));
echo '</pre>';


/****************************************************** Question 3 ******************************************************************/

/**
 *  Fix this SQL sentences, this should return number of books by Author
 */

/*
SELECT a.authorId, a.name, count(b.bookId),
FROM books b
INNER JOIN author a USING authorId
*/

/**
 * Solution
 * Dans la requete sql actuelle , on fait un count de la table book et ce qui nous demande c'est sur la table author .
 * Donc , on fait le count sur tous les ids de la table auteur qui sont reliee avec la table book .
 */
/*
SELECT  a.authorId, a.name , count (a.bookId),
 FROM books b
 INNER JOIN auteur a auteur auteur
*/



/***************************************************** Question 4 ******************************************************************/

/*
array const=[ 1 , 2 , 3 ];
const  total  =  0 ;
tableau.pourChaque (( nombre ) => {
    total + = nombre;
});
console.log (total);

*/

// Dans la premier ligne ,  on a un  error . l'array est declare comment un const,
// Dans la boucle , on utilise la var total qui est declare comment const
// un const ne peut pas etre modifie sa valeur .



/******************************************************** Question 5 ****************************************************************/


// Write a regexp that allow capturing all the line finishing by a . or a -
$var1="sjfdlkjldgfsqsdssdfl";
$test = preg_match("/[.-]$/",$var1);
echo $test ;





