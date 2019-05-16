<?php
ini_set("error_reporting", "E_ALL & ~E_NOTICE");
require_once('../includes/db.php');
?>
<?php
$save_path = "../mp4/";                               //文件保存路径
$max_size = 100000000000000000000000000000000000000000;  //上传文件最大值
$allow_type = array("mp4");          //允许上传的类型
$videoname = $_POST['videoname'];
$vd_date = date("Y-m-d");

//判断保存的目录是否存在，如果不存在则创建保存目录
if (!is_dir($save_path))
        mkdir($save_path);

//判断文件是否上传成功
if ($_FILES['myfile']['error']) {
        echo "File upload failed<br>";
        switch ($_FILES['myfile']['error']) {
                case 1:
                        die('The maximum number of files uploaded is exceeded<br>');
                        break;
                case 2:
                        die('The uploaded files exceed the maximum allowed by the form<br>');
                        break;
                case 3:
                        die('Only part of the file is uploaded<br>');
                        break;
                case 4:
                        die('No files were uploaded<br>');
                        break;
                default:
                        die('An unknown error<br>');
                        break;
        }
}

//通过文件的后缀判断是否为合法的文件名
$hz = array_pop(explode('.', $_FILES['myfile']['name']));
if (!in_array($hz, $allow_type)) {
        die("Upload is not allowed for this type<br>");
}

//判断文件是否超过允许的大小
if ($max_size < $_FILES['myfile']['size']) {
        die("The file exceeds the maximum allowed by PHP<br>");
}

//为了防止文件名重复，在系统中使用新名称
$save_file_name = date('YmdHis') . rand(100, 900) . '.' . $hz;

//判断是否为HTTP POST上传的，如果是则把文件从临时目录移动到保存目录，并输出保存的信息；
if (is_uploaded_file($_FILES['myfile']['tmp_name'])) {
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $save_path . '/' . $save_file_name)) {
                // echo "上传成功!<br>文件{$_FILES['myfile']['name']}保存在{$save_path}/{$save_file_name}!<br>";
        } else {
                echo "File movement failed!<br>";
        }
} else {
        die("File{$_FILES['myfile']['name']}Not a valid file uploaded by an HTTP POST");
}
// 提交路径到数据库
if (isset($_POST['submit'])) {
        $vd_content = $_POST['vd_content'];

        $query  = "INSERT INTO videos (vd_file, vd_name, vd_content, vd_date, vd_popularity) ";
        $query .= "VALUES ('{$save_path}{$save_file_name}', '$videoname', '$vd_content', '$vd_date', '0')";

        //echo $query;
        header('Location: videos.php');
        mysqli_query($connection, $query);
}
?>