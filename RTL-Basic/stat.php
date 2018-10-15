<?php 
	//$LoadAverage = json_decode(System::load_average(), TRUE);
	$SystemStatus = json_decode(System::System_Status(), TRUE);
	$memory = json_decode(System::memory(), TRUE);
	$network = json_decode(System::network(), TRUE);
	$services = json_decode(System::services(), TRUE);
	$ping = json_decode(System::ping(), TRUE);
	$disk = json_decode(System::disk(), TRUE);
	$cpu  = sys_getloadavg();
	$SystemUpTime=shell_exec('stat -c %Z /proc/');
	$LocalTimeNow =time();	
	$UnixTime = shell_exec("awk '{print $1}' /proc/uptime");
	list($UseTime,$useLessTime)=explode('.', $UnixTime);
	$UseTime=(int)($UseTime);
	$AllowService=array('Web Server','Database Server','SSH');
	?>
<link href="<?php echo URL; ?>public/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

<script src="<?php echo URL; ?>public/js/pie-chart.js"></script>
<script src="<?php echo URL; ?>public/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/morris/morris.js"></script>
<script type="text/javascript">

$( document ).ready(function(){
			// progress bars
			$('#progress1').pieChart({
                barColor: '#f9243f',
                trackColor: '#eaeaea',
                lineCap: 'round',
				size: 120,
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
			$('#progress2').pieChart({
                barColor: '#1ebfae',
                trackColor: '#eaeaea',
                lineCap: 'round',
				size: 120,
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "erfsdf"
            value: 6.8,
	    lineWidth: 43
        }, {
            label: "ddddd",
            value: 7.46,
        }],
        resize: true
    });

//uptime	
    // Unix times per seconds.
    var UnixTime = 3967396;
	var days = 0,
	  hours = 0,
      minutes = 0,
	  seconds = 0;
	// The string we're working with to create the representation
    var str = '';  
	
	// Calculate (and subtract) whole days
	days = Math.floor(UnixTime / 86400);
	UnixTime -= days * 86400;
	
	/* Convert days to years/months/days */
	// Map lengths of `days` to different time periods
	var values = [[' سال', 365], [' ماه', 30], [' روز', 1]];
    
	// Iterate over the values...
	for (var i=0;i<values.length;i++) {
		var amount = Math.floor(days / values[i][1]);

		// ... And find the largest time value that fits into the days
		if (amount >= 1) {
			// If we match, add to the string ('s' is for pluralization)
			str += amount + values[i][0] + (amount > 1 ? ' و '  : '') + ' ';

			// And subtract from the days
			days -= amount * values[i][1];
		}
	}

	if (!str) $(".timeup").addClass("left-to-right");
	else $(".timeup").addClass("right-to-left");

	// Calculate (and subtract) whole hours
	var hours = Math.floor(UnixTime / 3600) % 24;
	UnixTime -= hours * 3600;

	// Calculate (and subtract) whole minutes
	var minutes = Math.floor(UnixTime / 60) % 60;
	UnixTime -= minutes * 60;

	// What's left is seconds
	var seconds = UnixTime % 60;  // in theory the modulus is not required
  
    // If the number is one digit, convert it to two digits
    if (hours   < 10) {hours   = '0'+hours;}
    if (minutes < 10) {minutes = '0'+minutes;}
    if (seconds < 10) {seconds = '0'+seconds;}
	
    // Add hours : minutes : seconds to string if str != 00:00:00
    if ( !(hours == '00' & minutes == '00' & seconds == '00') )
		str += hours + ' : ' + minutes + ' : ' + seconds;
	
	var time = document.getElementsByClassName('timeup');
	time[0].innerHTML = ConvertToPersian(str);

});

function ConvertToPersian(str) {
        var temp = '';
        temp = str.replace(/0/g,"?");
        temp = temp.replace(/1/g,"?");
        temp = temp.replace(/2/g,"?");
        temp = temp.replace(/3/g,"?");
        temp = temp.replace(/4/g,"?");
        temp = temp.replace(/5/g,"?");
        temp = temp.replace(/6/g,"?");
        temp = temp.replace(/7/g,"?");
        temp = temp.replace(/8/g,"?");
        temp = temp.replace(/9/g,"?");
        return temp;
}
</script>


 <!--<div id="sys_status"></div>-->
 


 <!-- CHART & CHAT  SECTION -->
