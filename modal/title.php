<style>
    input[type=text] {
        width: 100%;
    }

    #preview {
        width: 50%;
        height: 190px;
    }
</style>
<h3>新增網站標題圖片</h3>
<div class="text-center my-3">
    <!-- 用於顯示選擇的圖片 -->
    <img id="preview" src="./img/img0.png" alt="圖片預覽" style="max-height: 190px;">
</div>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="table text-center align-middle">
        <tr>
            <td class="col">標題區題片</td>
            <td class=""><input class="form-control" type="file" name="img" id="imgInput" onchange="preImage()"></td>
        </tr>
        <tr>
            <td class=" col">標題區替代文字</td>
            <td class=""><input class="form-control" type="text" name="text" id=""></td>
        </tr>
    </table>
    <div class="text-center">
        <input type="hidden" name="table" value="<?= $_GET['table'] ?>">
        <input class="btn btn-green" type="submit" value="新增">
        <input class="btn btn-green" type="reset" value="重置">

    </div>
</form>

<script>
    // 預覽選擇的圖片
    function preImage() {
        let preview = document.getElementById('preview');
        let fileInput = document.getElementById('imgInput');

        let file = fileInput.files[0];

        if (file) {
            preview.src = URL.createObjectURL(file);
        } else {
            preview.src = "../img/img0.png";
        }
    }
</script>