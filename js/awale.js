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
        score.innerHTML = point2;
        array[lig].cells[col].innerHTML = 0
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
  }
  else
   {

  }


}
