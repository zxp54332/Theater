<link href="source/css.css" rel="stylesheet" type="text/css">
<script src="source/jquery-1.7.2.min.js"></script>
<script src="js.js"></script>
<?
	include"source/sql.php";
	if($_GET[q]==1)		//影片
	{
		$a1=$mr($mq("select * from movie where _id = $_GET[video]"),0,"_video");
		?>
		<iframe src="<?=$a1?>" style="width:100%; min-height:500px;" frameborder="0" allowfullscreen></iframe>
		<?
	}
	else if($_GET[q]==2)
	{
		$a2=$mq("select * from movie where _id = $_GET[inform]");
		while($aa2=$mfa($a2))
		{
			?>
            <center><img src="pic/<?=$aa2[_img]?>" style=" height:300px;"></center>
			<fieldset>
            <legend><strong><em><font size="+3"><?=$aa2[_name]?></font></em></strong></legend>
            導演:<?=$aa2[_director]?><br>
            演員:<?=$aa2[_actor]?><br>
            類型:<?=$aa2[_genric]?><br>
            發行日期:<?=date("Y/m/d",$aa2[_releasetime])?><br>
			發行公司:<?=$aa2[_release_company]?><br>
            語言:<?=$aa2[_language]?><br>
            級數:<?=$aa2[_series]?><br>
            </fieldset>
			<?
		}
	}
	else if($_GET[q]==3)
	{
		?>
        <center>
            <div style="width:100%; height:80px; font-size:18px;" align="center">
                <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">選擇場次</font></div>
                <div style="width:2.5%; height:100%; float:left;">></div>
                <div style="width:18%; height:100%; float:left;">選擇座位</div>
                <div style="width:2.5%; height:100%; float:left;">></div>
                <div style="width:18%; height:100%; float:left;">確認訂單</div>
                <div style="width:2.5%; height:100%; float:left;">></div>
                <div style="width:18%; height:100%; float:left;">填寫資料</div>
                <div style="width:2.5%; height:100%; float:left;">></div>
                <div style="width:18%; height:100%; float:left;">完成購票</div>
            </div>
            <input type="hidden" id="_book" value="<?=$_GET[book]?>" />
            <font size="+3">選擇場次</font><select id="_date" class="item_bt" style="width:auto; background-color:rgba(255,255,255,1); color:rgba(0,0,0,1);">
                <?
                $a3=$mq("select * from movietime where _sid=$_GET[book] ORDER BY _time ASC");
                $tt=mktime(date("H"),date("i"),date("s"),date("n"),date("j"),date("Y"));
                while($aa3=$mfa($a3))
                {
                    if($tt<=$aa3[_time])
                    {
                        ?>
                        <option value="<?=$aa3[_id]?>"><?=date("Y/m/d H:i",$aa3[_time])?></option>
                        <?
                    }
                }
                ?>
            </select>
            <input type="button" value="選擇" style="width:80px; height:40px; background-color:rgba(255,255,255,1); border-radius:5px; font-size:18px; cursor:pointer;" onclick="choose_time()" />
		</center>
		<?
	}
	else if($_GET[q]==4)
	{
		?>
            <div style="width:100%; height:40px; font-size:18px;" align="center">
                <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">選擇場次</font></div>
                <div style="width:2.5%; height:100%; float:left;"><font color="#FFFFFF">></font></div>
                <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">選擇座位</font></div>
                <div style="width:2.5%; height:100%; float:left;">></div>
                <div style="width:18%; height:100%; float:left;">確認訂單</div>
                <div style="width:2.5%; height:100%; float:left;">></div>
                <div style="width:18%; height:100%; float:left;">填寫資料</div>
                <div style="width:2.5%; height:100%; float:left;">></div>
                <div style="width:18%; height:100%; float:left;">完成購票</div>
            </div>
            <div style="width:100%; height:200px;" align="center">
				<?
                for($i=1;$i<=50;$i++)
                {
                    $a4=$mq("select * from book where _sid=$_GET[book]&&_seat=$i");
                    $nn=$mnr($a4);
                    if($nn==0)
                    {
                        ?>
                        <div id="_seat<?=$i?>" style="width:5%; height:10%; padding:3% 2.3%; float:left; border:rgba(255,255,255,1) 1px solid; color:rgba(0,0,0,1); cursor:pointer;" onclick="_choose(<?=$i?>)">未選</div>
                        <?
                    }
                    else
                    {
                        ?>
                        <div style="width:5%; height:10%; padding:3% 2.3%; float:left; border:rgba(255,255,255,1) 1px solid; color:rgba(255,0,0,1); cursor:pointer;">已選</div>
                        <?
                    }
                }
                ?>
            </div>
            <center><input type="button" value="確定" style="width:80px; height:40px; background-color:rgba(255,255,255,1); border-radius:5px; font-size:18px; cursor:pointer; margin:10px 0px;" onclick="_seatverify(<?=$_GET[book]?>)" /></center>
		<?
	}
	else if($_GET[q]==5)
	{
		?>
            <div style="width:100%; height:40px; font-size:18px;" align="center">
                <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">選擇場次</font></div>
                <div style="width:2.5%; height:100%; float:left;"><font color="#FFFFFF">></font></div>
                <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">選擇座位</font></div>
                <div style="width:2.5%; height:100%; float:left;"><font color="#FFFFFF">></font></div>
                <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">確認訂單</font></div>
                <div style="width:2.5%; height:100%; float:left;">></div>
                <div style="width:18%; height:100%; float:left;">填寫資料</div>
                <div style="width:2.5%; height:100%; float:left;">></div>
                <div style="width:18%; height:100%; float:left;">完成購票</div>
            </div>
            <fieldset style="font-size:18px;">
	            <legend><h1>訂單內容</h1></legend>
                <?
                	$a5=$mq("select * from movietime where _id=$_GET[book]");
					$a51=$mr($a5,0,"_sid");
					$a52=$mq("select * from movie where _id = $a51");
				?>
                <img src="pic/<?=$mr($a52,0,"_img")?>" width="250px" style="float:left;" />
				<div style="float:left; padding:0px 10px;">
					電影名稱:<?=$mr($a52,0,"_name")?><br />
					開場日期:<?=date("Y/m/d",$mr($a5,0,"_time"))?><br />
					開場時間:<?=date("H:i",$mr($a5,0,"_time"))?><br />
					預定座位:<?=$_GET[seat]?><br />
            		<input type="button" value="確定" style="width:80px; height:40px; background-color:rgba(255,255,255,1); border-radius:5px; font-size:18px; cursor:pointer; margin:10px 0px;" onclick="_fillinformation('<?=$_GET[seat]?>',<?=$_GET[seats]?>,<?=$_GET[book]?>)" />
                </div>
            </fieldset>
		<?
	}
	else if($_GET[q]==6)
	{
		?>
        <div style="width:100%; height:40px; font-size:18px;" align="center">
            <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">選擇場次</font></div>
            <div style="width:2.5%; height:100%; float:left;"><font color="#FFFFFF">></font></div>
            <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">選擇座位</font></div>
            <div style="width:2.5%; height:100%; float:left;"><font color="#FFFFFF">></font></div>
            <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">確認訂單</font></div>
            <div style="width:2.5%; height:100%; float:left;"><font color="#FFFFFF">></font></div>
            <div style="width:18%; height:100%; float:left;"><font color="#FFFFFF">填寫資料</font></div>
            <div style="width:2.5%; height:100%; float:left;">></div>
            <div style="width:18%; height:100%; float:left;">完成購票</div>
        </div>
		<form method="post" action="source/sql.php?m=1&seat=<?=$_GET[seat]?>&seats=<?=$_GET[seats]?>&book=<?=$_GET[book]?>" enctype="multipart/form-data">
			<?
            for($i=1;$i<=$_GET[seats];$i++)
            {
                ?>
                <fieldset style="margin:20px 10px; font-size:18px;">
                <legend align="left"><font size="+3">訂票聯絡人資訊<?=$i?></font></legend>
                <table border="1">
                <tr>
                <td width="150">姓名:</td>
                <td width="360"><input type="text" class="tt" name="_name[<?=$i?>]" required="required" placeholder="姓名" /></td>
                </tr>
                <tr>
                <td>手機號碼:</td>
                <td><input type="text" class="tt" name="_phone[<?=$i?>]" required="required" placeholder="手機號碼" pattern="09[1-8][0-9]([\-|\s]?)[0-9]{3}\1[0-9]{3}" /></td>
                </tr>
                <tr>
                <td>Email:</td>
                <td><input type="text" class="tt" name="_email[<?=$i?>]" required="required" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /></td>
                </tr>
                </table>
                </fieldset>
                <?
            }
            ?>
            <input type="submit" class="item_bt" value="送出" />
		</form>
		<?
	}
	else if($_GET[q]==7)
	{
		?>
        <center>
        <?
		if($mnr($mq("select * from book where _number = $_GET[_search]"))==0)
		{
			echo "查無訂單";
		}
		else
		{
			$a7=$mq("select * from book where _number = $_GET[_search] order by _seat ASC");
			$a71=$mr($mq("select * from book where _number = $_GET[_search]"),0,"_sid");
			$a72=$mq("select * from movietime where _id = $a71");
			$a73=$mr($a72,0,"_sid");
			?>
			<fieldset>
            <legend><h2>訂票資訊</h2></legend>
            <table width="100%">
            <tr>
            <td rowspan="5" width="50%"><img src="pic/<?=$mr($mq("select * from movie where _id = $a73"),0,"_img")?>" width="500" /></td>
            <td width="100">電影名稱:</td>
            <td><?=$mr($mq("select * from movie where _id = $a73"),0,"_name")?></td>
            </tr>
            <tr>
            <td>電影日期:</td>
            <td><?=date("Y/m/d",$mr($a72,0,"_time"))?></td>
            </tr>
            </tr>
            <tr>
            <td>電影時間:</td>
            <td><?=date("H:i",$mr($a72,0,"_time"))?></td>
            </tr>
            <tr>
            <td>座位</td>
            <td>
            <?
            	while($aa7=$mfa($a7))
				{
					echo $aa7[_seat] . " ";
				}
			?>
            </td>
            </tr>
            </table>
            </fieldset>
			<?
		}
		?>
		</center>
		<?
	}
?>