<div id="status">
                <div class="row">
					<div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo Translation::Context('LOAD','AVERAGE');  ?><a href="#" class="icon-refresh"></a>
                            </div>

                            <div class="panel-body">
                               <div class="row">
								<div class="col-lg-6 contain-progress" data-title="<?php echo Translation::Context('monitoring','cpu');  ?>">
									<div id="progress1" class="pie-title-center" data-percent="<?php echo ($cpu[0] / 100); ?>">
										<span class="pie-value"></span>
									</div>
								</div>
								<div class="col-lg-6 contain-progress" data-title="<?php echo Translation::Context('monitoring','memory');  ?>">
									<div id="progress2" class="pie-title-center" data-percent="<?php echo ($memory['percent_used'] / 100); ?>">
										<span class="pie-value" style="color: #1ebfae;"></span>
									</div>
								</div>
								</div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo Translation::Context('monitoring','DiscUsage');  ?><a href="#" class="icon-refresh"></a>
                            </div>

                            <div class="panel-body">
								<div id="morris-donut-chart" class="donut"></div>
                            </div>
                        </div>
                    </div>
                </div>                
				<div class="row">
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo Translation::Context('monitoring','NETWORKUSAGE');  ?><a href="#" class="icon-refresh"></a>
                            </div>
							<div class="panel-body" style="min-height: 300px;">
								<div class="limiter">
								<div class="container-table100">
								<div class="wrap-table100">
								<table class="resp-table" id="dataTables1">
									<thead>
										<tr class="row header">
											<th class="cell"><?php echo Translation::Context('monitoring','interface');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','ip');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','Receive');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','Transmit');  ?></th>
										</tr>
									</thead>
									<tbody>
										<?php  if($network):  ?>
										<?php   foreach ($network as $key => $value): ?>
												<tr class="row">
													<td class="cell" data-title="<?php echo Translation::Context('monitoring','interface');  ?>"><?php echo $value['interface']; ?></td>
													<td class="cell" data-title="<?php echo Translation::Context('monitoring','ip');  ?>"><?php echo $value['ip']; ?></td>
													<td class="cell" data-title="<?php echo Translation::Context('monitoring','Receive');  ?>"><?php echo $value['transmit']; ?></td>
													<td class="cell" data-title="<?php echo Translation::Context('monitoring','Transmit');  ?>"><?php echo $value['receive']; ?></td>
												</tr>
										<?php   endforeach; ?>
										<?php endif; ?>																			
									</tbody>
								</table>
								</div>
								</div>
								</div>
							</div>
                        </div>
                    </div>  
					</div>
					<div class="row">
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo Translation::menu('monitoring_status');  ?><a href="#" class="icon-refresh"></a>
                            </div>
							<div class="panel-body" style="min-height: 300px;">
								<div class="limiter">
								<div class="container-table100">
								<div class="wrap-table100">
								<table class="resp-table" id="dataTables2">
									<thead>
										<tr class="row header">
											<th class="cell"><?php echo Translation::Context('monitoring','HostName');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','UpTime');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','ServerDate');  ?></th>
										</tr>
									</thead>
									<tbody>
										<tr class="row"><td class="cell" data-title="<?php echo Translation::Context('monitoring','HostName');  ?>"><?php echo $SystemStatus['hostname']; ?></td>
										<td class="cell" data-title="<?php echo Translation::Context('monitoring','UpTime');  ?>"><div class="timeup"><?php //echo jdate('Y/n/j-H:i:s',($LocalTimeNow-$SystemUpTime),'','UTC');//echo $SystemStatus['uptime']; ?></div></td>
										<td class="cell" data-title="<?php echo Translation::Context('monitoring','ServerDate');  ?>"><?php echo jdate('Y/n/j-H:i:s', time(), '', 'Asia/Tehran', 'fa');   ?><?php //echo $SystemStatus['server_date']; ?></td></tr>
									</tbody>
								</table>
								</div>
								</div>
								</div>
							</div>                
                        </div>
                    </div>
                </div>
				<div class="row" style="margin:20px auto;">
                      
					<div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <?php echo Translation::Context('monitoring','SERVICESSTATUS');  ?><a href="#" class="icon-refresh"></a>
                            </div>

                            <div class="panel-body">
							
								<table class="table table-striped table-hover">
									<tbody>
										<?php foreach ($services as $key => $value) :?>										
										<?php   
											
											if($value['status']=1){
												$Color_Service  =  'style="background-color: green;"';
												$Status_Service =  Translation::Context('monitoring','online');
											}else{
												$Color_Service  =  null;
												$Status_Service =  Translation::Context('monitoring','offline');
											}									
											
										 ?>
										<tr><td><span class="state" <?php echo $Color_Service;  ?>><?php echo  $Status_Service; ?></span><?php echo $value['name'];  ?></td></tr>
										<?php endforeach;  ?>
									</tbody>
								</table>
							</div>
		
                            </div>
                    </div>                                                        
                     
				</div> </div>
 <?php 
	//$LoadAverage = json_decode(System::load_average(), TRUE);
	$SystemStatus = json_decode(System::System_Status(), TRUE);
	$memory = json_decode(System::memory(), TRUE);
	$network = json_decode(System::network(), TRUE);
	$services = json_decode(System::services(), TRUE);
	$ping = json_decode(System::ping(), TRUE);
	$disk = json_decode(System::disk(), TRUE);
	$cpu  = sys_getloadavg();
	$SystemUpTime=shell_exec('stat -c %Z /proc/');
	$LocalTimeNow =time();	
	$UnixTime = shell_exec("awk '{print $1}' /proc/uptime");
	list($UseTime,$useLessTime)=explode('.', $UnixTime);
	$UseTime=(int)($UseTime);
	$AllowService=array('Web Server','Database Server','SSH');
	?>

