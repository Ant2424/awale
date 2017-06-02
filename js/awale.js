var array = document.getElementById("plateau").rows;
var longueur = array[0].cells.length;


function move(arg)
{
  var col = arg[1];
  var lig = arg[0];

  var nb_pion = array[lig].cells[col].innerHTML;
  array[lig].cells[col].innerHTML = 0;

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
      array[lig].cells[col].innerHTML++;
    }
    else
    {
      col++;
      array[lig].cells[col].innerHTML++;
    }
  }
}
