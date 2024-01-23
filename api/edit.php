<?php include_once "db.php";

$table = $_POST['table'];
// $DB=${ucfirst($_POST['table'])};

$DB = ${ucfirst($table)};
unset($_POST['table']);

foreach ($_POST['id'] as $key => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
    } else {

        $row = $DB->find($id);

        if (isset($row['text'])) {
            $row['text'] = $_POST['text'][$key];
        }
        // 測試輸出資料是否有誤
        // dd($table);
        switch ($table) {
            case "titles":
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                break;
            case "table":
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                break;
            case "admin":
                $row['acc'] = $_POST['acc'][$key];
                $row['pw'] = $_POST['pw'][$key];
                $row['surname'] = $_POST['surname'][$key];
                $row['name'] = $_POST['name'][$key];
                break;
            case "menu":
                $row['href'] = $_POST['href'][$key];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case "vote":
                $row['vote'] = $_POST['vote'][$key];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            case "news":
                $row['title'] = $_POST['title'][$key];
                $row['eng_title'] = $_POST['eng_title'][$key];
                $row['text'] = $_POST['text'][$key];
                $row['good'] = $_POST['good'][$key];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                $row['total']=$_POST['total'][$key];
                $row['date'] =  $_POST['date'][$key];
                break;
            default:
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        }


        $DB->save($row);
        dd($row);
    }
}

to("../back.php?do=$table");
