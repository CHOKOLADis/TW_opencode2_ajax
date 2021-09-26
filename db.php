<?
// $connect = mysqli_connect('localhost', 'root', '', 'cu54624_learning');


//         $query_add=$msqli->query("INSERT INTO `students` VALUES(NULL,'$lrn_group','$fname','$sname','$birthdate')");

//         $query_view=$msqli->query("SELECT * FROM `students` ORDER BY `lrn_group`");
//         while($row=$query_view->fetch_assoc()){
//             $students['lrn_group'][]=$row['lrn_group'];
//             $students['fname'][]=$row['fname'];
//             $students['sname'][]=$row['sname'];
//             $students['birthdate'][]=$row['birthdate'];
//         }
//         $message = "Успешно выполнено";
//     }
//     else{
//         $message = "Ошибка при выполнении";
//     }

//     $array_view = array(
//         'message'=>$message,
//         'students'=>$students;
//     );

//     header('Content-Type: text/json; charset=utf-8');

//     echo json_encode ($array_view);

?>