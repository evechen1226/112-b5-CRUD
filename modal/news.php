<style>
    input[type=text] {
        width: 100%;
    }
</style>
<h3>最新消息</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">

    <table class="table text-center align-middle">
        <tr>
            <td class="col">中文標題</td>
            <td class=""><input class="form-control" type="text" name="title" ></td>
        </tr>
        <tr>
            <td class="col">英文標題</td>
            <td class=""><input class="form-control" type="text" name="eng_title" id=""></td>
        </tr>
        <tr>
            <td class="col">內容</td>
            <td class=""><textarea class="form-control" type="text" name="text" id=""></textarea></td>
        </tr>
        <tr>
            <td class="col">按鑽數</td>
            <td class=""><input class="form-control" type="text" name="good" id=""></td>
        </tr>
        <tr>
            <td class="col">發表時間</td>
            <td class=""><input class="form-control" type="date" name="date" id=""></td>
        </tr>
    </table>
    <div class="text-center">
        <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
        <input class="btn btn-green" type="submit" value="新增">
        <input class="btn btn-green" type="reset" value="重置">

    </div>

</form>
