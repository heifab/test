<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database search page</title>
</head>
<body style="background-color:white;">
<div style="
            background-color: #f1f1f1;
            padding: 10px;
            ">
    <img src = 'photo/img1.jpg' alt = "asc" width = "60px" height = "60px"></img>
</div>
<div style="
            max-width: 700px;
            margin: 20px auto;
            padding: 10px;
            line-height: 1.3;
            ">
    <h1 style="text-align: center;
                ">Database search results</h1>
    <hr>
</div>
<div style="
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            ">
    <a href="http://localhost:63342/web/index.php?_ijt=1mbuu4f15nhcfbjsgu7h5shh0&_ij_reload=RELOAD_ON_SAVE" target="_blank">Home<br> </a>
</div>
<?php

function dataloader($path)
{
    //    $f = fopen($path, "r");
    //    $data = fread($f,filesize($path));//指定读取大小，这里把整个文件内容读取出来
    //    echo $str = str_replace("\r\n"," ",$data);
    $file=fopen($path,"r") or exit("Unable to open file!");
    $data = fread($file, filesize($path));
    fclose($file);
    $data = str_replace("\n",",",$data);
    $data = explode(",", $data);
    //var_dump($data);
//    echo count($data);
    return $data;
}


function find_feature($key, $data, $feature)
{
    if ($key == ""):
        {
            return [-1];
        }
    endif;

    $index = strpos($key,',');
    if ($index || $index === 0):
        {
            $key[$index] = '@';
        }
    endif;

    $rows = (count($data) - 1 )/26;

    $result = [];
    if ($feature == -1):
        {
            for ($i=26; $i<count($data); $i++)
            {
                if (strpos($data[$i],$key) || strpos($data[$i],$key) === 0):
                    {
                        if (count($result) == 0):
                            {
                                array_push($result, intdiv($i, 26));
                            }
                        else:
                            {
                                if (intdiv($i, 26) != $result[count($result) - 1]):
                                    {
                                        array_push($result, intdiv($i, 26));
                                    }
                                endif;
                            }
                        endif;
                    }
                endif;
            }
        }
    else:
        {
            for ($i=1; $i<$rows; $i++)
            {
                if (strpos($data[$i * 26 + $feature],$key) || strpos($data[$i * 26 + $feature],$key) === 0):
                    {
                        array_push($result, $i);
                    }
                endif;
            }
        }
    endif;
    if (count($result) ===0):
        {
            return [-1];
        }
    else:
        {
            return $result;
        }
    endif;
}

function find_key($data): array
{
    $keyword1 = $_POST['key1'];
//    echo $keyword1, "<br>";
    $keyword2 = $_POST['key2'];
//    echo $keyword2, "<br>";
    $keyword3 = $_POST['key3'];
//    echo $keyword3, "<br>";
    $keyword4 = $_POST['key4'];
//    echo $keyword4, "<br>";
    $keyword5 = $_POST['key5'];
//    echo $keyword5, "<br>";

    $num = 5;

    $resultx = [];
    array_push($resultx, find_feature($keyword1, $data, -1));
//    var_dump($resultx);
    array_push($resultx, find_feature($keyword2, $data, 2));
//    var_dump($resultx);
    array_push($resultx, find_feature($keyword3, $data, 3));
    array_push($resultx, find_feature($keyword4, $data, 14));
    array_push($resultx, find_feature($keyword5, $data, 22));
//    echo count($resultx);

    $intersection = 1;
    if ($intersection == 1):
        {
            $result_all = [];
            for ($i=0; $i<$num; $i++)
            {
                if ($resultx[$i][0] != -1):
                    {
                        for ($j=0; $j<count($resultx[$i]); $j++)
                        {
                            array_push($result_all, $resultx[$i][$j]);
                        }
                    }
                endif;
            }
            $result_order = array_count_values($result_all);
            arsort($result_order);
            $result = array_keys($result_order);
//            var_dump($result_order);
        }
    else:
        {
            $a = 1;
        }
    endif;
    return $result;
}

function print_result($result, $data)
{
    if ($result == []):
        {
            echo "<h1 style='text-align: center'>No search results</h1>";
        }
    else:
        {
            for ($i=0; $i<count($result); $i++)
            {
                for ($j = 0; $j<26; $j++)
                {
                    $output = $data[$result[$i] * 26 + $j];
                    $index = strpos($output,'@');
                    if ($index || $index ===0):
                        {
                            $output[strpos($output,'@')] = ',';
                        }
                    endif;
                    echo $output, "<br>";
                }
                echo "<br>", "<br>", "<br>";

            }
        }
    endif;
    return 0;
}



$path = "data/IRESbase2.csv";

$data = dataloader($path);
//echo $data[132], "<br>";

$result = find_key($data);
print_result($result, $data);



//echo $keyword;

//echo $data[14], "<br>";
//echo $data[25], "<br>";
//echo $data[27], "<br>";
//echo $data[215], "<br>";

//echo count($data);



//print_r(fgetcsv($file));


//$data = import_excel($path);
//print_r($data);




//$a = 'http';
//$b = 'www';
//$d = 1;
//$e = 4;
//$c = $a.$b;
//echo $d+$d;
//echo '<br>';
//if (strpos($a, $b)):{
//    echo strpos($c,$b), $b, $c;
//    }
//else:{
//        echo $b, $c;
//    }
//endif;
//echo '<br>';
//for($x=0;$x<10;$x++)
//{
//    echo $d;
//    echo "<br>";
//}
//
//echo $c, "<br>";


//$link1 = 'http://reprod.njmu.edu.cn/cgi-bin/iresbase/index.php';
//echo "<a href='{$link1}' title=''>点我打开地址</a>";

?>

</html>
