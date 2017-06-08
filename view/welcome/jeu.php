<!--   BODY   -->
<body onunload="<?php session_destroy(); ?>">

<nav class="blue-grey lighten-1">
  <div class="nav-wrapper">

    <a href="index.php?action=welcome" class="brand-logo center"><i class="large material-icons">home</i> </a>

  </div>
</nav>

<div class="row">
	<div class="col s12">
		<div class="card blue-grey lighten-2">
			<div class="card-content white-text">
				<span class="card-title center-align"> Bienvunue  <?php echo $_SESSION['pseudo']; ?></span>

				<div class="divider"></div>

				<div class="row">
					<div class="col s4 center-align"><a class="waves-effect waves-teal btn-flat btn-large white-text"><h5>Start</h5></a></div>
					<div class="col s4 center-align"><a class="waves-effect waves-teal btn-flat btn-large white-text"><h5>Stop</h5></a></div>
					<div class="col s4 center-align"><a class="waves-effect waves-teal btn-flat btn-large white-text"><h5>Refresh</h5></a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col s12">

		<div class="col s6 offset-s3 card blue-grey lighten-3">
			<div class="card-content white-text">
				<span class="card-title center-align"> Score Joueur 1 </span>
			    <h4 class="center-align" id="score1"><b>0</b></ph4>
			</div>
		</div>

	    <div class="container row" id="tableau">
	      <table  class="centered" id="plateau">
	        <tr id="tr1">
	          <td id="00" class="blocj1" onclick="move('00');">4</td>
	          <td id="01" class="blocj1" onclick="move('01');">4</td>
	          <td id="02" class="blocj1" onclick="move('02');">4</td>
	          <td id="03" class="blocj1" onclick="move('03');">4</td>
	          <td id="04" class="blocj1" onclick="move('04');">4</td>
	          <td id="05" class="blocj1" onclick="move('05');">4</td>
	        </tr>
	        <tr id="tr2">
	          <td id="10" class="blocj2" onclick="move('10');">4</td>
	          <td id="11" class="blocj2" onclick="move('11');">4</td>
	          <td id="12" class="blocj2" onclick="move('12');">4</td>
	          <td id="13" class="blocj2" onclick="move('13');">4</td>
	          <td id="14" class="blocj2" onclick="move('14');">4</td>
	          <td id="15" class="blocj2" onclick="move('15');">4</td>
	        </tr>
	      </table>
	    </div>

		<div class="col s6 offset-s3 card blue-grey lighten-3">
			<div class="card-content white-text">
			    <h4 class="center-align" id="score2"><b>0</b></ph4>
				<span class="card-title center-align"> Score Joueur 2 </span>
			</div>
		</div>

		<div class="col s6 offset-s3 card blue-grey">
			<div class="card-content white-text">
				<span class="card-title center-align"> Nombre de tour passé </span>
			    <h4 class="center-align" id="tour"><b>0</b></ph4>
			</div>
		</div>

	</div>
</div>
