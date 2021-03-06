<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>就业证明</title>
    <style>
        html,body{
            width: 794px;
            height: 1123px;
            margin: 0 auto;
        }
        *{
            margin:0;
            padding:0;
            font-family: "宋体";
        }
        a{
            text-decoration:none;
        }
        ul li{
            list-style:none;
        }
        .clear{
            clear:both;
        }
        .left{
            float: left;
        }
        .right{
            float: right;
        }
        input{
            outline: none;
        }
        .top{
            /*width: 595px;*/
            height: 35%;
           padding-top: 67px;
        }
        h1{
            white-space: nowrap;
            text-align: center;
            padding-top: 13px;
            font-size: 24px;
            font-weight: 500;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
          	letter-spacing: 4px;
        }
        .box{
            margin: 0 26px;
        }
        .text_1{
            white-space: nowrap;
            text-align: left;
            font-size: 24px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin:0 0 20px 0;
        }
        .display{
            display: inline-block;
        }
        .number{
            white-space: nowrap;
            text-align: right;
            font-size: 24px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin: 20px 0 23px;
          	margin-right: 85px;
        }
        .lump{
            text-align: center;
            display: inline-block;
            width: 220px;
            font-size: 18px;
            font-weight: 400;
            padding: 0 5px;
            border: none;
            border-bottom: 1px solid #000;
        }
        .lumpw{
            display: inline-block;
            width: 270px;
            font-size: 18px;
            font-weight: 400;
            padding: 5px 10px;
            border: none;
            border-bottom: 1px solid #000;
            text-align: center;
        }
        .lump_1{
            display: inline-block;
            width: 480px;
            font-size: 18px;
            font-weight: 400;
            padding: 5px 15px;
            border: none;
            border-bottom: 1px solid #000;
            text-align: center;
        }
        .lump200{
            display: inline-block;
            width: 220px;
            font-size: 18px;
            font-weight: 400;
            padding: 5px 10px;
            border: none;
            border-bottom: 1px solid #000;
            text-align: center;
        }
        .lump50{
            width: 30px;
          	font-size: 18px;
           	border-bottom: none;
        }
      	.line{
            height: 0px;
            border-bottom: 2px dotted #000;
            margin: 0 26px;
            margin-bottom: 60px;
        }
    </style>
</head>
<body>
<div class="top">
    <h1>
        非天津市户籍境内来津人士灵活就业者随迁子女申请
    </h1>
    <h1 style="padding-top: 23px;">
        义务教育学位就业证明存根
    </h1>
    <div class="box">
        <!--<p class="number" style="margin-right: 85px;">街道第{{$worker['number']}}号</p>-->
      	<p class="number" style="margin-right: 85px;">街道第<input class='lump' type=' text' style='width: 120px;  border-bottom: none; text-align: center;'>号</p>
        <p class="text_1 display" style="margin-left: 49px;">
            我辖区居住的非本市户籍人员<input class="lump " type="text" style="width: 200px;" value="{{$worker['name']}}"><span>，</span>
        </p>
        <p class="text_1 display">
            其随迁子女
        </p>
      	<input class="lump" type="text" style='width: 160px;' value="{{$worker['child_name']}}">
        <p class="text_1 display">
            ，现居住地<input class="lumpw" type="text" value="{{$worker['present_address']}}">
        </p>
        
        <p class="text_1 display">
          <span>，</span>
            联系电话
        </p>
     	 <input class="lumpw" style='width: 110px; font-size:14px;' type="text" value="{{$worker['phone']}}">
        <p class="text_1 display">
          	<span>，</span>
            灵活就业内容
        </p>
      	<input class="lump_1" style='width:320px;' type="text" value="{{$worker['worker_content']}}">
      	<span style=' font-size: 24px;'>。</span>
        <p style="float: right; margin-top: 27px; margin-right: 27px;">
            签字确认:
            <input class="lump" style="width: 120px;" type="text" value="">
        </p>
    </div>
</div>
<div class="line"></div>
<div class="bottom">
    <h1 style='letter-spacing: 3px;'>
        非天津市户籍境内来津人士灵活就业者随迁子女申请
    </h1>
    <h1 style="padding-top: 23px;">
        义务教育学位就业证明
    </h1>
    <div class="box">
       <!-- <p class="number" style="margin-right: 65px;">街道第{{$worker['number']}}号</p>-->
     	 <p class="number" style="margin-right: 85px;">街道第<input class='lump' type=' text' style='width: 120px;  border-bottom: none;'>号</p>
        <p class="text_1 display" style="margin-left: 49px;">
            经核实，在我辖区居住的非本市户籍人员<input class="lump200" type="text" style='width: 150px;' value="{{$worker['name']}}">
          <span>（身份</span>
        </p>
        <p class="text_1 display">
            证号<input class="lump200" type="text" style='width: 277px;' value="{{$worker['id_number']}}" maxlength="18"><span style='letter-spacing: 2px;'>），为灵活就业人员，灵活就业内</span>
        </p>
        <p class="text_1 display">
            容<input class="lump_1" style='width: 160px;' type="text" value="{{$worker['worker_content']}}">
        </p>
        <p class="text_1 display">
          	<span>，</span>
            工作地点<input class="lump_1" style='width: 250px;' type="text" value="{{$worker['worker_place']}}">
          	<span>，联系电</span>
        </p>
        <p class="text_1 display">
            话<input class="lumpw" type="text" style='width: 200px;' value="{{$worker['phone']}}"><span>，</span>
        </p>
        <p class="text_1 display">
            现居住地<input class="lumpw" type="text" style='width: 300px;' value="{{$worker['present_address']}}"><span>。</span>
        </p>
        <p class="text_1 display" style="margin-left: 49px;">
            其随迁子女<input class="lumpw" style='width: 220px;' type="text" value="{{$worker['child_name']}}"><span>，</span> 
        </p>
        <p class="text_1 display">
            性别<input class="lump" type="text" style='width: 130px;' value="@if($worker['child_sex']==1)男@else女@endif"><span>，</span> 
          	<span>身份证</span> 
        </p>
        <p class="text_1 display">
            号<input class="lump_1" type="text" style='width: 260px;' value="{{$worker['child_id_number']}}" ><span>，</span> 
        </p>
        <p class="text_1 display">与居住证持有人希望申请河东区义务</p>
      	<p class="text_1 ">教育学位，特此证明，以备申请学位材料所用。</p>
      
    </div>
    <div class="right" style="margin-top: 80px; margin-right: 80px;">
        <div style="margin-left:70px">
            <p class="text_1 display" style='font-size: 24px;'>街道办事处（盖章）</p>
        </div>
        <p class="text_1 display" style="margin-top:10px; margin-left: 45px;"><input class="lump lump50" style=' width: 70px;' type="text" value="{{$worker['date'][0]}}"><span>年</span><input class="lump lump50" type="text" value="{{$worker['date'][1]}}"><span>月</span><input class="lump lump50" type="text" value="{{$worker['date'][2]}}"><span>日</span>&nbsp;&nbsp;</p>
    </div>
    <div class="clear"></div>
</div>
</body>
</html>