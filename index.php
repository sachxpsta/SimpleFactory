<html>
<head>
    <style type="text/css">

        body {
            font-size:100%;
        }

        table {
            border: 1px solid #B1CDE3;
            padding:0;
            margin:0 auto;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #B1CDE3;
            background: #fff;
            font-size:15px;
            padding: 3px 3px 3px 8px;
            color: #4f6b72;
        }
        select {
            font-size:25px;
        }

    </style>
    <title>计算器简易版v1.0（简单工厂模式）</title>
</head>
<body>
<?php

include_once('OperatorFactory.php');

$first_value = ''; //全局变量
$operator = '';
$second_value = '';
$result = '';

if(isset($_GET['var1']))
    $first_value = $_GET['var1'];

if(isset($_GET['operator']))
    $operator = $_GET['operator'];

if(isset($_GET['var2']))
    $second_value = $_GET['var2'];

$operation = OperatorFactory::createOperator($operator);

if(isset($operation)){
    $operation->mFirstValue = $first_value;
    $operation->mSecondValue = $second_value;
    $result = $operation->getResult();
}

?>
<form method = "GET">
    <table>
        <tr>
            <td>第一个数字：</td>
            <td id="var1"><input type="text" name="var1" value="<?php echo $first_value;?>"></td>
        </tr>
        <tr>
            <td>运算符：</td>
            <td>
                <select id="operator" name="operator">
                    <option value="+" <?php if(isset($_GET['operator'])&&($_GET['operator']=='+'))  echo 'selected' ?>>+</option>
                    <option value="-" <?php if(isset($_GET['operator'])&&($_GET['operator']=='-'))  echo 'selected';?> >-</option>
                    <option value="*" <?php if(isset($_GET['operator'])&&($_GET['operator']=='*'))  echo 'selected';?>>*</option>
                    <option value="/" <?php if(isset($_GET['operator'])&&($_GET['operator']=='/'))  echo 'selected';?>>/</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>第二个数字：</td>
            <td id="var2"><input type="text" name="var2" value="<?php echo $second_value;?>"></td>
        </tr>
        <tr>
            <td>结果：</td>
            <td id="result"><input type="text" value="<?php echo $result;?>">
            </td>
        </tr>
        <tr>
            <td colspan=2 align=center><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>

</body>

</html>