<script type="text/javascript">
	
			$( document ).ready(function(){
window.alert("seeee");
// progress bars
			$('#progress1').pieChart({
                barColor: '#f9243f',
                trackColor: '#eaeaea',
                lineCap: 'round',
				size: 120,
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
			$('#progress2').pieChart({
                barColor: '#1ebfae',
                trackColor: '#eaeaea',
                lineCap: 'round',
				size: 120,
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
			Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: <?php echo Translation::Context('monitoring','Used');  ?>
            value: <?php echo $value['used']; ?>,
			lineWidth: 43,
        }, {
            label: <?php echo Translation::Context('monitoring','Free');  ?>,
            value: <?php echo $value['free']; ?>
        }],
        resize: true
    });
		
			//uptime	
    // Unix times per seconds.
    var UnixTime = <?php echo $UseTime;?>;
	var days = 0,
	  hours = 0,
      minutes = 0,
	  seconds = 0;
	// The string we're working with to create the representation
    var str = '';  
	
	// Calculate (and subtract) whole days
	days = Math.floor(UnixTime / 86400);
	UnixTime -= days * 86400;
	
	/* Convert days to years/months/days */
	// Map lengths of `days` to different time periods
	var values = [[' ط³ط§ظ„', 365], [' ظ…ط§ظ‡', 30], [' ط±ظˆط²', 1]];
    
	// Iterate over the values...
	for (var i=0;i<values.length;i++) {
		var amount = Math.floor(days / values[i][1]);

		// ... And find the largest time value that fits into the days
		if (amount >= 1) {
			// If we match, add to the string ('s' is for pluralization)
			str += amount + values[i][0] + (amount > 1 ? ' ظˆ '  : '') + ' ';

			// And subtract from the days
			days -= amount * values[i][1];
		}
	}

	if (!str) $(".timeup").addClass("left-to-right");
	else $(".timeup").addClass("right-to-left");

	// Calculate (and subtract) whole hours
	var hours = Math.floor(UnixTime / 3600) % 24;
	UnixTime -= hours * 3600;

	// Calculate (and subtract) whole minutes
	var minutes = Math.floor(UnixTime / 60) % 60;
	UnixTime -= minutes * 60;

	// What's left is seconds
	var seconds = UnixTime % 60;  // in theory the modulus is not required
  
    // If the number is one digit, convert it to two digits
    if (hours   < 10) {hours   = '0'+hours;}
    if (minutes < 10) {minutes = '0'+minutes;}
    if (seconds < 10) {seconds = '0'+seconds;}
	
    // Add hours : minutes : seconds to string if str != 00:00:00
    if ( !(hours == '00' & minutes == '00' & seconds == '00') )
		str += hours + ' : ' + minutes + ' : ' + seconds;
	
	var time = document.getElementsByClassName('timeup');
	time[0].innerHTML = ConvertToPersian(str);
			
			});

function ConvertToPersian(str) {
        var temp = '';
        temp = str.replace(/0/g,"غ°");
        temp = temp.replace(/1/g,"غ±");
        temp = temp.replace(/2/g,"غ²");
        temp = temp.replace(/3/g,"غ³");
        temp = temp.replace(/4/g,"غ´");
        temp = temp.replace(/5/g,"غµ");
        temp = temp.replace(/6/g,"غ¶");
        temp = temp.replace(/7/g,"غ·");
        temp = temp.replace(/8/g,"غ¸");
        temp = temp.replace(/9/g,"غ¹");
        return temp;
}
			
	</script>


 <!--<div id="sys_status"></div>-->
 


 <!-- CHART & CHAT  SECTION -->
