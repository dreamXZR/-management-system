<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>来访登记</title>
    <style>
        html,body{
            width: 794px;
            height: 1123px;
            margin: 0 auto;
            margin-top: 100px;
        }
        *{
            margin:0;
            padding:0;
           /* font-family: "微软雅黑";*/
            /*font-style: 12px;*/
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
        table {
            width: 1180px;
            height: 600px;
            /*width: 730px;*/
            /*height: 1123px;*/
            box-sizing: border-box;
           /* font-family: 微软雅黑;*/
            /*cellspacing: 0;*/
            /*cellpadding: 0;*/
            border-collapse:collapse;
            margin: 0 120px;


        }
        .one{
            width: 87.5px;
            border: 1px solid #000;
            height: 40px;
            /*line-height: 40px;*/
            text-align: center;
            font-size: 20px;
        }
        .two{
            width: 262.5px;
            border: 1px solid #000;
            height: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 20px;
        }
        .one_1{
            /*width: 87.5px;*/
            border: 1px solid #000;
            /*height: 285.6px;*/
            /*line-height: 285.6px;*/
            /*text-align: center;*/
            font-size: 16px;
        }
        .one_2{
            width: 87.5px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 20px;
        }
        .one_3{
            height: 40px;
            line-height: 40px;
            text-align: left;
            padding-left: 5px;
            font-size: 20px;
        }
        .one_4{
            height: 40px;
            line-height: 40px;
            text-align: left;
            padding-left: 40px;
            font-size: 20px;
        }
        .one_5{
            height: 40px;
            line-height: 40px;
            text-align: left;
            padding-left: 70px;
            font-size: 20px;
        }
        .two_2{
            /*width: 495px;*/
            border: 1px solid #000;
            height: 200px;
            /*line-height: 285.6px;*/
            text-align: center;
            font-size: 20px;
        }
        .two_3{
            /*width: 495px;*/
            border: 1px solid #000;
            height: 40px;
            line-height: 40px;
            text-align: center;
            font-size: 20px;
        }
        h1{
            white-space: nowrap;
            text-align: center;
            font-size: 20px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: #000;
            margin: 8px 0 8px 0;
        }
        p{
            white-space: nowrap;
            text-align: center;
            font-size: 20px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin: 15px 0 15px 0;
            padding-left:390px;
        }
        .b{
            height: 180px;
        }
        input{
            outline: none;
        }
        .wz{
            width: 87.5px;
            height: 40px;
            text-align: center;
            border: none;
            overflow: hidden;
        }
        .wz1{
            width: 90%;
            height: 40px;
            text-align: left;
            border: none;
            overflow: hidden;
            margin: 0 10px;
        }
        .wz2{
            width: 90%;
            height: 90%;
            margin-top: 5px;
            /*text-align: center;*/
            /*line-height: 280px;*/
            border: none;
            outline: none;
            resize:none;
            overflow: hidden;
            margin: 10px 10px;
            font-size: 18px;
        }
        .wz5{
            width: 90%;
            height: 40px;
            text-align: left;
            border: none;

            overflow: hidden;
        }
        .fanzhuan{
            transform: rotate(90deg);

            -ms-transform: rotate(90deg); /* IE 9 */

            -moz-transform: rotate(90deg); /* Firefox */

            -webkit-transform: rotate(90deg); /* Safari and Chrome */

            -o-transform: rotate(90deg); /* Opera */
        }
    </style>
</head>
<body>
<div class="fanzhuan">
    <table>
        <!--<h1>陶然庭苑社区来电来访接待办理登记表</h1>-->
        <!--<p>编号：{{$register['number']}}</p>-->
        <h1 style="width: 1300px;">
            <input type="text" value="陶然庭苑" style="border: none; border-bottom: 1px solid; width: 100px; padding: 0 10px; text-align: center;">
            社区居民接访接电记录
        </h1>

        <tr>
            <td class="one" style="text-align: left; padding-left: 20px;">来访来电人姓名</td>
            <td class="one">
                <input class="wz" type="text" value="{{$register['name']}}">
            </td>
            <!--<td class="one">性别</td>-->
            <!--<td class="one">-->
                <!--<input class="wz" type="text" value="@if($register['sex']==1)男@else女@endif">-->
            <!--</td>-->
            <td class="one" style="text-align: left; padding-left: 20px;">来电时间</td>
            <td class="one" style='font-size: 16px;'>{{$register['call_time']}}</td>
            <td class="one" style="text-align: left; padding-left: 20px;">联系电话</td>
            <td class="one">
                <input class="wz" style='font-size: 14px; width: 100px;' type="text"  value="{{$register['phone']}}">
            </td>
        </tr>
        <tr>
            <td class="one" style="text-align: left; padding-left: 20px;">居民类别</td>
            <td class="two" colspan="5" >
                @foreach(\App\Models\RegisterTable::$resident_type_map as $k=>$v)
                <input type="checkbox" name="people" style="zoom:120%;" <?php if(in_array($k,explode(',', $register['resident_type']))){echo 'checked';}?>>
                <span>{{$v}}</span>
                @endforeach
            </td>

        </tr>
        <tr>
            <td class="one" style="text-align: left; padding-left: 20px;">家庭住址</td>
            <td class="two" colspan="5">
                <input class="wz1" type="text" value="{{$register['address']}}">
            </td>

        </tr>
        <tr style="border-right: 1px solid #000;"><td class="one" style="border: none; border-left: 1px solid #000; text-align: left; padding-left: 20px;" colspan="6">来访来电事由：</td></tr>

        <tr class="b" style="border-top: none;">
            <!--<td class="one_1" style="border-right: none;">来访来电事由：</td>-->
            <td class="two_2" colspan="6" style="border-top: none;">
                <textarea class="wz2" >{{$register['call_content']}}</textarea>
            </td>
        </tr>
        <tr style="border-right: 1px solid #000;"><td class="one" style="border: none; border-left: 1px solid #000; text-align: left; padding-left: 20px;" colspan="6">办理结果及反馈情况：</td></tr>

        <tr class="b" style="border-top: none; border-bottom: none;">
            <td class="two_2" colspan="6" style="border-top: none; border-bottom: none;">
                <textarea class="wz2" >{{$register['back_content']}}</textarea>
            </td>
        </tr>

        <tr style="border-top: none;">
            <!--<td class="one">备注</td>-->
            <td class="two_3" colspan="6" style="text-align: left; padding-left: 900px; border-top: none;">
                <!--<input class="wz5" type="text" value="{{$register['other']}}">-->
                <span>接访接电人:{{$register['charge']}}</span>
            </td>
        </tr>
        <!--<tr>-->
            <!--<td class="one_3" colspan="2">接电话人签字:</td>-->
            <!--<td class="one_4" colspan="2">办理人签字:</td>-->
            <!--<td class="one_5" colspan="2">{{$register['date'][0]}}&nbsp;年{{$register['date'][1]}}&nbsp;月{{$register['date'][2]}}&nbsp;日</td>-->
        <!--</tr>-->
    </table>
</div>

</body>
</html>