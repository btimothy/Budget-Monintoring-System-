<?php

 include('include/mainheader.php');
 include('config.php');
 $fy ="";
 $approvedAmount="";

 $sql= "SELECT FinancialYear,approvedAmount from financial_year";
 $rsult =mysqli_query($db,$sql);
 while ($row = mysqli_fetch_array($rsult)) {
 	$fy=$approvedAmount.'"'.$row['FinancialYear'].'",';
 	$$approvedAmount=$fy.'"'.$row['approvedAmount'].'",';
 }
 $fy=trim($fy,",");
 $approvedAmount=trim($approvedAmount,",");
 

?>
<style type="text/css">
	body{
		font-family: Arial;
		margin: 120px 100px 10px 100px;
		padding: 0;
		color: white;
		text-align: center;
		background-color: #555652;
}
       .container{
       	color: #E8E9EB;
       	background: #222;
       	border: #555652 1PX solid;
       	padding: 10px;

       }



</style>

<body>
	<div class="container">
		 <h1> graph bar testing</h1>
		 <canvas id="chart" style="width: 100px; height: 60px; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>
		 <script >
	var ctx =document.getElementById("chart").getContext('2d')
	var mychart = new Chart(ctx,{
		type:'line',
		data: {
			labels:[2016/2017,2017/2018,2018/2019],
			datasets:
			[{
				labels:'FinancialYear',
				data:[<?php echo $fy; ?>],
				backgroundColor:'transparent',
				borderColor: rgba('255,99,132'),
				borderWidth:3
			},
			{
				labels:'ApprovedAmount',
				data:[<?php echo $approvedAmount; ?>],
				backgroundColor:'transparent',
				borderColor: rgba('255,99,132'),
				borderWidth:3
			}]
		

	},
	{
		option:{
			scales:{scales:{yAxes:[{beginAtZero:false}],xAxes:[{autoskip:true,maxTicketslimit:20}]}},
			tooltips:{mode:'index'},
			legend:{display:true,position:'top',labels:{fontColor:'rgb(255,255,255)',fontSize:16}}
		}
	});

</script>
</body>