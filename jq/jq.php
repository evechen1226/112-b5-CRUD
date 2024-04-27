        <!-- vote -->
        <!-- <script>
          $(".vote-btn").on("click", function() {
            let id = $(this).data('id');
            let table = 'sub_vote'
            $.post("./api/vote.php", {
              id,
              table
            }, () => {
              // location.href = './api/vote.php';
              console.log(id)
              console.log(table)
            })
          })
        </script> -->

        <!-- about -->
        <script>
          $(document).ready(function() {
            const myBtn = $('.myBtn')
            const pageContainer = $('.page-container')


            // init 初始化狀態
            pageContainer.hide();
            $('#page1').show();

            myBtn.click(function() {


              let getDatePage = $(this).attr('data-page')

              pageContainer.hide();

                $(getDatePage).fadeIn(2000);


              //callback function()
              // pageContainer.hide('slow', function () {
              // $(getDatePage).fadeIn(3000);
              //  alert('123');
              //   $(getDatePage).fadeIn(3000);
              // });

            })


          })
        </script>