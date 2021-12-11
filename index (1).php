<?php

require_once( 'phpinfo.php' );

$sql  = 'SELECT Player, Number, Pos, HT, WT, AGE, EXP, College FROM `nfldata` ';
$data = [];
$result = $conn->query($sql);
	while ( $row = $result->fetch_assoc() ) {
	    
		$data[] = $row;
		
	}

//var_dump( $data );
//die( "\n\nEND Debugging\n" );

?>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <title>Houston Texans</title>
</head>
<h1 class="headlineh1">Houston Texans Analyzer 2021</h1>
<h2 class="headlineh2">Select from the drop down which team you would like to compare from the 2021 season!</h2>

<body>
<div class= "schedule">
    <h2 class="headlineSch">The 2021 Season Schedule</h2>
    <table>
        <tr>
            <th>WK</th>
            <th>DATE</th>
            <th>OPPONENT</th>
            <th>RESULT</th>
            <th>W-L</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Sun, Sep 12</td>
            <td>Jacksonville Jaguars</td>
            <td>W 37-21</td>
            <td>1-0</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Sun, Sep 19 </td>
            <td>Clevelend Browns</td>
            <td>L 31-21</td>
            <td>1-1</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Thu, Sep 23</td>
            <td>Carolina Panthers</td>
            <td>L 24-9</td>
            <td>1-2</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Sun, Oct 3</td>
            <td>Buffalo Bills</td>
            <td>L 40-0</td>
            <td>1-3</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sun, Oct 10</td>
            <td>New England Patriots</td>
            <td>L 25-22</td>
            <td>1-4</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Sun, Oct 17</td>
            <td>Indianapolis Colts</td>
            <td>L 31-3</td>
            <td>1-5</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Sun, Oct 24</td>
            <td>Arizona Cardinals</td>
            <td>L 31-5</td>
            <td>1-6</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Sun, Oct 31</td>
            <td>Los Angeles Rams</td>
            <td>L 38-22</td>
            <td>1-7</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Sun, Nov 7</td>
            <td>Miami Dolphins</td>
            <td>L 17-9</td>
            <td>1-8</td>
        </tr>
        <tr>
            <td>10</td>
            <td>BYE WEEK</td>
            <td>BYE WEEK</td>
            <td>N/A</td>
            <td>1-0</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Sun, Nov 21</td>
            <td>Tennessee Titans</td>
            <td>W 22-13</td>
            <td>2-8</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Sun, Nov 28</td>
            <td>New York Jets</td>
            <td>L 21-14</td>
            <td>2-9</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Sun, Dec 5</td>
            <td>Indianapolis Colts</td>
            <td>L 31-0</td>
            <td>2-10</td>
        </tr>
    </table>
</div>
<div class="dropdown">
    <span style="width: 100%;" class="head-footer-item">
        <button class="dropbtn">Week Selection</button>
    </span>
  <div class="dropdown-content">
    <a href="#">Week 1 - Jaguars</a>
    <a href="#">Week 2 - Browns</a>
    <a href="#">Week 3 - Panthers</a>
    <a href="#">Week 4 - Bills</a>
    <a href="#">Week 5 - Patriots</a>
    <a href="#">Week 6 - Colts</a>
    <a href="#">Week 7 - Cardinals</a>
    <a href="#">Week 8 - Rams</a>
    <a href="#">Week 9 - Dolphins</a>
    <a href="#">Week 10 - BYE WEEk</a>
    <a href="#">Week 11 - Titans</a>
    <a href="#">Week 12 - Jets</a>
    <a href="#">Week 13 - Colts</a>
  </div>
</div>
<table class="mainTable">
    <caption class="mainTeam">Houston Texans</caption>
        <tr>
            <th>Player</th>
            <th>Number</th>
            <th>Pos</th>
            <th>HT</th>
            <th>WT</th>
            <th>AGE</th>
            <th>EXP</th>
            <th>College</th>
        </tr>
      <?php if ( count( $data ) == 0 ) { ?>
		<tr>
			<td colspan="8">No Records Found...</td>
		</tr>
	<?php } else { ?>
		<?php foreach ( $data as $row ) { ?>
			<tr>
				<td><?= htmlspecialchars( $row['Player'] ) ?></td>
				<td><?= htmlspecialchars( $row['Number'] ) ?></td>
				<td><?= htmlspecialchars( $row['Pos'] ) ?></td>
				<td><?= htmlspecialchars( $row['HT'] ) ?></td>
				<td><?= htmlspecialchars( $row['WT'] ) ?></td>
				<td><?= htmlspecialchars( $row['AGE'] ) ?></td>
				<td><?= htmlspecialchars( $row['EXP'] ) ?></td>
				<td><?= htmlspecialchars( $row['College'] ) ?></td>
			</tr>
		<?php } // END: foreach( $data ) ?>
	<?php } // END: ELSE: if ( count( $data ) == 0 ) ?>
    
</table>
<table class="oppTable">
    <caption class="oppTeam">Opponent</caption>
        <tr>
            <th>Player</th>
            <th>Number</th>
            <th>Pos</th>
            <th>HT</th>
            <th>WT</th>
            <th>AGE</th>
            <th>EXP</th>
            <th>College</th>
        </tr>
      <?php if ( count( $data ) == 0 ) { ?>
		<tr>
			<td colspan="8">No Records Found...</td>
		</tr>
	<?php } else { ?>
		<?php foreach ( $data as $row ) { ?>
			<tr>
				<td><?= htmlspecialchars( $row['Player'] ) ?></td>
				<td><?= htmlspecialchars( $row['Number'] ) ?></td>
				<td><?= htmlspecialchars( $row['Pos'] ) ?></td>
				<td><?= htmlspecialchars( $row['HT'] ) ?></td>
				<td><?= htmlspecialchars( $row['WT'] ) ?></td>
				<td><?= htmlspecialchars( $row['AGE'] ) ?></td>
				<td><?= htmlspecialchars( $row['EXP'] ) ?></td>
				<td><?= htmlspecialchars( $row['College'] ) ?></td>
			</tr>
		<?php } // END: foreach( $data ) ?>
	<?php } // END: ELSE: if ( count( $data ) == 0 ) ?>
    
</table>
</body>
</html>