<div id="status">
                <div class="row">
					<div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo Translation::Context('LOAD','AVERAGE');  ?><a href="#" class="icon-refresh"></a>
                            </div>

                            <div class="panel-body">
                               <div class="row">
								<div class="col-lg-6 contain-progress" data-title="<?php echo Translation::Context('monitoring','cpu');  ?>">
									<div id="progress1" class="pie-title-center" data-percent="<?php echo '"' . ($cpu[0] / 100) . '"'; ?>">
										<span class="pie-value"></span>
									</div>
								</div>
								<div class="col-lg-6 contain-progress" data-title="<?php echo Translation::Context('monitoring','memory');  ?>">
									<div id="progress2" class="pie-title-center" data-percent="<?php echo '"' . ($memory['percent_used'] / 100) . '"'; ?>">
										<span class="pie-value" style="color: #1ebfae;"></span>
									</div>
								</div>
								</div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo Translation::Context('monitoring','DiscUsage');  ?><a href="#" class="icon-refresh"></a>
                            </div>

                            <div class="panel-body">
								<div id="morris-donut-chart" class="donut"></div>
                            </div>
                        </div>
                    </div>
                </div>                
				<div class="row">
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo Translation::Context('monitoring','NETWORKUSAGE');  ?><a href="#" class="icon-refresh"></a>
                            </div>
							<div class="panel-body" style="min-height: 300px;">
								<div class="limiter">
								<div class="container-table100">
								<div class="wrap-table100">
								<table class="resp-table" id="dataTables1">
									<thead>
										<tr class="row header">
											<th class="cell"><?php echo Translation::Context('monitoring','interface');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','ip');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','Receive');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','Transmit');  ?></th>
										</tr>
									</thead>
									<tbody>
										<?php  if($network):  ?>
										<?php   foreach ($network as $key => $value): ?>
												<tr class="row">
													<td class="cell" data-title="<?php echo Translation::Context('monitoring','interface');  ?>"><?php echo $value['interface']; ?></td>
													<td class="cell" data-title="<?php echo Translation::Context('monitoring','ip');  ?>"><?php echo $value['ip']; ?></td>
													<td class="cell" data-title="<?php echo Translation::Context('monitoring','Receive');  ?>"><?php echo $value['transmit']; ?></td>
													<td class="cell" data-title="<?php echo Translation::Context('monitoring','Transmit');  ?>"><?php echo $value['receive']; ?></td>
												</tr>
										<?php   endforeach; ?>
										<?php endif; ?>																			
									</tbody>
								</table>
								</div>
								</div>
								</div>
							</div>
                        </div>
                    </div>  
					</div>
					<div class="row">
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo Translation::menu('monitoring_status');  ?><a href="#" class="icon-refresh"></a>
                            </div>
							<div class="panel-body" style="min-height: 300px;">
								<div class="limiter">
								<div class="container-table100">
								<div class="wrap-table100">
								<table class="resp-table" id="dataTables2">
									<thead>
										<tr class="row header">
											<th class="cell"><?php echo Translation::Context('monitoring','HostName');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','UpTime');  ?></th>
											<th class="cell"><?php echo Translation::Context('monitoring','ServerDate');  ?></th>
										</tr>
									</thead>
									<tbody>
										<tr class="row"><td class="cell" data-title="<?php echo Translation::Context('monitoring','HostName');  ?>"><?php echo $SystemStatus['hostname']; ?></td>
										<td class="cell" data-title="<?php echo Translation::Context('monitoring','UpTime');  ?>"><div class="timeup"><?php //echo jdate('Y/n/j-H:i:s',($LocalTimeNow-$SystemUpTime),'','UTC');//echo $SystemStatus['uptime']; ?></div></td>
										<td class="cell" data-title="<?php echo Translation::Context('monitoring','ServerDate');  ?>"><?php echo jdate('Y/n/j-H:i:s', time(), '', 'Asia/Tehran', 'fa');   ?><?php //echo $SystemStatus['server_date']; ?></td></tr>
									</tbody>
								</table>
								</div>
								</div>
								</div>
							</div>                
                        </div>
                    </div>
                </div>
				<div class="row" style="margin:20px auto;">
                      
					<div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <?php echo Translation::Context('monitoring','SERVICESSTATUS');  ?><a href="#" class="icon-refresh"></a>
                            </div>

                            <div class="panel-body">
							
								<table class="table table-striped table-hover">
									<tbody>
										<?php foreach ($services as $key => $value) :?>										
										<?php   
											
											if($value['status']=1){
												$Color_Service  =  'style="background-color: green;"';
												$Status_Service =  Translation::Context('monitoring','online');
											}else{
												$Color_Service  =  null;
												$Status_Service =  Translation::Context('monitoring','offline');
											}									
											
										 ?>
										<tr><td><span class="state" <?php echo $Color_Service;  ?>><?php echo  $Status_Service; ?></span><?php echo $value['name'];  ?></td></tr>
										<?php endforeach;  ?>
									</tbody>
								</table>
							</div>
		
                            </div>
                    </div>                                                        
                     
				</div> </div>
 