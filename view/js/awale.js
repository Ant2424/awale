var array = document.getElementById("plateau").rows;
var longueur = array[0].cells.length;

var point1 = 0;
var point2 = 0;
var tour = 0;

function move(arg)
{
  var col = arg[1];
  var lig = arg[0];

  var nb_pion = array[lig].cells[col].innerHTML;


  if ( ( (lig == 0 && tour%2 == 0) || (lig==1 && tour%2==1) ) && nb_pion != 0)
  {
    array[lig].cells[col].innerHTML = 0;
    if( tour%2 == 0)
    {
        var score = document.getElementById("score1");
    }
    else
    {
        var score = document.getElementById("score2");
    }


    for(var i=0; i<nb_pion; i++)
    {
      if( col == 5 && lig == 1)
      {
        lig = 0;
        col++;
      }
      if( col == 0 && lig == 0)
      {
        lig = 1;
        col--;
      }

      if( lig == 0)
      {
        col--;
        if( lig != arg[0] || col != arg[1])
        {
          array[lig].cells[col].innerHTML++;
        }
      }
      else
      {
        col++;
        if( lig != arg[0] || col != arg[1])
        {
          array[lig].cells[col].innerHTML++;
        }
      }

    }

    while(array[lig].cells[col].innerHTML == 2 || array[lig].cells[col].innerHTML == 3)
    {
      if( tour%2 == 0 && lig == 1)
      {
        point1 +=  parseInt(array[lig].cells[col].innerHTML) ;
        score.innerHTML = point1;
        array[lig].cells[col].innerHTML = 0
      }
      else if( tour%2 != 0 && lig == 0)
      {
        point2 +=  parseInt(array[lig].cells[col].innerHTML) ;
        score.innerHTML = '<b>' + point2 + '</b>';
        array[lig].cells[col].innerHTML = 0;
      }
    //  score.innerHTML  = score.innerHTML + array[lig].cells[col].innerHTML;

      if( col == 5 && lig == 1)
      {
        lig = 0;
        col++;
      }
      if( col == 0 && lig == 0)
      {
        lig = 1;
        col--;
      }
      if( lig == 0)
      {
        col++;
      }
      else
      {
        col--;
      }
    }

    tour++;


  if(tour%2==0 && vide(0)==1)
{
  alert('Mouv impossible, au tour du joueur suivant !');
  tour++;
  document.getElementById('tour').innerHTML = tour;

  return 0 ;
}

 if(tour%2==1 && vide(1)==1)
{
  alert('Mouv impossible, au tour du joueur suivant !');
  tour++;
  document.getElementById('tour').innerHTML = tour;

  return 0;
}
 
  }
      document.getElementById('tour').innerHTML = tour;

return 0;
}

function vide(lig)
{
 
  var verif=1;

      for (var i = 0; i < 6 ; i++)
        {

          if (parseInt(array[lig].cells[i].innerHTML)!=0)
          {
              
              verif = 0;
          }
        }
          return verif;

}

function victoire()
{
//  var verifj1 = 0;
  // var verifj2 = 0;
   /* if(j==0)
                verifj1 = 1;
                if (j==1) 
                verifj2 =1;*/
    /*   if (verif==0) 
        {

            var fin = document.createElement('h1');
            fin.innerHTML = "Le joueur 2 a gagne !";
           .... appendChild(fin);
            initialisation();
        }*/

        /*  var resultat;
          if (verifj1==0) resultat=0;
          if (verifj2==0) resultat=1;
          if (verifj1!=0 && verifj2!=0) resultat=-1;
          return resultat;*/

}

function initialisation()
{
    document.getElementById('00').innerHTML = '4';
    document.getElementById('01').innerHTML = '4';
    document.getElementById('02').innerHTML = '4';
    document.getElementById('03').innerHTML = '4';
    document.getElementById('04').innerHTML = '4';
    document.getElementById('05').innerHTML = '4';
    document.getElementById('10').innerHTML = '4';
    document.getElementById('11').innerHTML = '4';
    document.getElementById('12').innerHTML = '4';
    document.getElementById('13').innerHTML = '4';
    document.getElementById('14').innerHTML = '4';
    document.getElementById('15').innerHTML = '4';
    document.getElementById('score1').innerHTML = '0';
    document.getElementById('score2').innerHTML = '0';

}